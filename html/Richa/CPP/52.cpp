#include<iostream>
using namespace std;
int main(){

try{
    int age=10;
    if(age>=18){
        cout<<"Access granted - you can Vote.";
    }
    else{
        throw(age);
    }
}

catch(...){
   cout<<"You can not Vote";
}






    return 0;
}