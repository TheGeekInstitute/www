#include<iostream>
using namespace std;
class maths{
public:
int a,b;

 int add(){
 return a+b;
 }

 int sub(){
    return a-b;
 }

 int mul(){
    return a*b;

 }

 int div(){
    return a/b;
 }

};
int main(){
     
     maths mt;
   mt.a=10;
   mt.b=2;

     cout<< "the addition of the numbers: "<< mt.add()<<"\n";
     cout<< "the subtraction of the numbers: "<< mt.sub()<<"\n";
     cout<< "the multiplication  of the numbers: "<<mt.mul()<<"\n";
     cout<< "the division of the numbers: "<< mt.div()<<"\n";

    return 0;
}