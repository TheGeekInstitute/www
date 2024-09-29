#include<stdio.h>

int main(){
    int rows;
    char name[30];
    printf("Enter Name :");
    scanf("%s",&name);
    printf("Enter rows:");
    scanf("%d",&rows);
    for(int i=1; i<=rows; ++i){
        for(int j=1; j<= i ; ++j){
            
            printf("%s",name);
        }
        
        printf("\n");
    }


    return 0;
}