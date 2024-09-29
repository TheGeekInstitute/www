#include<iostream>
using namespace std;


int main(){
   try{
    int a=10;
    if(a>=100){
        cout<<"Not an Error";
    }
    else{
        throw "aklsdjklasjdkljaskl";
    }

   }
   catch(const char* ab){
    cout<<"This is an Error"<< ab<<endl;
   } 


    return 0;
}