#include<stdio.h>

int main(){
 int row= 6;

 /*for(int i=1; i<=row; i++){
      for(int k=1 ;k<=i ; k++){
         printf("%d ", k);
      }
 printf("\n");
 }*/
 
 /*for(int i=1; i<=row; i++){
      for(int k=1 ;k<=i ; k++){
         printf("*");
      }
 printf("\n");
 }*/

for( int i=0; i<row; i++){
    for(int k=0; k<rows-i; k++){
        printf("*");
    }
printf("\n");

}
    return 0;

}