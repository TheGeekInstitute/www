#include <iostream>
#include <string>
using namespace std;
int main() {
// int a=0,b=1,next;
// int n;
// cout<<"Enter Number :";
// cin>>n;
// for(int i=0 ;i <= n ;i++){
//     if(i<=1){
//         next = i;
//     }
//     else{
//         next = a+b;
//         a=b;
//         b=next;
//     }
//     cout<<next<<" ";
// }
   int a=0, b=1,next;
   int n;
   cout<<"Enter Number: ";
   cin>>n;
 for(int i=0; i<=n; i++){
    if(i<=1){
        next =i;

    }
    else{
        next=a+b;
        a=b;
        b=next;
    }
    cout<<next<<" ";
   }





  return 0;
}