
#include <stdio.h>

void main() {
  printf("Hello world\n");

int i=0;
  FILE *fptr;
  FILE *write;
  write = fopen("data.txt","a");
  fprintf(write,"\n");
  fclose(write);




  fptr = fopen("data.txt","r");
  char read[10];
  while(fgets(read,10,fptr)){
    i++;
  }
  printf("Total runs : %d\n",i);
  fclose(fptr);
  


} 