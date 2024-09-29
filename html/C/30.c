#include<stdio.h>
int main(){

float num1, num2;
int choice;
printf("Enter First Number :");
scanf("%f",&num1);
printf("\nEnter Second Number :");
scanf("%f",&num2);
printf("%f\n",num1);
printf("1. +\n");
printf("2. -\n");
printf("3. *\n");
printf("4. /\n");
printf("Choose Opration :");
scanf("%d",&choice);

if(choice==1){
    printf("%.1f + %.1f = %.2f\n",num1,num2, num1+num2);

}
else if(choice==2){
    printf("%.1f - %.1f = %.2f\n",num1,num2, num1-num2);

}
else if(choice==3){
    printf("%.1f * %.1f = %.2f\n",num1,num2, (num1*num2));

}
else if(choice==4){
    printf("%.1f / %.1f = %.2f\n",num1,num2, (num1/num2));

}
else{
    printf("Invalid Opration\n");

}

}

