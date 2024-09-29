#include<stdio.h>

int table(int num){
    for(int i =1; i<=10; i++){
        printf("%d x %d = %d\n",num,i,num*i);
    }
}

int main(){
    table(1);
    return 0;
}