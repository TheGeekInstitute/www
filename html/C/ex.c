#include<stdio.h>


struct abcd{
    int a;
    int b;
    char name[20];
};

int main(){


    struct abcd a1;
    // a1.a=10;

    printf("Enter name :");
    scanf("%s",&a1.name);



    printf("%s\n",a1.name);

    return 0;
}