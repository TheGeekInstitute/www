#include <iostream>
using namespace std;

int main(){

int side=4;

int vol=1;

// cout<<"Volume of Cube " <<(side * side * side);

for(int i=1; i<=3 ; i++){
    vol *=side;
}

cout<<"Volume of Cube : "<< vol<<endl;





    return 0;




}