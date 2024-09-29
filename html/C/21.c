#include<stdio.h>

int main(){
int num[]={1,2,3};
// name[0]=10;


for(int i=0; i < sizeof(num[0])-1; i++ ){
    printf("%d \n",num[i]);
}





return 0;
}