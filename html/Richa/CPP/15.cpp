#include<iostream>
using namespace std;

int table(int a){
    int sum=0;
    for(int i=1 ; i<=10 ;i++){
        cout<< a << " x " << i << " = " << a*i <<"\n"; 
        sum+=a*i;
    }

    cout<<"Sum of Table is : "<<sum;

    return 0;
}


int main(){
// table(10);

int num=10;

for(int j=1 ; j<= num ; j++){
    table(j);
    cout<<"\n\n";
}

    return 0;

 }



