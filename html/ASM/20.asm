global _start   
    section .text
    _start:


    mov rax,name
    call print

    mov rax,name1
    call print

    exit:
    mov rax,60
    mov rdi,0
    syscall

    print:
    push rax
    mov rbx,0

    print_loop:
    inc rax
    inc rbx
    mov cl,[rax]
    cmp cl,0
    jne print_loop
    
    mov rax,1
    mov rdi,1
    pop rsi
    mov rdx,rbx
    syscall
    ret

    section .data
    name db 'Hello World',10,0
    name1 db 'Hello World Again',10,0