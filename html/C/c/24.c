#include<stdio.h>

int main(){
    //Hi this is single line comment.//
    // puts("Hello world:");
    /*hi
    this
    is
    multi
    line
    comment.*/
//  float a=5.99;
//  printf("%f\n",a);


//  double d=.1;
//  printf("%lf",d);
    
// int x=5;
// int y=42;       

// printf("%i,%i\n",1 ? x:y, 0 ? x:y);
// printf("\n");
FILE *even, *odd;
int n=100;
int k=0;

even = fopen("even.txt","w");
odd = fopen("odd.txt","w");

for(n=1;k<n+1;k++){
    k%2==0 ? fprintf(even,"%5d\n",k) : fprintf(odd,"%5d\n",k);
}
fclose(even);
fclose(odd);


}