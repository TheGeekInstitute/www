#include <iostream>
using namespace std;

struct{
    int roll;
    int empno;
    string name;
} student,emp;



int main(){


   student.roll=10;
   emp.name="Amit";
   student.name="Sumit";
   cout<<student.name<<endl;


    return 0;

}