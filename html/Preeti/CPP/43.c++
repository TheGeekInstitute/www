#include <iostream>
using namespace std;

int binary_search(int arr[], int n, int key){
    int s=0;
    int e=n;
    while(s<=e){
int mid = (e+s)/2;
    if(arr[mid]==key){
        return mid;
    }
    else if(arr[mid]>key){
        e= mid-1;
    }
    else{
        s=mid+1;
    }

    }
    return -1;
}

int main(){

    int arr[8] = {12,13,45,46,55,66,78,98};
    int n=8;
    int key = 45;


cout<<binary_search(arr,n,key)<<endl;

    return 0;
}


// #include <iostream>
// using namespace std;

// int main(){
//     int arr[6] ={41,62,66,84,97,10};
//     int n =6;
//     for(int i=0; i<n; i++){
//         for(int )
//     }




//     return 0;

// }