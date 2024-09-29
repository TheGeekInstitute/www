#include <iostream>
using namespace std;
int main(){
  
  // int n;

  // cout<<"Enter Row and Of an Array :";
  // cin>>n;
  
  // int arr[n][n];

  // for(int i=0 ; i<n ; i++){
  //   for(int j=0 ; j<n ; j++){
  //       cout<<"Enter the value for index "<<i<<" " <<j <<" : ";
  //       cin>>arr[i][j];
  //   }
  // }
   

  //    for(int i=0 ; i<n ; i++){
  //       for(int j=0 ; j<n ; j++){
        
  //           cout<<arr[i][j]<<" ";
  //       }

  //   cout<<"\n";
  // }
  int a;
  cout<<"Enter Row of an array: "<<endl;
  cin>>a;
  int arr[a][a];
    for (int i=0; i<a; i++){
      for(int j=0; j<a; j++){
        cout<<"Enter the value of index"<<i<<" " <<j<<" : ";
        cin>>arr[i][j];
      }
    }


    for (int i=0; i<a; i++){
      for(int j=0; j<a; j++){
        cout<< arr[i][j]<<" ";

      }
      cout<<"\n";
    }









    return 0;

}