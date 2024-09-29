#include <iostream>

using namespace std;

class BaseClass{
    private:
        int age=12;
        string name="Ram";
    
    public:
        // BaseClass(int age, string name){
     
        //      this->age=age;
        //     this->name=name;
        // }

    //   void  setVal(int a, string n){
    //         age =a;
    //         name=n;
    //     }

       void getVal(){
            cout<<name<<age<<endl;
        }

};


class DrivedClass: public BaseClass{

};

int  main(){

    // BaseClass b1(45,"asdas");

    // b1.setVal(12,"ABCD");

    DrivedClass d1;
    d1.getVal();

    return 0;
}