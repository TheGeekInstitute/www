#include<iostream>
using namespace std;
int main(){
int m,n;
cout<< "enter the 1st number:";
cin>>m;
cout<< "enter the 2nd number:";
cin>>n;


cout<<" 1. +\n 2. -\n 3. *\n 4. /\n";


int choice;
cout<< "enter the choice:";
cin>>choice;

switch(choice){
    case 1: cout<<m<<" + "<<n<<" = "<<m+n;
    break;
    case 2: cout<<m<<" - "<<n<<" = "<<m-n;
    break;
    case 3: cout<<m<<" * "<<n<<" = "<<m*n;
    break;
    case 4: cout<<m<<" / "<<n<<" = "<<m/n;
    break;
    default:cout<<"Invalid Choice";
}



    return 0;
}