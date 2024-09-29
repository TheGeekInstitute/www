#include<stdio.h>
int main(){
    char name[300];
    int age;
    printf("Enter Your Name :");
    scanf("%s" , &name);
    printf("\n");
    printf("Enter Your Age :");
    scanf("%d",&age);
    printf("\n Hi, %s You are %d Years Old.\n",name,age);
    return 0;
}