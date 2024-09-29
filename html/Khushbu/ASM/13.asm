%include 'util.asm'
global _start

section .text
   _start:


mov rbx,1
abcd:
mov rdi,rbx
call printint
call endl
inc rbx
cmp rbx,12
jne abcd
call exit0






