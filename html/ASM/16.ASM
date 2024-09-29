global _start

section .text
    _start:

    ; mov rax,0
    ; mov rdi,0
    ; mov rsi,input_key
    ; mov rdx,100
    ; syscall
    

    cmp_keys:
    ; cmp rax,org_key_len
    ; jne not_equal

    mov esi,s1
    mov edi,s2
    mov ecx,s2_len
    repe cmpsb
    je equal



    equal:
    mov rax,1
    mov rdi,1
    mov rsi,msg1
    mov rdx,msg1_len
    syscall
    jmp exit

    not_equal:
    mov rax,1
    mov rdi,1
    mov rsi,msg2
    mov rdx,msg2_len
    syscall


exit:
mov rax,60
syscall


section .data


s1 : db 'World!',0
s1_len : equ $-s1

s2 : db 'There!',0
s2_len : equ $-s2

msg1 : db 'Strings are equal',10
msg1_len : equ $-msg1

msg2 : db 'Strings are not equal'
msg2_len : equ $-msg2

section .bss
input_key : resb 100