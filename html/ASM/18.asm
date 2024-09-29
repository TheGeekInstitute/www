global _start

section .text
    _start:
    
    mov rax,1
    mov rdi,1
    mov rsi,msg1
    mov rdx,msg1_len
    syscall

    input:
    mov rax,0
    mov rdi,0
    mov rsi,num1
    mov rdx,100
    syscall
    ; sub rax,'0'
    ; mov r8,rax
    mov r8,rax

    mov rax,1
    mov rdi,1
    mov rsi,msg2
    mov rdx,msg2_len
    syscall

    mov rax,0
    mov rdi,0
    mov rsi,num2
    mov rdx,100
    syscall
    mov r9,rax
    ; sub rax,'0'
    ; mov r9,rax


    ; add r8,r9
    ; add r8,'0'




    mov rax,r8
    sub rax, '0'
    mov rdi,r9
    sub rdi,'0'

    add rax,rdi
    add rax,'0'

    mov [sum],rax

    print_sum:
    mov rax,1
    mov rdi,1
    mov rsi,sum
    mov rdx,10
    syscall

    exit:
    mov rax,60
    syscall



    section .data
    msg1 : db 'Enter a Digit :'
    msg1_len : equ  $-msg1
    msg2 : db 'Enter a Second Digit :'
    msg2_len : equ $-msg2
    
    section .bss

    num1 : resb 100
    num2 : resb 100
    sum : resb 10









