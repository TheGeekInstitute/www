#include <iostream> 
using namespace std;
// int arrSum(int arr[], int size){
//     if(size==0){
//         return 0;
//     }
//     return arr[size-1] + arrSum(arr, size-1);

// }

// int fact(int n){
//     if(n==0){
//        return 1;

//     }
//     return n*fact(n-1);
// }



// int linear(int arr[], int key, int n){
//     for(int i=0; i<n; i++){
//         if(key==arr[i]){
//             return i;
//         }
//     }
//     return -1;


// }

int binary(int arr[], int key, int n){
    int s=0;
    int e=n;
    while(s<=e){
    int mid = (e+s)/2;
        if(arr[mid]==key){
            return mid;
            
       }
       else if(arr[mid]>key){
            e=mid-1;
       }
       else{
            s=mid+1;
       }
       
       
    }
         return -1;
}








int main(){
    int arr[6]={1,2,3,4,5,6};
    int n=6;

    int key = 5;







    // int key=10;
    // int array[10]={73,44,22,7,9,11,22,4,10,12};
    

    // cout<<linear(array,key,10)<<endl;

    // int num;
    // cout<< "Enter a number: "<<endl;
    // cin>>num;
    // int fact(int num){
    //     if(num==0){
    //         return 1;
    //     }
    //     return num*fact(n-1);
    // }
    // int arr[7]={34,6,65,32,11,87,55};
    // int n=7;
    // for(int i=1; i<n; i++){
    //     int current= arr[i];
    //     int j=i-1;
        
    //     while(arr[j]> current && j>=0){
    //         arr[j+1]=arr[j];
    //         j--;

    //     }
    //     arr[j+1]=current;
    // }

    // for(int i=0; i<n; i++){
    //     cout<<arr[i]<<" ";
    // }

    
    



    // int arry[] = {1,2,3,4,5};
    // int size = sizeof(arry)/sizeof(arry[0]);


    // for(int i=0; i<size; i++){
    //     cout<<arry[i]<<endl;

    // // }
    // int sum = arrSum(arry,size);
    // cout<<sum<<endl;


    return 0;

}