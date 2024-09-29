// // #include<iostream>
// using namespace std;
// int main(){
// int a;
// int b;
// cout<< " enter the first number:" <<a;
// cin>>a;
// cout<< " enter the first number:" <<b;
// cin>>b;

// if(a>b){
// cout<< a << " is a maximum number\n";
// }
// else{ 
//     cout<< b << " is the maximum number \n";

// }
//     return 0;
// }

// #include<iostream>
// using namespace std;
// int main(){
// int n;
// int sum=0;
// cout<< "enter a number:";
// cin>>n;
 
//  for(int i=1; i<=n; i++){
//     sum+=i;
    

//  }
// cout<< "the sum of the number is :"<< sum<< "\n";


//     return 0;
// }

#include<iostream>
using namespace std;
int main(){
    int n;
    int fact=1;
cout<< " enter a number:";
cin>>n;

for(int i=n ; i<=n ; i--){
    if(i==0){
        break;
    }
    
    fact*=i;
}


cout<< "the factorial of the number is: "<< fact <<"\n";

    return 0;
}