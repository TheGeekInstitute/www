#include<iostream>
using namespace std;
int main(){


int n,i;
cout<< "enter the size of array 1:";
cin>>n;

int A[n];
int B[n];
cout<< "enter the elements of array:";
for(i=0;i<n;i++){
cin>>A[i];

}

cout<< "enter the elements of array:";
for(i=0;i<n;i++){
cin>>B[i];

}


    int sum[n];
    for(i=0;i<n;i++){
    sum[i]=A[i]+B[i];
    }


for(int i=0; i<n ; i++){
    cout<<sum[i]<<" ";
}




    return 0;
}