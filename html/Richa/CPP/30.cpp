#include<iostream>
using namespace std;

   
int abcd(int a, int b , int c){
    return a+b+c;
}


int abcd(int a, int b){
    return a+b;
}




// int abcd(int a, int b){
//     return a+b;

// }



// double abcd(double a ,double b ){
//         return a+b;
// }

int main(){
// double a,b;
// cout<< "enter a number:";
// cin>>a;
// cout<< "enter a number:";
// cin>>b;
// double num2 = abcd(a,b);
// int num1= abcd(a,b);

// cout<< " the sum of int function is : "<< num1 <<"\n";
// cout<< " the sum of double function is : "<< num2 <<"\n";


cout<<abcd(45,85,100);



    return 0;
}