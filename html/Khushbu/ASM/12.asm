%include 'util.asm'
global _start

section .text
   _start:

mov rdi,msg_1
call printstr

call readint
mov [num1], rax

mov rdi,msg_2
call printstr

call readint
mov [num2],rax

mov r9,[num1]
mov r10,[num2]
add r9, r10

mov rdi ,r9
call printint



call exit0

section .data

msg_1 : db ' enter a Number please...',10,0
msg_2 : db 'enter a another number please...',10,0

section .bss
 num1 : resb 50
 num2 : resb 50
