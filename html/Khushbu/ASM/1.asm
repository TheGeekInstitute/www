global _start

section .text
    _start:
    MOV RAX,1
    MOV RDI,1
    MOV RSI,data
    MOV RDX,11
    syscall ;This is Comment

    MOV RAX,60
    syscall




section .data
    data  : db 'Hello World'
