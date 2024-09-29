global _start

    section .text   
        _start:
        mov rax,1
        mov rdi,1
        mov rsi,print  
        mov rdx,print_len
        syscall
        
        taking_input:
        mov rax,0
        mov rdi,0
        mov rsi,name
        mov rdx,200
        syscall
        mov rcx,rax
        

        printing_hi:
        mov rax,1
        mov rdi,1
        mov rsi,hi  
        mov rdx,hi_len
        syscall

        
        mov rax,1
        mov rdi,1
        mov rsi,name  
        mov rdx,rcx
        syscall




    exit:
    mov rax,60
    mov rdi,11
    syscall




    section .data

    print : db 'Enter your name '
    print_len : equ $-print
    hi : db 'Hello , '
    hi_len : equ $-hi


    section .bss
    name : resb 200
