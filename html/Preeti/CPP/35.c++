// #include <iostream>

// using namespace std;

// class BaseClass{
//  public:
// //    virtual void display(){
// //         cout<<"Base Display"<<endl;
// //     }

//     virtual void display() = 0;


// };


// class DrivedClass: public BaseClass{
//  public:
//      void display(){
//         cout<<"Drived Display"<<endl;
//     }
// };

// int  main(){
//     // BaseClass b;
//     // b.display();

//     BaseClass* b;
//     DrivedClass d;
//     b = &d;
//     b->display();


//     return 0;
// }




#include <iostream>
using namespace std;


class baseclass{
    public:
    virtual void display(){
        cout<<"Base display"<<endl;
    }
    // virtual void display()=0;
};


class Derivedclass : public baseclass{
    public:
    void display(){
        cout<<"derived display"<<endl;

    }

};

int main(){


    baseclass b;
    b.display();

    Derivedclass d;
    d.display();



    return 0;

}

