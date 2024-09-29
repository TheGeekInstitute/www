#include<stdio.h>

int main(){
int num;
int num1;
int choice;
printf("enter first number:");
scanf("%d",&num);
printf("enter your second page:");
scanf("%d",&num1);
printf(" 1. + \n 2. - \n 3. * \n 4. / \n Choose :");
scanf("%d",&choice);
switch(choice){
    case 1: printf("%d + %d = %d\n",num,num1,num+num1);
        break;
    case 2: printf("%d - %d = %d\n",num,num1,num-num1);
        break;
    case 3: printf("%d * %d = %d\n",num,num1,num*num1);
        break;
    case 4: printf("%d / %d = %d\n",num,num1,num/num1);
        break;
    default :  printf("Invalid Choice\n");
}
    return 0;
}