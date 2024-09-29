#include<stdio.h>
int main(){
    int num1 =100;
    int num2 =20;

    int sum=num1+num2;
    int sub = num1-num2;
    int mul = num1 *num2;
    int div = num1/num2;
    printf("%d + %d = %d\n",num1,num2,sum);
    
    printf("%d - %d = %d\n",num1,num2,sub);

    printf("%d *  %d = %d\n",num1,num2,mul);

    printf("%d /  %d = %d\n",num1,num2,div);

    return 0;
}