#include<stdio.h>
int sum(int k);

int main() {
  int result = sum(5);
  printf("%d", result);
  return 0;
}

int sum(int k) {
  if (k == 0) {
    return 1;
    
  } else {
    return k * sum(k - 1);
    
  }
}