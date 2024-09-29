;Division
ansprint macro res
    mov dl,res
    add dl,30h
    mov ah,02h
    int 21h     z   
endm


; data segment
msg1 db "Enter  one number $"
msg2 db 10,13,"Enter  second number $"
msg3 db 10,13,"result =  $"
msgdecimal db ".$"
a db 0
b db ?
decimal db 10 dup(0)    
data ends
                         
; code segment
assume cs:code,ds:data
start:
            mov ax,data
            mov ds,ax
           
            ;displaying the message
            mov dx,offset msg1
            mov ah,09h
            int 21h
           
            ;taking the 1st input number
            mov ah,01h
            int 21h
            sub al,30h
            mov bh,al
            mov ah,01h
            int 21h
            sub al,30h
            mov bl,al
           
            ;combing two numbers
            mov ax,bx
            aad
            mov bx,ax
           
           
            ;displaying the 2nd  message
            mov dx,offset msg2
            mov ah,09h
            int 21h
           
            ;taking the 2st input number
            mov ah,01h
            int 21h
            sub al,30h
            mov ch,al
            mov ah,01h
            int 21h
            sub al,30h
            mov cl,al
           
            ;combing two numbers
            mov ax,cx
            aad
            mov cx,ax
            mov b,cl
           
            ;dividing the number
            mov al,bl
            div cl
            mov bl,ah
            aam
            mov cx,ax
           
            ;displaying the result message
            mov dx,offset msg3
            mov ah,09h
            int 21h
           
            ;displaying the result
            mov dl,ch
            add dl,30h
            mov ah,02h
            int 21h
           
            mov dl,cl
            add dl,30h
            mov ah,02h
            int 21h
           
            ;displaying the decimal
            mov dx,offset msgdecimal
            mov ah,09h
            int 21h
           
            ;spliting the decimal
            mov ch,00
            mov cl,05
           
    label1:         
            mov al,10
            mul bl ;bl contains the remainder part of the ans i.e. the ah part
            div b  ;b contains the 2nd number of the input
            mov bl,ah
            aam    ;spilts the number into decimal             
            mov decimal,al;store the number in the array          
            ansprint decimal
            loop label1
            mov cx,ax
                       
           
            ;terminate the program successfully
            mov ax,4c00h
            int 21h