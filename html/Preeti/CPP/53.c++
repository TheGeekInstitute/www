#incl0ude<iostream>
using namespace std;

void countsort(int arr[], int n){
    int output[10];
    int count[10];
    int max = arr[0];

    for(int i=1; i<n; i++){
        if(arr[i]>max){
            max=arr[i];
        }

    }
    for(int i=0; i<=max; ++1){
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
        arr[i]=ouput[i];

    }



    int main(){
        arr[8]={67,55,44,56,22,88,22,90};
        int size=sizeof(arr)/ sizeof(arr[0]);
        countsort(arr,size);

        for(int i=0; i<n; i++){
            cout<<arr[i]<<" ";
        }



        return 0;
    }

}