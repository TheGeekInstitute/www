#include<stdio.h>

int main(){

    int arry[3][4]={{1,2,3,1},{4,5,6},{7,8,9}} ;
    int len = sizeof(arry)/sizeof(arry[0]);
    
   
    for(int i=0 ; i < len ; i++){
        for(int j=0 ; j< sizeof(arry[i])/sizeof(arry[i][0]) ; j++){
            printf(" %d ",arry[i][j]);
        }
        printf("\n");

    }

    


    return 0;
}