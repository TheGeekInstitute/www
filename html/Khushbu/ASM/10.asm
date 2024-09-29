%include 'util.asm'
global _start

section .text
    _start:
 mov rdi,msg
 call printstr
 call exit0


section .data
    msg : db 'Access Granted!!',10,0


section .bss
    user_input : resb 100



