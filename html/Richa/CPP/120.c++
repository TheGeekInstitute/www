#include<iostream>
using namespace std;


class KuchhBhi{

};


int main(){
cout<<"a";
try{
    KuchhBhi();
}
catch(const char*){
    cout<<"ABCD";
}

cout<<"b";


    return 0;
}