

#include<iostream>
using namespace std;

class BaseClass{

public:
int a;
void setVal(void){
    // this->a = a;
    cout<<"Enter a Value :";
    cin>>a;
}


void getVal(void){
    cout<<"The value of a is : "<<a<<endl;
}

};





int main(){

    
    BaseClass* ptr = new BaseClass[3];
    BaseClass* temp = ptr;

    for(int i=0 ; i <3 ; i++ ){
        ptr->setVal();
        ptr++;
    }

    for(int i=0 ; i <3 ; i++ ){
        temp->getVal();
        temp++;
    }

    // base_obj1[0].setVal(10);

    // base_obj1[0].getVal();


    // base_obj->display();


return 0;
}
