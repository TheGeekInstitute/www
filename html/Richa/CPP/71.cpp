#include<iostream>
using namespace std;

class rectangle{
    
    int length,width;

    public:
 int rectangle(int l,int w)
{
    length=l;
    width=w;

    return l*w;
}


};

int main(){

    int l,w;

    cout<< "enter the length";
    cin>>l;
    cout<< "enter the width";
    cin>>w;

   
    rectangle rectangle(l,w);
 cout<< "the area of the rectangle is :"<< l*w;




    return 0;
}