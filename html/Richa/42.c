#include<stdio.h>

int main(){

char name[]="Richa ABCD";


FILE *fptr;

fptr = fopen("data.txt", "a");

fprintf(fptr, "%s\n", name);


fclose(fptr); 


    return 0;
}