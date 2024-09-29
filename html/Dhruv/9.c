#include<stdio.h>

int main(){
int num=0;
int sum=0;
// printf("Enter Lower Number :");
// scanf("%d",&lower);
printf("Enter Number :");
scanf("%d",&num);

if(num%2==0){
    for(int i=0 ; i<=num ;i+=2){
        printf("%d\n",i);
        sum+=i;
    }
    printf("The Sum of All Above Even Number is : %d\n",sum);
}

    sum=0;
    for(int i=1 ; i<=num ;i+=2){
        printf("%d\n",i);
        sum+=i;
}
    printf("The Sum of All Above odd Number is : %d\n",sum);




    return 0;
}