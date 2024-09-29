#include<stdio.h>


int main(){
    int a,num;

    printf("Between 1-30:");
    scanf("%d",&num);

    if(num %2==0){
        printf("%d odd number\n",num);
    } else{

        printf("%d even number\n",num);

    }

    printf("sum of odd is %d+%d=%d");

   
    return 0;
}