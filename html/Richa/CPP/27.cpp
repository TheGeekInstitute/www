#include<iostream>
using namespace std;
int a;
int b;
int choice;
int output;

int add(int,int){
return a+b;
}

int sub(int,int){
    return a-b;
}

int mul(int,int){
    return a*b;
}

int divide(int,int){
    return a/b;
}

int main(){

cout<< " enter a number :";
cin>>a;
cout<< " enter a number :";
cin>>b;



 cout<< "\n 1.add\n2. sub\n3. mul\n4. div\n";
cout<< " enter your choice: ";
cin>> choice;



if(choice==1){
    cout<< " the sum of the numbers is :"<< add(a,b) << "\n";
  }
  else if(choice==2){
        cout<< " the differnce of the numbers is :"<< sub(a,b) << "\n";

}else if(choice==3){
     cout<< " the multiply of the numbers is :"<< mul(a,b) << "\n";
}else if(choice==4){
     cout<< " the division of the numbers is :"<< divide(a,b) << "\n";
}
else{
    " you do a invalid question";
}
    return 0;
}