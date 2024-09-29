%include "util.asm"

global _start

section .text
    _start:
    first_msg:
    mov rdi,msg
    call printstr
    call readint
    mov [num],rax
    call endl
    
  

    second_msg:
    mov rdi,msg1
    call printstr
    call readint
    mov [num1],rax
    call endl
   


    choices_msg:
    mov rdi,choices
    call printstr
    mov rdi,choice_msg
    call printstr
    call readint
    mov [choice],rax
    call endl



    cmp_values:
    mov rdx,[choice]
    cmp rdx,1
    je add_values
    cmp rdx,2
    je sub_values
    cmp rdx,3
    je mul_values
    cmp rdx,4
    je div_values
    jne error_msg
    




    add_values:
    mov rax,[num]
    mov rbx,[num1]
    add rax,rbx
    mov [calc],rax
    mov rdi,[output]
    jmp print
    call exit0

    sub_values:
    mov rax,[num]
    mov rbx,[num1]
    sub rax,rbx
    mov [calc],rax
    mov rdi,[output]
    jmp print
    call exit0

    mul_values:
    mov rax,[num]
    mov rbx,[num1]
    imul rax,rbx
    mov [calc],rax
    mov rdi,[output]
    jmp print
    call exit0



    div_values:
    mov rdx,0
    mov rax,[num]
    mov rbx,[num1]
    idiv rbx
    mov [calc],rax
    mov rdi,[output]
    jmp print
    call exit0

   error_msg: 
   mov rdi,error1
   call printstr
   call exit0 

    
    print:
    mov rdi,output
    call printstr
    mov rdi,[calc]
    call printint
    call endl
    call exit0



section .data

choices db "Enter Arthmatic Operation :",10 , "1: Add",10 , "2: Subtract",10 , "3: Multiply",10 , "4: Division",10,0

msg db "Enter Number :",0
msg1 db "Enter Another Number :",0
output db "Output :",0
choice_msg db "Choose : ",0

error1 db  "Invalid Choice ",0








section .bss
num resb 8
num1 resb 8
calc resb 8
choice resb 8

