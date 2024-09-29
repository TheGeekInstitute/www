#include<stdio.h>
int main(){
    int x,y, rows;
    printf("Enter the no of lines");
    scanf("%d",&rows);
    for(int x=1; x<=rows;++x){
        for (int y=1;y<=rows;++y){
            printf ("?");
        }

        printf("\n");
    }

    return 0;





}