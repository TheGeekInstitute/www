global _start

    section .text
        _start:

    printing_first_name_msg:
        mov rax,1
        mov rdi,1
        mov rsi,msg_first
        mov rdx,msg_first_len
        syscall

    taking_input_for_first_name:
        mov rax,0
        mov rdi,0
        mov rsi,first
        mov rdx,100
        syscall
        mov rsp,rax ; rsp --> first name length

    printing_last_name_msg:
        mov rax,1
        mov rdi,1
        mov rsi,msg_last
        mov rdx,msg_last_len
        syscall

    taking_input_for_last_name:
        mov rax,0
        mov rdi,0
        mov rsi,last
        mov rdx,100
        syscall
        mov rcx,rax  ; rcx --> last name Length

    printing_greeting_msg:
        mov rax,1
        mov rdi,1
        mov rsi,greeting
        mov rdx,greet_len
        syscall
    
        printing_first_name:
        mov rax,1
        mov rdi,1
        mov rsi,first
        mov rdx,rsp
        syscall

        printing_last_name:
        mov rax,1
        mov rdi,1
        mov rsi,last
        mov rdx,rcx
        syscall

        mov rax,60
        mov rdi,22
        syscall


    section .data
    msg_first : db 'Enter First Name : '
    msg_first_len : equ $-msg_first

    msg_last : db 'Enter Last Name : '
    msg_last_len : equ $-msg_last

    greeting : db 'Hi, '
    greet_len : equ $-greeting

    section .bss
        first : resb 100
        last : resb 100