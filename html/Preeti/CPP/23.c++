#include<iostream>
using namespace std;

class baseClass{
private:
    void private_p(){
        cout<<"Hello Private";
    }
protected:
    void protected_p(){
        cout<<"Hello Protected";
    }
public:
        void public_p(){
        cout<<"Hello Public";
    }

   




};


class drivedClass: public baseClass{


public:
void drived_p(){
    cout<<"Hello Drived class";
}


void abcd(){
    protected_p();
}


};



int main(){

// baseClass b1;
drivedClass d1;

// b1.public_p();
// b1.private_p();
// b1.protected_p();

// d1.drived_p();
// d1.public_p();
d1.abcd();




    return 0;
}