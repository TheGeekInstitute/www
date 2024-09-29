global _start

section .text
    _start:
    jmp main
    main:
    mov rax,0
    mov rdi,0
    mov rsi,input_key
    mov rdx,100
    syscall
    ; mov r8,rax
    

    ; mov rsi,r8
    ; mov rdi,org_key_len
    ; cmp rsi,rdi
    ; jne asdd_msg
    ; je asgd_msg
    ; jmp exit

    ; mov ecx,rax
    ; cmp ecx, "HI"
    ; jne exit



    cmp_again:
    ; cmp rax,org_key_len
    ; jne asdd_msg

    ; mov rsi,org_key
    ; mov rdi,input_key
    ; repe cmpsb   ;<--compare string bytes
    ; je asgd_msg
    ; jne asdd_msg
    
    
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
    jmp exit


    exit:
    mov rax,60
    syscall




section .data

asgd : db 'Access Granted !',10,0
asgd_len : equ $-asgd

asdd : db 'Access Denied !',10,0
asdd_len : equ $-asdd 

org_key : db 'HELLO',10,0
org_key_len : equ $-org_key

; key : db 'HELLOY'
; key_len : equ $-key






section .bss
input_key : resb 100
