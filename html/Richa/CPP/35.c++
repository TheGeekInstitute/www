#include<iostream>
using namespace std;


class Students{
    public:
    string name;
    int age;

    Students(string n , int a){
        // cout<<"Hello Students\n";
        name=n;
        age=a;
     }


~Students(){
    cout<<"Bye Bye !"<<"\n";
}


    void print_data(string x){
        cout<<"Output : "<<x<<"\n";
    }

        void print_data(int x){
        cout<<"Output : "<<x<<"\n";
    }


   
};






int main(){

Students std1("Amit",12);

// std1.print_data();

std1.print_data(std1.name);
std1.print_data(std1.age);

// cout<<std1.name;











    return 0;
}