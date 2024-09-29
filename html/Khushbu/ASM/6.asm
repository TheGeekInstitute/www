global _start

section .text
   _start:

Enter_name_msg:
 mov rax,1
 mov rdi,1
 mov rsi,firstname_msg
 mov rdx,firstname_msg_len
 syscall

Input_firstname:
 mov rax,0
 mov rdi,0
 mov rsi,firstname
 syscall
 mov rax,rcx

Enter_Last_Name_MSG:
 mov rax,1
 mov rdi,1
 mov rsi,lastname_msg
 mov rdx,lastname_msg_len
 syscall

Input_lastname:
 mov rax,0
 mov rdi,0
 mov rsi,lastname
 syscall
 mov rax,r8

Print_firstname_MSG:
 mov rax,1
 mov rdi,1
 mov rsi,yourfirstname_msg
 mov rdx,yourfirstname_msg_len
 syscall

Printing_yourfirstname:
 mov rax,1
 mov rdi,1
 mov rsi,firstname
 mov rdx,rcx
 syscall


; Print_Lastname_MSG:
;  mov rax,1
;  mov rdi,1
;  mov rsi,yourlastname_msg
;  mov rdx,yourlastname_msg_len
;  syscall

; Printing_yourLastname:
;  mov rax,1
;  mov rdi,1
;  mov rsi,lastname
;  mov rdx,r8
;  syscall



exit:
mov rax,60
syscall

 section .data
  firstname_msg : db 'Enter Your First Name :',0
  firstname_msg_len : equ $-firstname_msg

  lastname_msg : db 'Enter Your Last Name :',0
  lastname_msg_len : equ $-lastname_msg

  yourfirstname_msg : db 'Your First Name is : ',0
  yourfirstname_msg_len : equ $-yourfirstname_msg

  
  yourlastname_msg : db 'Your Last Name is : ',0
  yourlastname_msg_len : equ $-yourlastname_msg



section .bss
    firstname : resb 100
    lastname : resb 100