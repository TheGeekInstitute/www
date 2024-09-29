#include <iostream>
#include<string>
using namespace std;

class BaseClass{
protected:
      int  data1=10,data2=12;

public:
    // BaseClass(int d1, int d2){
    //     data1=d1;
    //     data2=d2;
    // }

void print_data(){
    cout<<data1;
}


};


class DrivedClass: public BaseClass{
    public:
    void p_data(){
        cout<<data2;
    }

};





int main() {


DrivedClass d1;

d1.p_data();




  return 0;
}