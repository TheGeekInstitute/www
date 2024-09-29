STDIN equ 0
STDOUT equ 1
EXIT equ 60

global _start

section .text
    _start:
    
    mov rax,STDOUT
    mov rdi,STDOUT
    mov rsi,msg1
    mov rdx,msg1_len
    syscall

    input:
    mov rax,STDIN
    mov rdi,STDIN
    mov rsi,name
    mov rdx,100
    syscall
    mov r8,rax
    push r8
    mov r8,3
    pop r8
    print_sum:
    mov rax,1
    mov rdi,1
    mov rsi,name
    ; pop rax
    mov rdx,r8
    syscall

    exit:
    mov rax,EXIT    
    syscall



    section .data
    msg1 : db 'Enter a Name :'
    msg1_len : equ  $-msg1
   
    section .bss

    name : resb 100
    