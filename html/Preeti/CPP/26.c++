#include<iostream>
using namespace std;

int main(){



int arr[6]={1,2,3,4,5,6};
int size = sizeof(arr)/sizeof(arr[0]);
int start=0;
int rev_arr[6];

for (int i=size; i<=size; i--){
    if(i<0){
        break;
    }
    cout<<i<<endl;
    rev_arr[start]=arr[i];
    start++;

}

for (int i=0; i<6; i++)
// int arry[5]={1,2,3,4,5};

// int size = sizeof(arry)/sizeof(arry[0])-1;
// int start=0;
// int rev_arry[5];

// for(int i=size ; i<=size ; i--){
//     if(i<0){
//         break;
//     }
//     // cout<<i<<endl;
//     rev_arry[start]=arry[i];
//     start++;
// }


// for(int i=0 ; i<5 ; i++){
//     cout<<rev_arry[i]<<endl;                                           
// }


return 0;
}