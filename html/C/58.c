#include <stdio.h>
int main(){
    int pass;
    int original_pass=123*10/2;
    printf("Enter Password :");
    scanf("%d",&pass);
    if(pass==original_pass){
        printf("Correct Password :)\n");
    }
    else{
        printf("Wrong Password :(\n");
    }
    return 0;
}