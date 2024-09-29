#include<iostream>
#include<cmath>
using namespace std;

class Math{
private:
int i,j,k,a,b;

public:

// int addition(int a,int b)
// {
//     return a+b;                                                                       
// }
 
//  int square(int k)
//  {
//      for(int i=0;i<k;i++)
//      {
//         cout<< i*i;
//      }

//         return 0;
     
//  }

// int oddeven( int k)
// {
    
//         for(int i=0;i<k;i++){
//             if(i%2==0)
//             {
//                 cout<< i << "is even number"<<endl;
//             }
//             else if(i%2!=0)
//             {
//              cout<< i<< " is odd number" << endl; 
//               } 
//               else{ 
//                 cout<< "invalid ";
//               }
//         } 
// } 
              
// int serial(int j)
// {
//   for(int i=0; i<j; i++)
//   { 
//     cout<< i;
//   }
// }                 
    
int squareroot(int j)
{
  
     cout<< pow(j,0.5);
    
    return 0;
}


};

int main(){

Math m1;

// cout<< m1.addition(4,7)<<endl;
// cout<< m1.square(8)<<endl;
// cout<< m1.oddeven(9)<<endl;
// cout<<m1.serial(10)<<endl;
m1.squareroot(25);

    return 0;
}