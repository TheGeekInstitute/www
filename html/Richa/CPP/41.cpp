#include<iostream>
using namespace std;
class student{
    public:
    int b,c;
    string a;
student(string name,int roll_no,int mobile_no){
            a=name;
            b=roll_no;
            c= mobile_no;
}
};

int main(){
string a;
int b,c;
cout<< " enter the info of student:";
cin>> a >> b >> c;
student s1(a,b,c);

cout<< "The info of the student is " << s1.a << " " << s1.b <<  " "<< s1.c;


    return 0;
}