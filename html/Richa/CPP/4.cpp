# include<iostream>
using namespace std;
int main(){
    int a;
    int b;
    int c;

cout<<"Enter 1st Number :";
cin>>a;
cout<<"Enter 2nd Number :";
cin>>b;
cout<<"Enter 3rd Number :";
cin>>c;


if(a>b && a>c){
  cout<< a << " is Grater than "<<b << " and " << c;
}else if(b>a && b>c){
  cout<< b << " is Grater than "<<a << " and " << c;
}
else if(c>a && c>b){
  cout << c << " is Grater than "<<a << " and " << b;
}
else{
  cout<<"All Numbers are Equal";
}
    return 0;
}