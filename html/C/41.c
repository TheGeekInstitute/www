#include<stdio.h>
int main(){
    int i,num1,num2,sum;

    printf("Enter The Min Number : ");
    scanf("%d",&num1);
    printf("\nEnter The Max Number : ");
    scanf("%d",&num2);


    for(i=0;i<=num2;i+=2){
        if(i%2==0){
            sum+=i;
        }
    }
    printf("The Sum of all Even Number Between %d to %d is : %d\n",num1,num2,sum);
    
    
    sum=0;
    for(i=1;i<=num2;i+=2){
        if(i%2!=0){
            sum+=i;
        }
    }
    printf("The Sum of all Odd Number Between %d to %d is : %d\n",num1,num2,sum);


}

