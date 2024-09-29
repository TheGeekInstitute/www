#include<stdio.h>
int main(){

    FILE *fptr;
    fptr = fopen("suraj.txt","r");
      char abc[100];

   while(fgets(abc,100,vinit)){
   printf("%s",abc);
   
    fclose(fptr);
   }


}