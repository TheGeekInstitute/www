#include<stdio.h>

int main(){
    int rows=0;
    int ch=64;
    printf("Enter Rows :");
    scanf("%d",&rows);

    for(int i=1; i<=rows ; i++ ){
        
        for(int j=1 ; j<=i ; j++){
            // printf(" * ");
            // printf(" %d ",j);

            printf(" %c ",ch=64+j);
        
        }
        
        printf("\n");
    }

    return 0;
}