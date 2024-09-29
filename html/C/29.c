#include<stdio.h>
int main(){
    int age;
    char name[30];
    printf("Enter Your Name :");
    scanf("%s",&name);
    printf("\n");
    printf("Enter Your Birth Year :");
    scanf("%d",&age);
    printf("\n Hi, %s You are %d Years Old.\n",name,2023-age);

    return 0;
}