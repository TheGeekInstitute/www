#include <iostream>
using namespace std;
int main(){
  
  // int m,n;

  // cout<<"Enter Row and Of an Array :";
  // cin>>m;
  // cout<<"\n";
  // cout<<"Enter col and Of an Array :";
  // cin>>n;

  // int arr[m][n];

  // for(int i=0; i<m ; i++){
  //   for(int j=0 ; j<n ; j++){
  //       cout<<"Enter the value for index "<<i<<" " <<j <<" : ";
  //       cin>>arr[i][j];
  //   }
  // }



  
  // for(int a=0; a<m ; a++){
  //   for(int b=0 ; b<n ; b++){
  //       cout<<arr[a][b]<<" ";
  //   }
  //   cout<<"\n";
  // }
  

  int a,b;
  cout<<"Enter Row of an array: "<<endl;
  cin>>a;
  cout<<"\n";
  cout<<"Enter Col of an array: "<<endl;
  cin>>b;
  
  int arr[a][b];
   for (int i=0; i<a; i++){
    for (int j=0; j<b ; j++){
      
      cout<<" Enter the value of index: "<<i<<" "<<j<<" : ";
      cin>>arr[i][j];

    }
   }


  for (int c=0; c<a; c++){
    for (int d=0; d<b; d++){
      cout<<arr[c][d]<<" ";

    }
    cout<<"\n";
  }  

  

    return 0;

}