#include<stdio.h>

int main(){

    int num=4;
    int fact=1;

    for(int i=1 ; i <=num ; i++){
        fact *=i;
    }

    printf("%d\n",fact);

    return 0;
}