#include<stdio.h>
int main(){
    int arr[4][4]={{1,2,3,4},{5,6,7,8},{9,9,1,2},3,4,5,6};
    int arr01[4][4]={{1,2,3,4},{5,6,7,8},{9,9,1,2},3,4,5,6};
    int mut[4][4];
    int a;
    printf("enter a number =");
    scanf("%d",&a);
    for(int i=0;i<a;i++){
        for(int j=0;j<a;j++){
            printf(" %d",arr[i][j]);
        }
        printf("\n");
    }
    printf("\n");
    for(int i=0;i<a;i++){
        for(int j=0;j<a;j++){
            printf(" %d",arr01[i][j]);
        }
        printf("\n");
    }
    for(int i=0;i<a;i++){
        for(int j=0;j<a;j++){
            mut[i][j]=arr[i][j]*arr01[i][j];
        }
        // printf("\n");
    }
    printf("\n");
    // printf("answer is =");
    for(int i=0;i<a;i++){
        for(int j=0;j<a;j++){
            printf(" %d",mut[i][j]);
        }
        printf("\n");
    }
}