#include<stdio.h>

int main(){

    int num=20, sum=0;

    for(int i=1 ; i<=num ; i++){
        if(i%2!=0){
            sum+=i; // sum = sum+i;
        }
    }

    printf("%c\n",sum);

    return 0;
}