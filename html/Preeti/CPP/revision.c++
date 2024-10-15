#include<iostream>
using namespace std ;
int main(){

//    for(int i=0; i<=100; i++){
//       cout<<i<<endl;

//     }
    // for(int i=0; i<=50; i++){
    //     if(i%2!=0){
    //         cout<<i<<endl;
    //     }

    // }

    int arr[]={1,2, 3, 4, 5};
    int n=5;
    int sum=0;
    for(int i=0; i<n; i++){
        sum+=arr[i];
    }
        cout<<sum<<endl;

    return 0;
}
