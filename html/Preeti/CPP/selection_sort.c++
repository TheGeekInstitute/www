// #include<iostream>

// using namespace std;


// int main(){



// int arr[5]={4,1,3,5,8};
// int n=5;

// for(int i=0; i< n ; i++){
//     for(int j=i+1 ; j<n ; j++){
//         if(arr[i]>arr[j]){
//             int temp=arr[j];
//             arr[j]=arr[i];
//             arr[i]=temp;
//         }
//     }
// }


// for(int i=0; i< n ; i++){
//     cout<<arr[i]<<" ";
// }







// //On





//     return 0;
// }



#include <iostream>
using namespace std;

int main(){

    int arr[6] = {12,13,58,89,56,90};
    int n=6;

    for(int i=0; i<n; i++){
        for(int j=i+1; j<n ; j++){
            if(arr[i]>arr[j]){
                int temp=arr[j];
                arr[j]=arr[i];
                arr[i]=temp;
            }
            

        }
    }

    for(int i=0; i<n; i++){
        cout<<arr[i]<<" ";
    }



    return 0;
}