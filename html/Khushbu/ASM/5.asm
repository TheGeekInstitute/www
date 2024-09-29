global _start

section .text
    _start:

Enter_name_msg:
    mov rax,1
    mov rdi,1
    mov rsi,msg
    mov rdx,msg_len
    syscall

Input_name:
    mov rax,0
    mov rdi,0
    mov rsi,fullname
    mov rdx,100
    syscall
    mov rcx,rax


Printing_greeting_msg:
    mov rax,1
    mov rdi,1
    mov rsi,fullname_msg
    mov rdx,fullname_msg_len
    syscall

Printing_input:
    mov rax,1
    mov rdi,1
    mov rsi,fullname
    mov rdx,rcx
    syscall




exit:
mov rax,60

syscall


section .data
    msg : db 'Enter Your  FullName : '
    msg_len : equ $-msg

    fullname_msg : db 'Hello Your Name is :'
    fullname_msg_len : equ $-fullname_msg

section .bss
    fullname : resb 100
