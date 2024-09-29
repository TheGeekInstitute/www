#include<stdio.h>

void main(){
    int pass1,pass2;
    printf("Enter First Password :");
    scanf("%d",&pass1);
    if(pass1==1111){
    printf("Enter Second Password :");
    scanf("%d",&pass2);
        if(pass2==1337){
            printf("Correct Password");
        }
        else{
            printf("Worng Password");
        }
    }
    else{
        printf("Worng Password");
    }


}