#include<iostream>
using namespace std;


int main(){

int num;
cout<<"enter the number:";
cin>>num;

int fact=1;
for(num ; num>=1 ; num--){
    fact*=num;
}

cout<<"The factorial of a number :"fact;

    return 0;
}
