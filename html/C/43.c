#include<stdio.h>
int main(){
char name[30]="ABCD2";

FILE *fptr;
fptr = fopen("data.tx", "a");
fprintf(fptr,name);
fprintf(fptr,"\n");


fclose(fptr);

    return 0;
}