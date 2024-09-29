#include<iostream>
using namespace std;
int main(){

    int n;

    cout<<"Enter the number from the counting start:";
    cin>> n;


    cout<<"The Reverse counting from:"<< n <<endl;
    for(int i=n; i>=0; --i){
        cout<< i <<" ";
    }
cout<<"\n";



return 0;
}