#include<iostream>
using namespace std;
int main(){

int nodes;
int i;
int j;

cout<<"Enter Numbers of Nodes :";
cin>>nodes;

int arry[nodes][nodes];

for(int i=0 ; i< nodes ; i++){
    for(int j=0 ; j<nodes ; j++){
        cin>>arry[i][j];
    }
}



for(int  a=0 ; a<nodes ; a++){
    for( int b=0 ; b<nodes ; b++){
        if(i<=j){
        cout<<a<<b << " ";
        }
    }
    cout<<"\n";
}

    return 0;
}



