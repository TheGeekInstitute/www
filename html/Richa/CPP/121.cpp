#include<iostream>
using namespace std;
void swap(int *a,int *b){
 int temp=*a;
    *a=*b;
    *b=temp;
    
}
int main(){

int a=4;
int b=5;
cout<<"The value of a is "<< a <<" and b is "<< b <<endl;

swap(&a,&b);
cout<<"The value of a is "<< a <<" and b is "<< b <<endl; 

    return 0;
}                                          