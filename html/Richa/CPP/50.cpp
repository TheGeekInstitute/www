#include<iostream>
using namespace std;
int main(){


int n1=4,n2=4;
int Arr[n1];
int Arr1[n2];


    cout<< " enter the elements of array 1:";
        for(int i=0;i<=3;i++){
              cin>>Arr[i];
        }

    cout<< " enter the elements of array 1:";   
          for(int i=0; i<=3; i++){
            cin>>Arr1[i];
          };
          
        int sum[4];

        for(int i=0;i<=3;i++){
            sum[i]=Arr[i]+Arr1[i];
        }


    for(int i=0 ; i<=3 ; i++){
        cout<<sum[i]<<" ";
    }
  


      // cout<< " the sum is: "<< sum;

    return 0;

}