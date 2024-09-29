#include <iostream>
#include <string>
using namespace std;
 int main(){
 int x;
 int y;
 int z;
 cout<<"type a number x;";
 cin>>x;
 cout<<"type a number y;";
 cin>>y;
 cout<<"type a number z;";
 cin>>z;
    
    cout<<"checking your number x,y,z"<<"\n";

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