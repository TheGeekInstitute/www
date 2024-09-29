#include<iostream>
#include<string>
using namespace std;

class Person {
protected:
    string name;

public:
    Person(string n) : name(n) {}

    virtual void display() {
        cout << "The name is: " << name << endl;
    }
};

class Student : public Person {
private:
    string course;
    int marks;
    int year;

public:
    Student(string n, string c, int m, int y) : Person(n), course(c), marks(m), year(y) {}

    void display() override {
        Person::display();
        cout << "The Course is: " << course << endl;
        cout << "The Marks is : " << marks << endl;
        cout << "The Year is: " << year << endl;
    }
};

class Employee : public Person {
private:
    string department;
    double salary;

public:
    Employee(string n, string d, double s) : Person(n), department(d), salary(s) {}

    void display() override {
        Person::display();
        cout << "The Department is: " << department << endl;
        cout << " The Salary is: " << salary << endl;
    }
};


void details(Person* p) {
    p->display();
}

int main() {

string name,name1,course,department;
int marks,year;
double salary;


cout<<"Enter the details of student:\n";

cout<<"Enter the name:";
cin>>name;

cout<<"Enter the course:";
cin>>course;

cout<<"Enter the marks:";
cin>>marks;

cout<<"Enter the year:";
cin>>year;

cout<<"\n";

cout<<"Enter the details of student:\n";

cout<<"Enter the name1:";
cin>>name1;

cout<<"Enter the department:";
cin>>department;

cout<<"Enter the salary:";
cin>>salary;

    Student student(name,course,marks,year);
    Employee employee(name1,department,salary);

cout<<"The details of student:\n";
    details(&student);

cout<<"\n\n";

cout<<"The details of employee:\n";

    details(&employee);

    return 0;
}
