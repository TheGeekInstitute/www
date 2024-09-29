global _start

    section .text
    main:
        mov rbx,10
        add rbx,10
        syscall

        mov rbx,60
        syscall
        
    