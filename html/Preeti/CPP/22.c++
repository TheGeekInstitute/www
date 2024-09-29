#include<iostream>
using namespace std;

class abcd{
private:
int roll;
string name;


public:

    abcd(int r, string n){
        cout<<"autorun"<<endl;
        roll=r;
        name=n;
    }

//    abcd(int roll, string name){
//         // cout<<"autorun"<<endl;
//         this->roll=roll;
//         this->name=name;
//     }




void print_data(){
    cout<<"Hello, "<<name<<" roll No : "<<roll<<endl;
}


};



int main(){

abcd a1(12,"ABCD");

// a1.roll=12;
// a1.name="Amit";

a1.print_data();

// cout<<a1.name;


    return 0;
}