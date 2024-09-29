global _start

section .text
    _start:
    mov rax,1 
    mov rdi,1 
    mov rsi,name 
    mov rdx,len_name 
    syscall

name_input:
    mov rax,0
    mov rdi,0
    mov rsi,input_name
    mov rdx,100
    syscall
    mov rbx,rax

printing_greeting:
    mov rax,1 
    mov rdi,1 
    mov rsi,greeting 
    mov rdx,g_len 
    syscall

 printing_name:
    mov rax,1 
    mov rdi,1 
    mov rsi,input_name 
    mov rdx,rbx
    syscall   

exit:
    mov rax,60
    mov rdi,12
    syscall

section .data
    name : db 'Enter Your Name :'
    len_name : equ $-name
    
    greeting : db 'Hi, '
    g_len : equ $-greeting


    section .bss
        input_name : resb 100