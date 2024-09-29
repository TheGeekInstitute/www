#include<stdio.h>

int main(){

    // int age =17;

    // if(age>=18){
    //     printf("You can Vote\n");
    // }else{
    //     printf("You can Not Vote\n");
    // }




    int a=10;
    int b=13;
    int c=70;

    if(a>b && a>c){
        printf("%d is grater than %d and %d\n",a,b,c);
    }else if(b>a && b>c){
        printf("%d is grater than %d and %d\n",b,a,c);
    }else if(c>a && c>b){
        printf("%d is grater than %d and %d\n",c,a,b);
    }else{
        printf("All Numbers are Equal");
    }

    

    return 0;
}