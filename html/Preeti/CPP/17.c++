#include <iostream>
using namespace std;
int main(){
  
  int n;

  cout<<"Enter Indexes Of an Array :";
  cin>>n;

  int arr[n];

  for(int i=0; i < n ;i++){
    cout<<"Enter value of Index " <<i<<" : ";
    cin>>arr[i];
  }


for(int i=0; i<n ; i++){
    cout<<arr[i]<<" ";
}

   


    return 0;

}