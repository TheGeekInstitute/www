#include<iostream>

using namespace std;

int binary_search(int arr[],int n, int key){
int s=0;
int e=n;


while(s<=e){
int  mid = (e+s) / 2;
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

int arr[6]={1,2,3,4,5,6};
int n=6;

int key = 5;



// //Selection Sort
// for(int i=0; i< n ; i++){
//     for(int j=i+1 ; j<n ; j++){
//         if(arr[i]>arr[j]){
//             int temp=arr[j];
//             arr[j]=arr[i];
//             arr[i]=temp;
//         }
//     }
// }




cout<<binary_search(arr,n,key)<<endl;











// for(int i=0; i< n ; i++){
//     cout<<arr[i]<<" ";
// }



    return 0;
}