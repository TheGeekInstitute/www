#include<iostream>
using namespace std;
int factorial(int k) {
  if (k > 1) {
    return k * factorial(k - 1);
  } 
  else {
    return 1;
  }
}

int main() {
  int r = factorial(5);
cout<< "the factorial is :" <<r "\n."
  return 0;
}