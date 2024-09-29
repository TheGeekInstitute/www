#include<iostream>
using namespace std;

class Test{
    private:
        int age;
        string name;

    public:
    void setValue(int a, string n){
        age=a;
        name=n;
    }

    // Test(int a, string n){
    //     age=a;
    //     name=n;
    // }

//    void printValue(){
//         cout<<name<<age;
//     }


    ~Test(){
        cout<<name<<age;

    }

};



int main(){

    // Test t1(25,"Amit");
    Test t1;



    // t1.age=12;
    // t1.name="Amit";

    t1.setValue(25,"Amit");
    // t1.printValue();


    return 0;
}