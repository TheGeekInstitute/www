

#include<iostream>
using namespace std;

class BaseClass{

public:
 virtual void display(){
        cout<<"base Class Display Function"<<endl;
    }
};

class DrivedClass : public BaseClass{
public:
  void display(){
        cout<<"Drived Class Display Function"<<endl;
    }
};




int main(){

    BaseClass* base_obj;
    BaseClass base_obj1;

    // obj4.display(); 
    // base_obj->display();

    DrivedClass* drived_obj;


    DrivedClass drived_obj1;

    base_obj = &drived_obj1;

    base_obj->display();


return 0;
}
