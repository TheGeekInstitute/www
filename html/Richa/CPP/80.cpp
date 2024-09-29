#include<iostream>
using namespace std;
int main(){

    int n,sum=0;

    cout<< "enter the number:";
    cin>>n;

    for(int i=0; i<=n; i++){
      sum = sum+i;
    }

    cout<<" The sum of the n natural number:"<< sum << "\n";

    return 0;
}