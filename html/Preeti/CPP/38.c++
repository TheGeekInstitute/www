#include <iostream>
using namespace std;
class student{
        private:
        int rollno;
        string name;

        public:
        void setVal(int rollno, string name){
            this->rollno=rollno;
            this->name=name;
        }        

       void getVal(){
        cout<<"Roll No : "<<rollno << " Name : "<<name<<endl;
       }
    
    };
int main(){
    int roll;
    string name;

    // student s1 , s2;
    // s1.setVal(1,"Amit");
    // s1.getVal();   

    // s2.setVal(2,"Sumit"); 
    // s2.getVal();   

    student s[5];
    // s[0].setVal(1,"Amit");
    // s[0].getVal();

    for(int i=0 ; i<5 ; i++){
        cout<<"Enter Roll no : ";
        cin>>roll;
        cout<<"Enter Name : ";
        cin>>name;
        s[i].setVal(roll,name);
    }


    for(int j=0 ; j<5 ; j++){
            
        s[j].getVal();
    }


 
    return 0;
}