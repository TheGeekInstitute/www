#include<stdio.h>

int add(int,int);
int sub(int,int);
int multi(int,int);
int divide(int,int);



int main(){
    int num1,num2;
    printf("enter first number");
    scanf("%f",&num1);
    printf("enter second number");
    scanf("%f",&num2);

     printf("%.1f + %.1f = %.2f\n",num1,num2, num1+num2) ;
     printf("%.1f - %.1f = %.2f\n",num1,num2, num1-num2);
     printf("%.1f * %.1f = %.2f\n",num1,num2, (num1*num2));
     printf("%.1f / %.1f = %.2f\n",num1,num2, (num1/num2));



    return 0;
}