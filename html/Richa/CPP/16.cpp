#include<iostream>
using namespace std;
int main(){
int num=100;
 int sum=0;
for(int i=1 ; i<=num ; i++){
    if(i%2!=0){
        cout<<i<<"\n";
        sum*=i;
    }
}
cout<<"The Sum of All Above :" <<sum <<"\n";
   
return 0;

}