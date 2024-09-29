#include <iostream>
using namespace std;

int main(){

    int choice, result,l,b,

    cout<<"Enter length of Rectangle: "<<endl;
    cin>>l;
    cout<<"Enter breadth of Rectangle: "<<endl;
    cin>>b;
    



    cout<<"1. Area \n2. Perimeter"<<endl;
    cin>>choice;




    switch(choice){
        case 1 : cout<<"The Area of Rectangle is : " << l*b <<endl;;
        break;
        case 2 : cout<<"The Parimeter of Rectangle is : " << 2*(l+b) <<endl;
        break;
        default: cout<<"Invalid Choice"<<endl;
    }





    return 0;




}