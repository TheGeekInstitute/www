#include<stdio.h>

void table(int num){
    if(num>0){
        for(int i=1; i<=10 ; i++){
            printf("%ld x %ld = %ld\n",num,i,num*i);
        }

        printf("\n");
    }
}


int main(){
    table(10);
    table(100);
    table(1337);
    table(111111111111111);




    return 0;
}