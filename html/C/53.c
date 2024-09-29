#include<stdio.h>
int oddEven(int num){
    if(num%2==0){
        return 1;
    }
    else{
        return 0;
    }
}

int main(){
int number;
printf("Enter a Number : ");
scanf("%d",&number);
if(oddEven(number)==1){
    printf("\n%d is an Even Number\n",number);
}
else{
    printf("\n%d is a Odd Number\n",number);

}

return 0;
}
