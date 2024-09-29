
#include <iostream>
using namespace std;

void CountSort(int array[], int n){
    int output[10];
    int count[10];
    int max = array[0];

    for(int i=1; i< n ; i++){
        if(array[i]>max){
            max = array[i];   
        }
    }

    for(int i=0 ; i<= max ; ++i){
        count[i]=0;
    }

    for(int i=0; i< n ; i++){
        count[array[i]]++;
    }

    for(int i=1 ; i<=max ;  i++){
        count[i] += count[i -1];
    }

    for(int i=n-1; i>=0 ; i--){
        output[count[array[i]]-1] = array[i];
        count[array[i]]--;
    }    

    for(int i=0; i< n  ;  i++){
        array[i]=output[i];
    }



}




int main() {
  int array[7] = {4, 2, 2, 8, 3, 3, 1};
  int size = sizeof(array) / sizeof(array[0]);

    CountSort(array,size);

    for(int i=0; i<size ; i++){
        cout<<array[i]<<" ";
    }

}