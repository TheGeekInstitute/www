#include <iostream>
using namespace std;

int main(){
    
 int a,b,c;
int sum=0
    cout << "Enter the numbers:";
    cin >>a >> b >>c;


    if(a>=b && a>=c)
        cout << "maximum number is:" <<a;

  
    else if(b>=a && b>=c)
        cout << "maximum number is:"<<b;

    else 
        cout <<"maximum number is :"<<c;
  
    return 0;
}