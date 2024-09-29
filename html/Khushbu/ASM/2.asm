global _start

section .text
    _start:
    MOV RAX,3
    ADD RAX,5
    MOV RCX,RAX

    MOV RAX,1
    MOV RDI,1
    MOV RSI,RCX
    MOV RDX,10
    syscall ;This is Comment

    MOV RAX,60
    syscall




section .data
    data  : db 'Hello World'
