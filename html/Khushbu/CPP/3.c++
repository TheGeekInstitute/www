#include <iostream>
#include<string>
using namespace std;

class Student{
    private:
    int roll;
    string name;

    // Student(int r, string n){
    //     roll = r;
    //     name = n;
    // }
    void print_data(){
        cout<<"Hello, "<<name<<" roll no : "<<roll<<"\n";
    }

    
public:
 void setVal(int r, string n){
    roll =r;
    name=n;
 }

 void p_data(){
    print_data();
 }




};



int main() {

// Student s1(1,"ABCD");
Student s1;

// s1.roll=3;
// s1.name="ABCD";

s1.setVal(1,"dasd");

s1.p_data();




  return 0;
}