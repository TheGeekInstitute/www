#include<iostream>
using namespace std;
int main(){
 int a,b,c,hcf=1;

 cout<< " enter the numbers: ";
 cin>>a>>b>>c;


 if(a>b){
    int temp=b;
    int tem=c;
    b=a;
    c=a;
    a=temp;
    a=tem;
 }

for(int i=1;i<=c;i++){
    if(a%i==0 && b%i==0 && c%i==0){
        hcf=i;
    }
}


cout<< "The hcf of the number is:" << hcf;


    return 0;
}