#include <iostream>
#include <string>
using namespace std;

class student {
private:
    string name;
    int marks;
    string course;
    int rollno;

public:

    student(string n, int m, string cour, int r){
    name=n; 
    marks=m;
    course=cour; 
    rollno=r;
      
    } 

    
    void display() {
        cout << "The information of the student:" << endl;
        cout << "Name of student: " << name << endl;
        cout << "Marks of student: " << marks << endl;
        cout << "Course of student: " << course << endl;
        cout << "Roll no of student: " << rollno << endl;
    }
};

int main() {
    string name, course;
    int marks, rollno;

    cout << "Enter the name: ";
    cin >> name;

    cout << "Enter the roll no: ";
    cin >> rollno;

    cout << "Enter the course: ";
    cin >> course;

    cout << "Enter the marks: ";
    cin >> marks;

   
    student s1(name, marks, course, rollno);

    s1.display();

    return 0;
}
