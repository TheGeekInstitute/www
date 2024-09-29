#include<iostream>
using namespace std;

int main(){
    int arr[6] = {12,13,58,89,11,90};
    int n=6;

    for(int i=1 ; i <n ; i++){
        int current = arr[i];
        int j=i-1;

        while(arr[j]>current && j>=0){
            arr[j+1]=arr[j];
            j--;
        } 

        arr[j+1]=current;
    }




    for(int i=0 ; i<n ; i++){
        cout<<arr[i]<<" ";
    }


    return 0;





}