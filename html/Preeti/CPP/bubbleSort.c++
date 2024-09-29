#include<iostream>

using namespace std;

int main(){


int arr[6]={45,25,78,12,63,22};
int n=6;

    int counter=1;
    while(counter<n){
        for(int i=0; i<n-counter;i++){
            if(arr[i]> arr[i+1]){
                int temp=arr[i];
                arr[i]=arr[i+1];
                arr[i+1]=temp;
            }
        }
        counter++;
    }



for(int j=0; j<n ; j++){
    cout<<arr[j]<<" ";
}

}