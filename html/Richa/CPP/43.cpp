#include<iostream>
using namespace std;
class student{
 public:
 string a,b;
  void name(){
    cout<< " hello";
 }
 


};

class teacher : public student{
    public:
    void name(){
        cout<< " hi person";
    }

};

int main(){
student s1;
teacher t1;

s1.name();
t1.name();



    return 0;
}