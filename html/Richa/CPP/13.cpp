#include<iostream>
using namespace std;
int main(){

int rs[3][3][3] ={
    {
        {2,4,5},
        {7,8,9},
        {11,12,13}
    },
    {
        {21,22,23},
        {45,46,47},
        {98,97,96}
    },
    {
        {34,35,36},
        {86,87,88},
        {67,68,69}
    }
    };
    
    for(int i=0; i<3; i++){
        for(int j=0; j<3; j++){-*
            for(int k=0; k<3; k++){
                cout<< rs[i][j][k]<<" ";
            }
        cout<<"\n";

        }
        cout<<"\n";
    }

return 0;



}


    