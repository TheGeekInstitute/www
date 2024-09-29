#include<iostream>
using namespace std;


class Students{
    public:
    string name;
    int age;
};



int main(){

Students std1;
std1.name="Amit Singh";
std1.age=25;
cout<<std1.name<<std1.age<<"\n";

Students std2;
std2.name="Sumit Singh";
std2.age=22;
cout<<std2.name<<std2.age<<"\n";

    return 0;
}