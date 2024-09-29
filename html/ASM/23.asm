%include 'util.asm'

global _start

section .text
    _start:
    mov rdi,msg
    call printstr
    call readint 
    mov [num],rax
    ; call endl
    ; mov rdi,1
    mov rbx,1
    
    loop:
    mov rcx,[num]
    imul rcx,rbx
    mov rdi,rcx
    call printint
    call endl
    inc rbx
    cmp rbx,11
    jne loop
    call exit0
; mov rdi,0
; call exit0



section .data
 
msg db "Enter Number :",0

section .bss
num resb 8


