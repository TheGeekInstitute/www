
#include <iostream>
using namespace std;
int main(){
    // int array[2][2] = {{1,2},{3,4}};
    // cout<<array[1][2]<<endl;
    // for (int i=0; i<2; i++){
    //     for (int j=0; j<2; j++){
    //       cout<<array[i][j];

    //     }


    // }
    
    // int array[3][3] = {{1,1,1},{2,2,2},{3,3,3}};
    // cout<<array[2][2]<<endl;
    
    // for (int i=0; i<3; i++){
    //     for (int j=0; j<3; j++){
    //             cout<<array[i][j]<<endl;
    //         }
    //         cout<<"\n";
    //     }

    int array[3][3][3] = {{{10,20,30},{40,50,60},{70,80,90}},{{10,20,30},{40,50,60},{70,80,90}},{{10,20,30},{40,50,60},{70,80,90}}};
    for (int i=0; i<3; i++){
        for (int j=0; j<3; j++){
            for (int k=0; k<3; k++){
                cout<<array[i][j][k]<<endl;
            }
        }
    }


    






    return 0;
}    