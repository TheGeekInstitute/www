#include<iostream>
using namespace std;

class person{
public:
string name;

person(string n){
    n=name;
}
virtual void display()111{

    cout<<"The name is :"<<name;
}
};

class student : public person(){
public:
int marks;

void display(){
    cout<<"the marks is:"<<marks;
}
};


int main(){
 string name;
 int marks;

 cout<<"enter the name:";
 cin>>name;

 cout<<"enter the marks:";
 cin>>marks;

person p1(name);
person* p2;

student s1;
student* s2;

// p1.display(); 
p1->display();

return 0;

}