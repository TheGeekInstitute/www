
#include<iostream>
#include <cmath>
using namespace std;
int main(){
float n,sum=0;

cout<< " Enter the number: ";
cin>> n;

for(float i=1;i<=n;i++){
    sum+=(1/pow(i,i));
    // cout<<pow((1/i),2)<<"\n";
}

cout<<sum;








    return 0;
}