#include<stdio.h>
int main(){


    FILE *vinit;

   vinit = fopen("abc.txt","r");
   
   char abc[100];

   while(fgets(abc,100,vinit)){
   printf("%s",abc);
   
   }
//    fprintf(vinit,"hello world:\n");
    fclose(vinit);
}