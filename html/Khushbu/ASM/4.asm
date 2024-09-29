global _start

section .text
    _start:
; Print_First_Name_MSG:
 mov rax,1
 mov rdi,1
 mov rsi,firstname_msg
 mov rdx,firstname_msg_len
 syscall

 mov rax,0
 mov rdi,0
 mov rsi,firstname
 syscall
 mov rax,rcx

;  Print_Last_Name_MSG:
 mov rax,1
 mov rdi,1
 mov rsi,lastname_msg
 mov rdx,lastname_msg_len
 syscall

 mov rax,0
 mov rdi,0
 mov rsi,lastname
 syscall
 mov rax,r8


;  Print_Fullname_MSG:
 mov rax,1
 mov rdi,1
 mov rsi,fullname_msg
 mov rdx,fullname_msg_len
 syscall


; Printing_full_name:
 mov rax,1
 mov rdi,1
 mov rsi,firstname
 mov rdx,rcx
 syscall

 mov rax,1
 mov rdi,1
 mov rsi,lastname
 mov rdx,r8
 syscall


; exit:
mov rax,60
syscall


section .data
  firstname_msg : db 'Enter Your First Name :'
  firstname_msg_len : equ $-firstname_msg

  lastname_msg : db 'Enter Your Last Name :'
  lastname_msg_len : equ $-lastname_msg
  
  fullname_msg : db 'Your Fullname is : '
  fullname_msg_len : equ $-fullname_msg


 
section .bss
    firstname : resb 100
    lastname : resb 100
    