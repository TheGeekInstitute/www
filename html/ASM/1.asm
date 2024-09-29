global _start

section .text
    _start:
    mov rax,1 ; system call
    mov rdi,1 ; STDOUT
    mov rsi,msg ; msg-> hello world
    mov rdx,11 ; length of hello world
    syscall 

    mov rdi,num
    call printint


 

    mov rax,60 ; exit
    syscall

section .data
    num : dw "50",10,0    
    msg : db 'Variable A:'

 