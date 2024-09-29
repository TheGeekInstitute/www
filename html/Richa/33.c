#include<stdio.h>

int main(){

    int num=5;
    int sum=1;
    for(int i=num ; i >= 1 ; i--){
        
        sum*=i; // sum= sum+i
    }
    printf("%d\n",sum);
    return 0;
}
