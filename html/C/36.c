#include<stdio.h>

int main(){
    int myAge=10;
    int * ptr = &myAge;
    printf("\n%p\n",ptr);
}