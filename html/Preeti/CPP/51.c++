#include <iostream>
using namespace std;


void CountSort(int arr[], int n){
    int output[10]; 
    int count[10];
    int max = arr[0];


    for(int i=0; i<n; i++){
        if(arr[i]>max){
            max=arr[i];

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
        output[count[arr[i]]-1] = arr[i];
        count[arr[i]]--;
    }
    for(int i=0; i<n; i++){
        arr[i] = output[i];

    }
}

int main(){

    int arr[9] = {2,5,5,8,2,1,6,3,9};
    int size= sizeof(arr)/sizeof(arr[0]);

    CountSort(arr,size);

    for(int i=0; i<size; i++){
        cout<<arr[i]<<" ";
    }



    
}

