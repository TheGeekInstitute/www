#include<iostream>
using namespace std;
int table(int a){
    for(int i=1;i<=10;i++){
      cout<< a << " x " << i << "=" << a*i<< "\n";
    }

    return 0;
}
int main(){
    // cout<<table(1) << "\n\n";
    // cout<<table(2) << "\n\n";
    // cout<<table(3) << "\n\n";
    // cout<<table(4) << "\n\n";
    // cout<<table(5) << "\n\n";
    // cout<<table(6) << "\n\n";
    // cout<<table(7) << "\n\n";
    // cout<<table(8) << "\n\n";
    // cout<<table(9) << "\n\n";
    // cout<<table(10) <<"\n\n";
    
    for(int i=1 ; i<=10 ; i++){
    cout<<table(i) << "\n\n";
      
    }
    
    return 0;
}





// int main(){
// // int a,b,c,d;

// // cout<< "enter the first number:";
// // cin>>a;

// // cout<< "enter the second number:";
// // cin>>b;

// // cout<< "enter the third number:";
// // cin>>c;

// // cout<< "enter the fourth number:";
// // cin>>d;


// // if(a>b && a>c && a>d)
// //   {
// //     cout<< a << " is the greatest number\n";
// //   } else if(b>a && b>c && b>d )
// //   {
// //     cout<< b << " is the greatest number\n";
// //   }else if(c>a && c>b && c>d)
// //   {
// //     cout<< c << " is the greatest number\n";
// //   }else if(d>a && d>b && d>c)
// //   {
// //     cout<< d << " is the greatest number\n";
// //   }

// //   else{
// //     cout<<"Number is invalid";
// //   }
 

//     return 0;
// }