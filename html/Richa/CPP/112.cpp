
#include <iostream>
#include <string>
#include <iomanip>

using namespace std;

class Employee {
public:
    string name;
    int year_of_joining;
    double salary;
    string address;

    
    Employee(string name, int year_of_joining, double salary, string address) {
        this->name = name;
        this->year_of_joining = year_of_joining;
        this->salary = salary;
        this->address = address;
    }
};

int main() {
    
    Employee employee1("Robert", 1994, 50000, "64C- WallsStreat");
    Employee employee2("Sam", 2000, 60000, "68D- WallsStreat");
    Employee employee3("John", 1999, 55000, "26B- WallsStreat");

    
    cout << setw(10) << "Name" << setw(20) << "Year of joining" << setw(20) << "Address" << endl;

    
    cout << setw(10) << employee1.name << setw(20) << employee1.year_of_joining << setw(20) << employee1.address << endl;
    cout << setw(10) << employee2.name << setw(20) << employee2.year_of_joining << setw(20) << employee2.address << endl;
    cout << setw(10) << employee3.name << setw(20) << employee3.year_of_joining << setw(20) << employee3.address << endl;

    return 0;
}
