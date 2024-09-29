global _start

section .text
    _start:
    mov rax,1
    mov rbx,1
    mov rsi,msg
    mov rdx,11  
    syscall

    mov rax,60
    syscall

section .print
    msg : db 'Hello world'



