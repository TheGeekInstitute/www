// #include <iostream>
// using namespace std;

// // linear search

// // int linear(int arr[], int key , int n){
// //     for(int i=0; i<n; i++){
// //         if(key== arr[i]){
// //             return i;
// //         }
// //     }
// //     return -1;

// // }

// // binary search

// // int binary(int arr[], int key, int n){
// //     int s=0; 
// //     int e=n;

// //     while(s<=e){
// //     int mid=(e+s)/2;
// //         if(arr[mid]==key){
// //             return mid;

// //         }
// //         else if(arr[mid]>key){
// //             e=mid-1;

// //         }
// //         else{
// //             s=mid+1;

// //         }
// //     }


// //        return -1;
// // }


// int main(){
// //linear search
//     // int key=21;
//     // int array[6]={2,11,55,16,21,10};

//     // cout<<linear(array, key,6)<<endl;

// // binary search

//     // int array[7]={67,33,18,12,64,90,55};
//     // int n=7;
//     // int key=90;

//     // cout<<binary(array,key,7)<<endl;

// // Insertion sort
//     int arr[7]={67,33,18,12,64,90,55};
//     int n=7;
//     for(int i=1; i<n; i++){
//         int current = arr[i];
//         int j=i-1;

//         while(arr[j]>current && j>=0){
//             arr[j+1]=arr[j];
//             j--;
            
             

//         }
//         arr[j+1]=current;


//     }


//     for(int i=0; i<n; i++){
//         cout<<arr[i]<<" ";
//     }



    

//     return 0;
// }

#include <iostream>
using namespace std;


void CountSort(int arr[], int n){
    int output[10];
    int count[10];
    int max=arr[0];

    for(int i=1; i<n; i++){
        if(arr[i]>max){
            max = arr[i];
        }

    }

    for(int i=0; i<=max; ++i){
        count[i]=0;

    }

    for(int i=0; i<n; i++){
        count[arr[i]]++;
    }

    for(int i=1; i<=max; i++){
        count[i] += count[i-1];
    }
    for(int i=n-1; i>=0; i--){
       output[count[arr[i]-1]]= arr[i];
       count[arr[i]]--;
    }
    for(int i=0; i<n; i++){
        arr[i] = output[i];
    }    


}

int main(){
    int arr[5]={54,88,11,22,66};
    int size=in 
}