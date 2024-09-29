#include<iostream>
using namespace std;


class Students{
    public:
    string name;
    int age;
    //  void print_data(){
    //     cout<<"Hello Students\n";
    //  }

     void print_data();
};


void Students::print_data(){
    cout<<"Hello Students\n";
}



int main(){

Students std1;

std1.print_data();









    return 0;
}