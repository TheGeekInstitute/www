#include<iostream>
using namespace std;
int main(){
int n=0,i=0,j=0;

cout<<"enter the size of matrix:";
cin>>n;
int mat1[n][n],mat2[n][n],mat3[n][n];


cout<<"enter the element of matrix1:";
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cin>>mat1[i][j];
    }
}

    
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cout<<mat1[i][j]<<" ";
    }
        cout<<endl;

    }

 cout<<"enter the element of matrix1:";

for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cin>>mat2[i][j];
    }
    }
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cout<<mat2[i][j]<<" ";
    }
    cout<<endl;
}

cout<<"\n\n";

cout<<"the addition of two matrix:"<< endl;
for(i=0;i<n;i++){
    for(j=0;j<n;j++)
    {
        mat3[i][j]= mat1[i][j]+mat2[i][j];
    }
}
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cout<<mat3[i][j]<<" ";
    }
        cout<<endl;
    }

 return 0;
}

