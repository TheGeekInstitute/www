#include<stdio.h>

int main(){

    int arry[3][3] = {{1,2,3},{4,5,6},7,8,9};


    int arry1[3][3] = {{1,2,3},{4,5,6},7,8,9};

    int mul[3][3];



    for(int i=0 ; i<3 ; i++ ){
        for(int j=0 ; j<3 ; j++){
            mul[i][j]=arry[i][j] * arry1[i][j];
        }
    }

  
  
    for(int i=0 ; i<3 ; i++ ){
        for(int j=0 ; j<3 ; j++){
            printf("%d ",mul[i][j]);
        }

        printf("\n");
    }



    return 0;
}