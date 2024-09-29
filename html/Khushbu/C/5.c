#include<stdio.h>

int main(){

    int num=40;

    switch(num){
        case 0 : printf("Zero");
                break;       
        case 1 : printf("One");
                break;
        case 2 : printf("Two");
                break;
        case 3 : printf("Three");
                break;
        case 4 : printf("Four");
                break;
        case 5 : printf("Five");
                break;
        default : printf("Invalid Number");
    }
    

    return 0;
}