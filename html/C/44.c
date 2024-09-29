#include<stdio.h>
int main(){
    FILE *fptr;
    fptr = fopen("data.txt","r");

    char data[200];

    while(fgets(data,200,fptr)){
    printf("%s",data);

    }

    printf("\n");


    fclose(fptr);

    return 0;
}