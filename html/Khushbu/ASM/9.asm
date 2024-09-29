global _start

section .text
    _start:

mov rax,0
mov rdi,0
mov rsi,user_input
mov rdx,100
syscall

cmp rax,key_len
jne access_denied

mov rsi,key
mov rdi,user_input
mov rcx,key_len
repe cmpsb
je access_granted
jne access_denied

access_granted:
mov rax,1
mov rdi,1
mov rsi,access_granted_msg
mov rdx,g_msg_len
syscall
jmp exit


access_denied:
mov rax,1
mov rdi,1
mov rsi,access_denied_msg
mov rdx,d_msg_len
syscall


exit:
mov rax,60
syscall

section .data
    access_granted_msg : db 'Access Granted!!',10
    g_msg_len : equ $-access_granted_msg

    access_denied_msg : db 'Access Denied!!',0xa
    d_msg_len : equ $-access_denied_msg

    key : db "11223344"
    key_len : equ $-key

section .bss
    user_input : resb 100