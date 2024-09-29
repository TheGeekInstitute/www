#include<stdio.h>
int main(){
int num1 , num2 , num3;
printf("enter a number:");
scanf("%d",&num1);

printf("enter second number:");
scanf("%d",&num2);
    
printf("enter third number:");
scanf("%d",&num3);

if(num1>num2 && num1>num3){
    printf("%d is largest number",num1);
}
else if(num2>num1 && num2>num3){
    printf("num2 is largest number",num2);
}
else{
    printf("%d is largest number");
}




return 0;
}
