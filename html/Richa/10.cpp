#include<iostream>
using namespace std;
int main(){

int row= 6;

// for(int i=1;i<=5;i++){

//     for(int j=1; j<=row; j++;){
//         cout<<  "* ";
//     }
//     cout<<"\n";
// }


for(int i=1 ; i<=row ; i++){
    for(int j=1 ; j<=i ; j++ ){
        cout<<j << " " ;
    }

    cout<<"\n";
}





    return 0;
}