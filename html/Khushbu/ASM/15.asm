%include 'util.asm'
global _start

section .text
   _start:

mov rbx,1
abcd:
   mov rcx,5
   imul rcx,rbx
   mov rdi,rcx
   call printint
   call endl
   add rbx,1
   cmp rbx,11
   jne abcd
call exit0





