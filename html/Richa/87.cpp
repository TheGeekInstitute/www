#include<iostream>
using namespace std;

int add()
{

int n;
cout<<"enter the number:";
cin>>n;
 
int arr1[n];
int arr2[n];
int Result[n];


 cout<<"enter the elements of array 1:";

for(int i=0;i<n; i++){
    cin>>arr1[i];
 }

 for(int i=0;i<n; i++){
    cout<< arr1[i] <<" ";
   
 }
  cout<<"\n\n";
 cout<<"enter the elements of array 2:";

 for(int i=0;i<n; i++){
    cin>>arr2[i];
 }

 for(int i=0;i<n; i++){
    cout<< arr2[i] <<" ";
 }
  cout<<"\n\n";

 for(int i=0;i<n; i++){
   Result[i]= arr1[i]+arr2[i];
}
}


int main()
{


    add();

    cout<<"the addition of two arrays"<<endl;
        for(int i=0;i<n; i++){
            cout<< Result[i]<<" ";
        }

        cout<<endl;


}