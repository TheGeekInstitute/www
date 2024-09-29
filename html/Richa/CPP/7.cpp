/*#include<iostream>
using namespace std;
int main(){
int a;
cout<<"enter a character:";
cin>>a;

if(a>=65 || a<=97){
    cout<<a<< "is a capital character";
}
 else if(97<=a || a<=122){
    cout<<a<<" is a small character";
 }
 else if(32<=a || a<=47 || 58<=a || a<=64 || 123<=a || a<=126){
    cout<<a<< " is a special character";

 }
 else{
    cout<<a<< " is invalid character";
 }


    return 0;
}*/
#include<iostream>
using namespace std;
int main(){
char c;
for(c=65;c<=90;c++){
    cout<<c<<"\n";
}



    return 0;
}