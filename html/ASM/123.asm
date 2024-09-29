; go to this URL to see the code inaction 
section .bss ;unitilized data
 stringBuffer resb 100 ;reserve 100bytes printing out many digits, this is actually storing the string, 
 stringBufferPos resb 8 ;8bytes for 64 bits, stringBufferPos keeps track of how far along in the string we are
 
section .data ;initialized data
    a dw 50 ;first variable to find GCD, set me before running
    b dw 25 ; Second varible to find GCD, set me before running
    c dw 0;store the GCD and then try to print when completed
    
    textA db "Variable A:"
    textB db "Variable B:"
    textC db "Variable C:"

section .text
 global _start ;init the program

_start:
    ;print text for a
    mov rax, 1
    mov rdi, 1
    mov rsi, textA
    mov rdx, 11
    syscall
    xor rax,rax
    xor rdi,rdi
    xor rsi,rsi
    xor rdx,rdx
    
    ;print a
    mov ax,[a] ;we need a 16 bit word size so use the AX lower 16 bit short
    call _printnumberRAX
    
    ;print text for B
    mov rax, 1
    mov rdi, 1
    mov rsi, textB
    mov rdx, 11
    syscall
    xor rax,rax
    xor rdi,rdi
    xor rsi,rsi
    xor rdx,rdx
    
    ;print b
    mov ax, [b]
    call _printnumberRAX
    
    ;print text for GCD
    mov rax, 1
    mov rdi, 1
    mov rsi, textC
    mov rdx, 11
    syscall
    xor rax,rax
    xor rdi,rdi
    xor rsi,rsi
    xor rdx,rdx
    ;now that all the text has been displayed do the work for the GCD using euklids algorithm
    call euklid

    
    ;print c once we have the value
    mov ax, [c]
    call _printnumberRAX
    
    mov rax, 60 ; this exits the program
    mov rdi, 0
    syscall


_printnumberRAX:
    mov rcx, stringBuffer ;first breakdown the digit backwards, and want new line character at the beginning then
    mov rbx, 10 ; new line, add a new line character to the beginning
    mov [rcx], rbx ;move into rcx as a pointer rbx?
    inc rcx; increment stringBufferPos
    mov [stringBufferPos], rcx

_printnumberRAXLoop:
    mov rdx, 0 ;want 0 in rdx before division, or else you will end up with unexpected result, RDX holds the remainder of division and can be concatednated
    mov rbx, 10 ;want to divide by 10, store the value 
    ;              ;if I divide 123 by 10 = 12 remainder 3
    ;              ;last digit is now in rdx
    ;              ;add that last digit in rdx 
    div rbx 
    push rax
    add rdx, 48 ;convert to charater in rdx 
    
    mov rcx, [stringBufferPos] ;move stringBuffer pointer into RCX increment space in the string?
    mov [rcx], dl ;load the lower 8bytes of RDX inte RCX
    inc rcx
    mov [stringBufferPos], rcx
    
    pop rax ;
    cmp rax, 0;continue with loop if not 0, keep dividing by 10 untill we get 0
    jne _printnumberRAXLoop

_printnumberRAXLoop2:  ;this loop will be entered if _printnumberRAXLoop isn't repeated
    mov rcx, [stringBufferPos] ;
    
    mov rax, 1 ;
    mov rdi, 1 ;
    mov rsi, rcx ;
    mov rdx, 1 ;
    syscall ; print 1 character
    
    mov rcx, [stringBufferPos] ; moving through the string backwards will print out the number forwards, 
                            ;since getting the remainders builds the string backwards
    dec rcx
    mov [stringBufferPos], rcx
    
    cmp rcx, stringBuffer ;compare rcx to our stringbuffer, if the Pos is equal to stringbuffer that is the beginning of the stringbuffer and we are done reading it 
    jge _printnumberRAXLoop2
    
    ret
 
euklid:

    mov cx, [a] ; find the gcd of these numbers
    mov bx, [b] ;
    
    
    cmp bx,cx ; compare rbx to rcx (first 16 bits so we use bx cx)
              ;check to see if these are equal
    
    je finish ; jump if equal zero
    
                ; check to see if rbx > rcx
    jg again ; jump if greater 

    
    xchg bx,cx ;if not, swap rbx and rcx so that rbx > rcx

again:

    ; shuffle bx and cx up to ax and bx
    mov ax,bx
    mov bx,cx
    
    xor dx,dx ; zero out rdx in preparation for division rdx:rax by rcx
    
    div cx ; divide by cx, remainder is in dx
    
    cmp dx,0
    je finish
    
    mov bx,cx
    mov cx,dx
    
    jmp again

finish:
 mov [c], bx ;now that we have the result put it in C and return
 ret ;
