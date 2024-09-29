#include<stdio.h>

int add(int a,int b){
    int add=(a+b);
    return add;
}

int sub(int a,int b){
    int sub=(a-b);
    return sub;
}

int mul(int a,int b){
    int mul=(a*b);
    return mul;
}

int div(int a,int b){
    int div=(a/b);
    return div;
}


int main(){
    int num1,num2;

    printf("enter first number");
    scanf("%f",&num1);
    printf("enter second number");
    scanf("%f",&num2);

    printf("%d\n");
    printf("%d\n");
    printf("%d\n");
    printf("%d\n");


    


    return 0;
}