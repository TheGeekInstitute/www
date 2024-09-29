global _start

section .text
    _start:

Enter_name:
    mov rax,1
    mov rdi,1
    mov rsi,msg
    mov rdx,msg_len
    syscall

Taking_input:
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

print_name:
    mov rax,1
    mov rdi,1
    mov rsi,name
    mov rdx,rcx
    syscall 


exit:
mov rax,60

syscall


section .data
    msg : db 'Enter Your Name : '
    msg_len : equ $-msg
    hi : db 'Hi, '
    hi_len  equ $-hi

section .bss
    name : resb 200