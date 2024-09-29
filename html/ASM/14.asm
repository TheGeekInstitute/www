global _start

section .text
    _start:

    printing_formal_msg:
    mov rax,1
    mov rdi,1
    mov rsi,formal_msg
    mov rdx,formal_msg_len
    syscall

    input_for_formal_msg:
    mov rax,0
    mov rdi,0
    mov rsi,input_key
    mov rdx,100
    syscall
    mov rcx,rax
    

    cmp_keys:


    mov rax,rcx
    sub rax,'0'
    mov rdi,org_key
    sub rdi,'0'

    add rax,rdi

    ; mov rsi,org_key
    ; mov rdi,key
    ; repe cmpsb   ;<--compare string bytes
    je asgd_msg
    jne asdd_msg



    asgd_msg:
    mov rax,1
    mov rdi,1
    mov rsi,asgd
    mov rdx,asgd_len
    syscall
    jmp exit

    asdd_msg:
    mov rax,1
    mov rdi,1
    mov rsi,asdd
    mov rdx,asdd_len
    syscall


    exit:
    mov rax,60
    syscall




section .data

formal_msg : db 'Enter Your Key :-'
formal_msg_len : equ  $-formal_msg 

asgd : db 'Access Granted !',0xa
asgd_len : equ $-asgd

asdd : db 'Access Denied !',0xa
asdd_len : equ $-asdd 

org_key : db 'HELLO'
org_key_len : equ $-org_key

key : db 'P@$$WORD'
key_len : equ $-key





section .bss
input_key : resb 100
