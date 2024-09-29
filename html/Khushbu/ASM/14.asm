%include 'util.asm'
global _start

section .text
   _start:

mov rdi,msg_1
call printstr

call readint
mov [num1], rax


; call printint




mov r8,[num1]
mov rbx,1
abcd:
mov rdi,rbx
call printint
call endl
inc rbx
cmp rbx,r8
jne abcd
call exit0

section .data

msg_1 : db ' enter a Number: ',0

section .bss
 num1 : resb 16


