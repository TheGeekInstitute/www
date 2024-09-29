#include<stdio.h>

int main(){
    float cacl=0,num1=0,num2=0;
    int options=0;
    
    printf("Enter First Number : ");
    scanf("%f", &num1);

    printf("Enter Second Number : ");
    scanf("%f", &num2);

    printf(" 1. SUM \n 2. Subtract \n 3. Multiply \n 4. Divide\n");
    printf("Choose :");

    // num1=(float)num1;
    // num1=(float)num1;

    scanf("%d", &options);

    switch(options){
        case 1 : cacl=num1+num2;
        break;
        case 2 : cacl = num1-num2;
        break;
        case 3 : cacl= num1*num2;
        break;
        case 4 : cacl = num1/num2;
        break;
        default : printf("Invalid option");
    }

    printf("result : %.2f \n",cacl);




    return 0;
}