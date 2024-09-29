#include<iostream>
using namespace std;
int main(){
//  int i;
//  int j;
//  for(i=1;i<=5;i++){
//     for(j=1;j<=i;j++)
//     cout<<"*";
// cout<<"\n";

//  }
//  cout<<"\n""\n";

//  int a;
//  int r;
//  for(a=1;a<=5;a++){
//     for(r=1;r<=5;r++)
//     cout<<"*";
// cout<<"\n";
//  }


//  int p;
//  int q;
//  for(p=1;p<=5;p++){
//     for(q=1;q<=5;q++)
//     cout<<q;
// cout<<"\n";
//  }
int row,col;

cout<< "enter the row & col \n";
cin >> row >> col;

for(int i=1; i<=row;i++){
    for(int j=1; j<=col; j++){
        if(i==1 || i == row){
            cout<< "*";
        }
            else if( j==1 || j==col){
            cout<< "*";
        }
        else{
            cout<< " \n";
        }

    }

}


cout<< "\n";
    return 0;
}