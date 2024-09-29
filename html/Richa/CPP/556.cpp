#include<iostream>
using namespace std;

class shape{
private:
int a;
int b;

public:
  int setData(int x,int y){
    a=x;
    b=y;
  return 0;
  }
 void getData(){
     cout<< "The Area of the shape:"<< a*b<<endl;
 }

};
int main(){
shape s1;
shape *ptr=&s1;
  (*ptr).setData(3,6);
  (*ptr).getData();

return 0;
}