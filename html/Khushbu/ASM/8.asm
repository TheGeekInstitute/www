global _start
  _start:
  
  section .text

mov rax,0
mov rdi,0
mov rsi,user_input
mov rdx,100
syscall


mov rsi,login_key
mov rdi,user_input
mov rcx,key_len
repe cmpsb
je login_successfully
jne login_failed


login_successfully:
mov rax,1
mov rdi,1
mov rsi,successfully
mov rdx,s_len
syscall
jmp exit


login_failed:
mov rax,1
mov rdi,1
mov rsi,failed
mov rdx,f_len
syscall

exit:
mov rax,60
mov rdi,0
syscall

  section .data

  successfully : db 'successfully login!!',10
  s_len : equ $-successfully

  failed :db 'login failed!!',10
  f_len : equ $-failed

  
    login_key : db "11223300"
    key_len : equ $-login_key



  section .bss
  user_input : resb 100
