#include <iostream>
#include <string>
using namespace std;
 int main(){

    int x = 15;
    int y = 13;
    int z = 20;

    if(x>y && x>z){
        cout<<x<<"is greater then "<<y<<"and "<<z<<endl;
    }
    else if(y>x && y>z){
        cout<<y<<"is greater then "<<x<< "and " <<z<<endl;
    }
    else if(z>y && z>x){
        cout<<z<<"is greater then "<<y<< "and" <<x<< endl;
    }
    else{
        cout<<"x,y,z are equal"<<endl;
    }
 }
