#include<iostream>
using namespace std;
class Math{
    private:
        int  a,n;

    public:

    // Math(int num1, int num2){
    //     a=num1;
    //     b=num2;
    // }

    // int sum(){
    //     return a+b;
    // }

Math(int number){
    // a= num1;
    a=number;


};
int table(){
    for(int i=1;i<=10;i++){
        cout<< i <<"x"<< i<< "=" << a*i<<"\n"; 
    }
}

};
int main(){
    int a;
    cout<< "enter the value:";
    cin>>a;

Math m1(10);
m1.table();   
    
    
    // cout<<"the sum is:"<<m1.sum();
    return 0;
}