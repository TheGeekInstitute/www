#include <iostream>
#include <string>

using namespace std;

// Base class Person
class Person {
protected:
    string name;
public:
    Person(const string& n) : name(n) {}
    virtual void display() const {
        cout << "Name: " << name << endl;
    }
};

// Derived class Student
class Student : public Person {
private:
    string course;
    float marks;
    int year;
public:
    Student(const string& n, const string& c, float m, int y)
        : Person(n), course(c), marks(m), year(y) {}

    virtual void display() const override {
        Person::display();
        cout << "Course: " << course << endl;
        cout << "Marks: " << marks << endl;
        cout << "Year: " << year << endl;
    }
};

// Derived class Employee
class Employee : public Person {
private:
    string department;
    float salary;
public:
    Employee(const string& n, const string& d, float s)
        : Person(n), department(d), salary(s) {}

    virtual void display() const override {
        Person::display();
        cout << "Department: " << department << endl;
        cout << "Salary: " << salary << endl;
    }
};

int main() {
    Person* p1 = new Person("John Doe");
    Person* p2 = new Student("Alice Smith", "Computer Science", 90.5, 2023);
    Person* p3 = new Employee("Bob Johnson", "Human Resources", 50000);

    p1->display();
    cout << endl;
    p2->display();
    cout << endl;
    p3->display();

    delete p1;
    delete p2;
    delete p3;

    return 0;
}