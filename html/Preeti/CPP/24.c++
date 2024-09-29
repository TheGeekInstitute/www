// #include<iostream>
// using namespace std;
// class abcd{
// public:
// string name;
// int marks;


// abcd(string n ,int m){
//     // cout<<"autorun"<<endl;
//     name=n;
//     marks=m;

// }

// void print_data(){
//     cout<<"Hello "<<name<<" marks : "<<marks<<endl;


// }


// };





// int main(){

// abcd a1("Raj",50);
// a1.print_data();


//     return 0;

// }

#include <iostream>
using namespace std;

class baseClass{
private:
void private_p(){
    cout<<"Hello private"<<endl;   
}
protected:
void protected_p(){
    cout<<"Hello protected"<<endl;
}
public:
void public_p(){
    cout<<"Hello public"<<endl;

}
};
class drivedClass: public baseclass{
public:
void drived_p(){
    cout<<"Hello Drived class"<<endl;

}

}




int main(){
drivedClass.d1;

d1.abcd();

    return 0;

}