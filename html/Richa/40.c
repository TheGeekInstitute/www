#include<stdio.h>
#include <stdbool.h>
int main(){
FILE *fptr;

fptr = fopen("data.txt", "r");
char data[100];

// fgets(data, 100, fptr);
// fgets(data, 100, fptr);
// fgets(data, 100, fptr);
// fgets(data, 100, fptr);
// fgets(data, 100, fptr);


// printf("%d\n",fgets(data, 100, fptr));
// printf("%s", data);

while(fgets(data,100,fptr)){
    printf("%s",data);
}
    printf("\n");


fclose(fptr);

    return 0;
}