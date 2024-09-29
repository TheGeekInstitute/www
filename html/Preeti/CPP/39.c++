#include <iostream>
#include <string>

using namespace std;

int main() {

struct{
    int roll;
    string name;
} s1,s2,s3;

s1.roll=10;
s1.name="Amit";


cout<<"Roll No :"<<s1.roll <<" Name "<<s1.name;


  return 0;
}