global _start 

section .text
    _start:
    _printing_first_name:
    mov rax,1
    mov rdi,1
    mov rsi,first
    mov rdx,first_len
    syscall


    _taking_input_for_first_name:
    mov rax,0
    mov rdi,0
    mov rsi,name
    mov rdx,100
    syscall
    mov r9,rax


    _printing_last_name:
    mov rax,1
    mov rdi,1
    mov rsi,last
    mov rdx,last_len
    syscall


    _taking_input_for_last_name:
    mov rax,0
    mov rdi,0
    mov rsi,name1
    mov rdx,100
    syscall
    mov r10,rax

    _printing_dob:
    mov rax,1
    mov rdi,1
    mov rsi,dob
    mov rdx,dob_len
    syscall

     _taking_input_for_dob:
    mov rax,0
    mov rdi,0
    mov rsi,dob1
    mov rdx,50
    syscall
    mov r11,rax




    mov rax,1
    mov rdi,1
    mov rsi,first_name
    mov rdx,first_name_len
    syscall

    mov rax,1
    mov rdi,1
    mov rsi,name
    mov rdx,r9
    syscall

    mov rax,1
    mov rdi,1
    mov rsi,last_name
    mov rdx,last_name_len
    syscall

    mov rax,1
    mov rdi,1
    mov rsi,name1
    mov rdx,r10
    syscall

    mov rax,1
    mov rdi,1
    mov rsi,dob_msg
    mov rdx,dob_msg_len
    syscall

    mov rax,1
    mov rdi,1
    mov rsi,dob1
    mov rdx,r11
    syscall





    mov rax,60
    syscall



section .data

first : db 'Enter First name :'
first_len : equ $-first

last : db 'Enter last name :'
last_len : equ $-last

dob : db 'Enter your DOB :'
dob_len : equ $-dob


first_name : db 'First Name :'
first_name_len : equ $-first_name
last_name : db 'Last Name :'
last_name_len : equ $-last_name
dob_msg : db 'DOB :'
dob_msg_len : equ $-dob_msg


section .bss
name : resb 100
name1 : resb 100
dob1 : resb 50







