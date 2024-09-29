global _start

section .text
    _start:
    mov rax,1
    mov rdi,1
    mov rsi,msg 
    mov rdx,10
    syscall

    mov rax,60
    syscall


section .print
    msg : db 'Aman singh'  
