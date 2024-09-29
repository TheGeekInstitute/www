#include<iostream>
using namespace std;

class TwoDim{

    int x, y;
    public:

    TwoDim(int x=5, int y=5){
        this->x=x;
        this->y=y;
    }

    void print(){
        cout<<"("<<this->x<<","<<this->y<<")"<<endl;
    }
};

int main(){

    TwoDim td(2,7);

    td.print();


    return 0;
}