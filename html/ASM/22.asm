%include "util.asm"

global _start

section .text
    _start:
    mov rdi,msg
    call printstr
    call readint
    mov [num],rax
    mov rbx,1

start_loop:
    mov rcx,[num]
    imul rcx,rbx
    mov rdi,rcx
    call printint
    call endl

    add rbx,1
    cmp rbx,11
    jne start_loop
    call exit0



section .data
msg db "Enter Number :",0


section .bss

num resb 8