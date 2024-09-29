global _start

section .text

    _start:
    mov rax,1
    mov rdi,1
    mov rsi,msg
    mov rdx,11
    mov rax,60

    syscall

    mov rax,1
    mov rdi,1
    mov rsi,newmsg
    mov rdx,17
    mov rax,60

    syscall



section .print
msg : db 'Hello World'

section .new
newmsg : db 'by-by Hello World'




 

 


