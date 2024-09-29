#include<stdio.h>

int main(){

    int a,b,sum;
    printf("enter first number:");
    scanf("%d",&a);
    printf("enter second number:");
    scanf("%d",&b);

    for(a;a<=b;a++){

        printf("%d\n",a);
        sum+=a;
    }
        printf("Sum of all number is %d",sum);

    }
    



