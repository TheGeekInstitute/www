#include <iostream>
using namespace std;

class Abcd{
  public:
  int pow(int num, int p){
    int result=1;
    for(int i=1 ; i<=p ; i++){
      result *=num;
    }
    return result;
  }
};



int main() {

    // int a=10;

    // // int &b =a;

    // // cout<<&b;

    // int* ptr = &a;
    // *ptr=12;
    // cout<<(*ptr);

    Abcd a1;
    // Abcd* ptr = &a1;
    Abcd* ptr = new Abcd;
    // cout<<ptr;

    // cout<<(*ptr).pow(10,2);
    cout<<ptr->pow(10,2);





} 