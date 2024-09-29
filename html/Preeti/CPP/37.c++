#include <iostream>
#include <string>

using namespace std;

int main() {

int a=10;
int b=12;

cout<<"Before Swaping A is : "<<a <<" and B is :"<<b<<endl;

int temp;

temp = a;
a=b;
b=temp;

cout<<"after Swaping A is : "<<a <<" and B is :"<<b<<endl;


  return 0;
}