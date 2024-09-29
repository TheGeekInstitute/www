#include<iostream>
using namespace std;

class Student{
    private:
    string name;
    int age;

    public:
    Student(string a,int b){
        name=a;
        age=b;
    }

    void print_data(){
        cout<<name<<age;
    }
};


int main(){

string inp1;
int inp2;

cout<<"Enter Name  :";
cin>>inp1;
cout<<"Enter age  :";
cin>>inp2;




Student s1(inp1,inp2);

s1.print_data();



    return 0;
}

#include<iostream>
using namespace std;
int main(){

int row=6;

for(int i=1;i<=row; i++){
    for(int j=1;j>=i;j++){
        cout<< "*";
    }
}


    return 0;
}