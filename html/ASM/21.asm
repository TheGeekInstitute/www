global _start

section .text
    _start:

    mov rax,567
    call printRAX

    exit:
    mov rax,60
    mov rdi,0
    syscall


printRAX:
    mov rcx,digitSpace
    mov rbx,10
    mov [rcx],rbx
    inc rcx
    mov [digitSpacePos],rcx

printRAXLoop:
    mov rdx,0
    mov rbx,10
    div rbx
    push rax
    add rdx,48

    mov rcx, [digitSpacePos]
    mov [rcx],dl
    inc rcx
    mov [digitSpacePos],rcx

    pop rax
    cmp rax,0
    jne printRAXLoop

    printRAXLoop2:
    mov rcx,[digitSpacePos]
    mov rax,1
    mov rdi,1
    mov rsi,rcx
    mov rdx,1
    syscall

    mov rcx,[digitSpacePos]
    dec rcx
    mov [digitSpacePos],rcx

    cmp rcx,digitSpace
    jge printRAXLoop2

    ret

section .data
    ; num db 555

section .bss
    digitSpace resb 100
    digitSpacePos resb 8
