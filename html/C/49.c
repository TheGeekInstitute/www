#include<stdio.h>

int main(){
    FILE *fptr;
    char data[300];
    fptr = fopen("data.txt","r");
    // int i=1;
    char c='a';
    while(fgets(data,300,fptr) && c<='z' ){
        printf(" %c. %s",c,data);
        c++;
    }

printf("\n");
    return 0;
}