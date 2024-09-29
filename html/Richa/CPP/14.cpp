#include<iostream>
using namespace std;
int main(){
 int ar[2][2][2] = {

 
    {
        {1,2},
        {3,4}
    },

    {
        {9,0},
        {7,8}

    }

 };

 
 for(int i=0; i<2; i++){
    
    for(int j=0; j<2; j++){
    
        for(int k=0; k<2; k++){
            cout<< ar[i][j][k]<< " ";
        }

        cout<<"\n";
    }

 }
        cout<<"\n"; 
 
    return 0;
}
