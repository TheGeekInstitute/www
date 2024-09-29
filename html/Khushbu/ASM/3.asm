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
    mov rsi,name
    mov rdx,100
    syscall
    mov rcx,rax


Printing_greeting_msg:
    mov rax,1
    mov rdi,1
    mov rsi,name_msg
    mov rdx,name_msg_len
    syscall

Printing_input:
    mov rax,1
    mov rdi,1
    mov rsi,name
    mov rdx,rcx
    syscall




exit:
mov rax,60

syscall


section .data
    msg : db 'Enter Your Name : ',0
    msg_len : equ $-msg

    name_msg : db 'Hello Your Name is :',0
    name_msg_len : equ $-name_msg

section .bss
    name : resb 100


    