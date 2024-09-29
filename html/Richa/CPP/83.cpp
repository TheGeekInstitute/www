#include<iostream>
#include <cmath>
using namespace std;
int main(){

    int n,product=1;

    cout<< "enter the number:";
    cin>>n;

    // for(int i=0; i<=n; i++){
    //   product=product*i;
    // }

     n = abs(n);
 for (; n != 0; n /= 10) {
        int digit = n % 10; // Extracting the rightmost digit
        product *= digit;
 }
    cout<<" The product of the n natural number:"<< product << "\n";

    return 0;
}