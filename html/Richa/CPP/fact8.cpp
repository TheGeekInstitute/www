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

cout<<fact;
cout<<"\n\n";
    return 0;
}