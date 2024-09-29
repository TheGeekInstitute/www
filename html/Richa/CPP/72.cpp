#include<iostream>
using namespace std;

class rectangle{
    private: 
    int length,width;

    public:
rectangle(int l, int w)
{
    length=l;
    width=w;
}


int area(){
 cout<< "the area of the rectangle is :"<< length*width;
 return 0;
}






};

int main(){

    int l,w;

    cout<< "enter the length";
    cin>>l;
    cout<< "enter the width";
    cin>>w;

   
    rectangle r1(l,w);
    r1.area();




    return 0;
}