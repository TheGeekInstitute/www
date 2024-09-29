#include<iostream>
using namespace std;
int main(){
    
    int n;
    int M[n];


cout<<"enter the size of matrix:";
cin>>n;

 for(int i=0; i<n; i++){
    cin>>M[i];
 }

 for(int i=0; i<n; i++){
    cout<<M[i] << " ";
 }

    return 0;
}