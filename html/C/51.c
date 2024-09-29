#include<stdio.h>

int main(){
    FILE *fptr;
    char data[300];
    fptr = fopen("data.txt","r");
    // int i=1;
    int i=1;
    char roman[3][3]={};
    // while(fgets(data,300,fptr)){
        
        // printf(" i. %s",roman[0],data);
        // i++;
    // }
printf("%c",roman[0][2]);
printf("\n");
    return 0;
}