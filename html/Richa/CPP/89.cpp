#include<iostream>
using namespace std;
int Addition(){
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
    cout<<"\n\n\n";

 return 0;
}



int Subtraction(){
int n=0,i=0,j=0;

cout<<"Enter the size of matrix:";
cin>>n;
int mat1[n][n],mat2[n][n],mat3[n][n];


cout<<"Enter the element of matrix1:";
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

 cout<<"Enter the element of matrix1:";

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

cout<<"The subtraction of two matrix:"<< endl;
for(i=0;i<n;i++){
    for(j=0;j<n;j++)
    {
        mat3[i][j]= mat1[i][j]-mat2[i][j];
    }
}
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cout<<mat3[i][j]<<" ";
    }
        cout<<endl;
    }
    cout<<"\n\n\n";

 return 0;
}


int Multiplication(){
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

 cout<<"enter the element of matrix2:";

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

cout<<"the muiltiplication of two matrix:"<< endl;
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        mat3[i][j]=0;
for(int k=0;k<n;k++){

        mat3[i][j]= mat3[i][j] + (mat1[i][k]*mat2[k][j]);
    }
    }
}

for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cout<<mat3[i][j]<<" ";
    }
    cout<<endl;
}

cout<<"\n\n\n";
return 0;
}





int Transpose(){
int n=0,i=0,j=0;

cout<<"enter the size of matrix:";
cin>>n;
int matA[n][n],matT[n][n];


cout<<"enter the element of matrix1:";
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cin>>matA[i][j];
    }
}

for(i=0;i<n;i++){
    for(j=0;j<n;j++){
       matT[i][j]=matA[j][i];
    }
   cout<<endl;
    }

cout<<"entered matrix is:"<<endl;
for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cout<<matA[i][j]<<" ";
    }
        cout<<endl;
    }

 for(i=0;i<n;i++){
    for(j=0;j<n;j++){
        cout<<matT[i][j]<<" ";
    }
        cout<<endl;
    }
cout<<"\n\n\n";

    return 0;
}

int main(){
    char ch;

    cout << "Enter your choice: ";
    cin >> ch;

    switch (ch) {
        case 'a':
            cout << "Result: " << Addition() << endl;
            break;
        case 's':
            cout << "Result: " << Subtraction() << endl;
            break;
        case 'm':
            cout << "Result: " << Multiplication() << endl;
            break;
        case 't':
            cout << "Result: " << Transpose() << endl;
            break;



    }

    return 0;
}