#include<stdio.h>

int main(){

    char data[100];

    FILE *fptr;

    fptr = fopen("data.txt","r");
    // fprintf(fptr,"\nHello World");
    // fgets(data,100,fptr);
    // fgets(data,100,fptr);

    while(fgets(data,100,fptr)){
    printf("%s",data);

    }



    fclose(fptr);



    return 0;
}