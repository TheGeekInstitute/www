#include <stdio.h>

int main(){
    int num=0;

    if(num==0){
        printf("Zero\n");
    }
    else if(num==1){
        printf("One");
    }
    else if(num==2){
        printf("two");
    }
    else{
        printf("Number is Grater Than 2\n");
    }

    // (num==0) ? printf("zero")  : (num==1) ? printf("One") : printf("Grater Than one");

    return 0;
}