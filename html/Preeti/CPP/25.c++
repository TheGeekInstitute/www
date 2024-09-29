// #include <iostream>
// using namespace std;

// int find(int arr[], int size, int val){
//     for(int i=0; i<size; i++){
//         if(arr[i]==val){
//             return true;
            
//         }
//     }

//     return false;
// }


// int findMin(int arr[], int size) {
//     // Initialize min with the first element of the array
//     int min = arr[0];
    
//     // Traverse the array starting from the second element
//     for (int i = 1; i < size; ++i) {
//         // Update min if the current element is smaller
//         if (arr[i] < min) {
//             min = arr[i];
//         }
//     }
    
//     return min;
// }


// int main(){
// // int value=30;
// int arry[5]={10,20,30,40,50};
 

//     cout<<findMin(arry,5)<<endl;

    




//     return 0;
// }


#include <iostream>
using namespace std;

// int find(int arr[], int size , int val){
//     for (int i=0; i<size; i++){
//         if(arr[i]==val){
//             return true;

//         }
//     }
//     return false;

// }

// int findMax(int arr[], int size){
//     int max=arr[0];
//     for (int i=0; i<size; i++){
//         if (max<arr[i]){
//             max= arr[i];

//         }
//     }
//     return max;


// }

int find(int arr[], int size, int val){
    for (int i=0; i<size; i++){
        if(arr[]==val){
            return true;
        }
    }
    return false;
}

int findEql(int arr[], int size){
    int eql=arr[0];
    for(int i=0; i<size; i++){
        if (arr[i]==val){
            eql=arr[i];

        }
    }
    return eql;

}






int main(){
// int arr[6]={23,5,68,34,77,22};
//     cout<<findMax(arr,6)<<endl;
   int arr[6]={2,6,5,9,7,5};
   cout<<findEql(arr,6)<<endl;  
    return 0;

}