#include<iostream>
using namespace std;

class Person{
    public:
    string name;

   void display(){
        cout<<name;
    }
};



class Student: public Person{
    public:
    string course;
    int marks;
    int year;

    Student(string n, string c, int m, int y){
        name=n;
        course=c;
        marks=m;
        year=y;
    }

   void display(){
        cout<<"Name : "<<name<<"\n";
        cout<<"Course : "<<course<<"\n";
        cout<<"Marks : "<<marks<<"\n";
        cout<<"Year : "<<year<<"\n";
    }
};


class Employee : public Person{
    public:
    string department;

    int salary;

    Employee(string n, string dept, int s){
        name=n;
        department=dept;
        salary=s;
    }

   void display(){
        cout<<"Name : "<<name<<"\n";
        cout<<"Department : "<<department<<"\n";
        cout<<"Salary : "<<salary<<"\n";
    }
};

int main(){

    Person p1;
    p1.name="Amit";
    p1.display();

    Student s1("Ravi","DCA",100,2024);
    s1.display();

    Employee e1("Ravita","Sales",4500);
    e1.display();

    return 0;
}
