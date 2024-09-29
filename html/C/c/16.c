#include<stdio.h>
int oddEven(int num){
    if(num%2==0){
       printf("%d is an Even Number\n",num);
    }
    else{
       printf("%d is a odd Number\n",num);
    }
}

int main(){
    int number;
    printf("Please Enter a Number :");
    scanf("%d",&number);

    oddEven(number);

    return 0;
}