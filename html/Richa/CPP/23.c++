#include<iostream>
using namespace std;


struct info {
        string name;
        int age;
    };

int main(){

      info data;

    // struct {
    //     string name;
    //     int age;
    // }data,data1;
    data.name="Amit";
    data.age=45;

    info data1;

 data1.name="Amita";
    data1.age=450;


    // data1.name="Sumit";
    // data1.age=40;

    cout<<data.name<<data.age;
    cout<<data1.name<<data1.age;


    return 0;
}