global _start

    section .text
        _start:
    first_line:    
        mov rax,1
        mov rdi,1
        mov rsi,first 
        mov rdx,first_len
        syscall

    taking_input1:
        mov rax,0
        mov rdi,0
        mov rsi,name1
        mov rdx,100
        syscall
        mov rsp,rax
    
    second_line:
        mov rax,1
        mov rdi,1
        mov rsi,second
        mov rdx,second_len
        syscall

    taking_input2:
        mov rax,0
        mov rdi,0
        mov rsi,name2
        mov rdx,100
        syscall
        mov rcx,rax
       
    
    printing_name1:
        mov rax,1
        mov rdi,1
        mov rsi,name1
        mov rdx,rsp
        syscall

    printing_name2:
        mov rax,1
        mov rdi,1
        mov rsi,name2
        mov rdx,rcx
        syscall
        
     
        exit:
        mov rax,60
        mov rdi,11
        syscall




    section .data
        first : db 'Enter first name : '
        first_len : equ $-first
        second : db 'Enter last name : '
        second_len : equ $-second
        
        

    section .bss 
        name1 : resb 100
        name2 : resb 100        