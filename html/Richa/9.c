#include<stdio.h>

int main(){

    int a=10;
    int b=10;
    int c=10;

    if(a>b && a>c){
        printf("%d is grater than %d and %d \n",a,b,c);
    }
    else if(b>a && b>c){
        printf("%d is grater than %d and %d \n",b,a,c);
    }
    else if(c>a && c>b){
        printf("%d is grater than %d and %d \n",c,a,b);
    }
    else{
        printf("All Numbers are Equal\n");
    }
    return 0;
}