#include<iostream>
using namespace std;


class Math{
    private:
       int num;

    public:
        Math(int inp){
            num=inp;
        }

    void table(){
        for(int i=1; i<=10 ; i++){
            cout<< num << " x " << i << " = " << num*i <<"\n";
        }
    }

};


int main(){

    Math m1(10);
    m1.table();

    return 0;
}