#include <stdio.h>

int main(){
 int num[3][3] = { 
    {1, 4, 2 }, 
    {3, 6, 8 } , 
    {3, 4, 6 } 
    };


    // printf("%d\n",num[0][0]);

    // printf("%ld",sizeof(num)/sizeof(num[0]));

    int length = sizeof(num)/sizeof(num[0]);
    
    for(int i=0; i<length ; i++){
        for(int j=0; j < length ; j++){
            printf("%d ",num[i][j]);
        }
        printf("\n");
    }


    return 0;
}