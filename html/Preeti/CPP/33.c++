// // #include <iostream>
// // #include <string>
// // using namespace std;

// // class MyClass {       
// //   public:             
// //     int myNum;       
// //     string myString;  
// // };

// // int main() {
// //   MyClass myObj;  

  
// //   myObj.myNum = 15;
// //   myObj.myString = "Roll no";

  
// //   cout << myObj.myNum << "\n"; 
// //   cout << myObj.myString; 
// //   return 0;
// // }



// #include <iostream>
// #include <string>
// using namespace std;

// class MyClass {
//     public:
//     string myString;
//     int myNum;

// };

// int main(){
//     MyClass myObj;

//     myObj.myString="Preeti";
//     myObj.myNum = 21;

//     cout<<myObj.myString<<endl;
//     cout<<myObj.myNum<<endl;


//     return 0;

// }


#include <iostream>
using namespace std;

class Employee {
  protected: 
    int salary;
};


class Programmer: public Employee {
  public:
    int bonus;
    void setSalary(int s) {
      salary = s;
    }
    int getSalary() {
      return salary;
    }
};

int main() {
  Programmer myObj;
  myObj.setSalary(50000);
  myObj.bonus = 15000;
  cout << "Salary: " << myObj.getSalary() << "\n";
  cout << "Bonus: " << myObj.bonus << "\n";
  return 0;
}


class student{
    protected:
    int marks;
};


class