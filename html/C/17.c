#include <stdio.h>

int main() {
  int a = 1;
  int b = 20;
  int mod=0;
  
  while(a<=b){
      mod=a%2;
        if(mod==0){
            printf("%d\n", a);
            }
        a++;
  }
  return 0;   
}