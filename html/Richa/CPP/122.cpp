#include<iostream>
using namespace std;

class math{
    private:
    int x,y;
    public:

    math(int a,int b){
        x=a;
        y=b;
    }

int sum(){
    int c=x+y;
    return c;
}
};

int main(){
    int x;
    int y;
cout<<"Enter the valuse of a and b:"<<endl;
cin>>x>>y;

math m1(x,y);

cout<<m1.sum();

    return 0;
}