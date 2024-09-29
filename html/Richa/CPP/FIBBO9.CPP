#include<iostream>
using namespace std;
int main(){
 
 int n;

 cout<<"Enter the term:";
 cin>>n;

 cout<<"The Fibonacci series:";


 int a=0,b=1,next;

 for(int i=0;i<n; i++){
    if (i <= 1)
            next = i;
        else {
            next = a + b;
            a = b;
            b = next;
        }
         std::cout << next << " ";
 }

    return 0;
}
