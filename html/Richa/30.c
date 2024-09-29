#include<stdio.h>

int max(int a,int b,int c){
    int max;
    if( a>b && a>c){
        max=a;
    }
    else if(b>a && b>c){
        max = b;
    }
    else if(c>a && c>b){
        max =c;
    }
    else{
        max=0;
    }
    return max;
}


int main(){

    int z = max(45,10,5);
    
    printf("%d",z);

    return 0;
}