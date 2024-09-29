// break and Continue

#include<stdio.h>

int main(){
    for(int i=10 ; i>=1 ; i--){
        if(i==5){
            // break;
            continue;
        }
        printf("%d\n",i);
    }


    return 0;
}