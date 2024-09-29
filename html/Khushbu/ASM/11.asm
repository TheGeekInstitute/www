%include 'util.asm'
global _start

section .text
    _start:
 mov rdi,num1_msg
 call printstr
  
 call readint
 mov [num1],rax

mov rdi,num2_msg
call printstr

call readint
mov [num2],rax 


mov r8,[num1]
mov r9,[num2]
add r8,r9

mov rdi,r8
call printint



 


 call exit0


section .data
    num1_msg : db 'Enter a Number',10,0
    num2_msg : db 'Enter another Number',10,0


section .bss
    num1 : resb 64
    num2 : resb 64




