#include<iostream>
using namespace std;
int main(){

    int n;
    double sum=0;

    cout<< "enter the number:";
    cin>>n;

    for(int i=0;i<=n; i++){
        sum=1.0/i;
    }
    cout << "The sum of the series 1 + 1/2 + 1/3 + ... + 1/: "<< sum <<"\n";
     
     return 0;
}
