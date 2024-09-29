#include<iostream>
#include <string>

using namespace std;

class Person{
    string name;
    
 
    public:
    int name(){
        cout<< "enter the name:";
        cin>> name;
        cout<< "the name of the person is :" << name;
      return 0;
    }
};

  //   class student: public person{
     

  //    public:
      
        
  //     int info(int marks,int year, string course )
  //     {
  //       cout<<"enter the marks";
  //       cin>> marks;

  //       cout<<"enter the year";
  //       cin>> year;

  //       cout<<"enter the course";
  //       cin>> course;

  //      cout<<"the info of student is "<< marks <<" "<< year << " "<< course <<"\n";
  //  return 0;
  //     }
  //   };

      // class teacher: public person{
         
      //    public:

      //   double information(int idno,double salary year, string department )
      // {
      //   cout<<"enter the identity no";
      //   cin>> idno;

      //   cout<<"enter the salary";
      //   cin>> salary;

      //   cout<<"enter the department";
      //   cin>> department;

      //  cout<<"the info of student is "<< idno " "<< salary << " "<< department <<"\n";
      //  return 0;
      
      // }
      
// };

int main(){
    // Person p1;
    // student s1;
    // teacher t1;

    // p1.name();
    // s1.info();
    // t1.information();

    
return 0;


}