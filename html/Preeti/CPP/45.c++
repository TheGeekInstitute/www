// // // // #include <iostream>
// // // // using namespace std;
// // // // int main(){

// // // // //insertion sort

// // // //     int arr[5]= {23,55,78,21,14};
// // // //     int n=5;

// // // //     for(int i=1; i<n; i++){
// // // //         int current = arr[i];
// // // //         int j = i-1;


// // // //         while(arr[j]>current  && j>=0){
// // // //             arr[j+1] = arr[j];
// // // //             j--;

// // // //         }
// // // //         arr[j+1] = current;
// // // //     }

// // // //     for( int i=0; i<n; i++){
// // // //         cout<<arr[i]<<" ";
// // // //     }

    





// // // //     return 0;

// // // // }

// // // // // selection sort

// // // #include <iostream>
// // // using namespace std;

// // // int main(){


// // //    int arr[6]={12,47,92,34,23,31};
// // //    int n= 6;

// // //    for(int i=0; i<n; i++){
// // //     for(int j=i+1; j<n; j++){
// // //         if(arr[i]> arr[j]){
// // //             int temp=arr[j];
// // //             arr[j]= arr[i];
// // //             arr[i]= temp;
// // //         }

// // //     }
// // //    }
// // //  for(int i=0; i<n; i++){
// // //     cout<<arr[i]<<" ";
// // //  }

// // //     return 0;
// // // }


// // // // bubble sort

// // #include <iostream>
// // using namespace std;

// // int main(){

// //     int arr[6]={54,22,33,79,10,76};
// //     int n=6;

// //     int counter=1;
// //     while(counter<n){
// //         for(int i=0; i<n-counter; i++){
// //             if(arr[i]>arr[i+1]){
// //                 int temp=arr[i];
// //                 arr[i]=arr[i+1];
// //                 arr[i+1]=temp;
// //             }

// //         }
// //         counter++;
// //     }

// // for(int i=0; i<n; i++){
// //     cout<<arr[i]<<" ";
// // }




// //     return 0;
// // }



#include <iostream>
using namespace std;
int main(){

//     int arr[5]={23,65,88,11,45};
//     int n=5;
//     for(int i=0; i<n; i++){
//         for(int j=i+1; j<n; j++){
//             if(arr[i]> arr[j]){
//                 int temp=arr[j];
//                 arr[j] = arr[i];
//                 arr[i] = temp;
//             }
//         }
//     }
//     for(int i=0; i<n; i++){
//         cout<<arr[i]<<" ";
//     }
   int arr[5]= {34,66,12,78,90};
   int n=5;
   for(int i=1; i<n; i++){
    int current = arr[i];
    int j=i-1;
    while(arr[j]>current  && j>=0 ){
        arr[j+1]=arr[j];
        j--;
    }
    arr[j+1]=current;

   }
   for(int i=0; i<n; i++){
    cout<<arr[i]<<" ";
   }
   
    return 0;
}