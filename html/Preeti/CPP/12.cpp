#include <iostream>
using namespace std;

// int sum(int a){
    
//     if (a>0){
       
//             return a + sum(a-1);   
     

//     }
//     else{
//         return 0;

//     }

// }


int eSum(int a){
    int s=0;
    for(int i=1 ; i<=a ; i++){
        if(i%2==0){
        s+=i;
        }
    }
    return s;
}





// int sum(int k){
//     if(k>0){
//         return k + sum(k-1);
//     }
//     else{
//         return 0;
//     }
// }


// int fact(int k){
//     if(k>0){
//         return k * fact(k-1);
//     }
//     else{
//         return 1;
//     }
// }



int main(){

//     cout<<fact(4)<<endl;
   cout<<eSum(10)<<endl;

    return 0;

}