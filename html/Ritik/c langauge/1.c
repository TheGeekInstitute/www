#include<stdio.h>
int main(){
 int sum=0;
 int i=1;

 while(i<=10){
    printf("%d\n",i);
    sum+=i;    // sum = sum+i
    i++;
 }

 printf("The sum of all Numbers is : %d \n",sum);

  return 0;
}
