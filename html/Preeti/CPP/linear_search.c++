// #include<iostream>

// using namespace std;


// int linear(int arr[],int key,int n){
//     // int size =  sizeof(arr)/sizeof(arr[0]);
        
//     for(int i=0; i<n ; i++){
//         if(key==arr[i]){
//                 return i;
//         }

//     }

//     return -1;

// }


// int main(){

//     int key=8;

//     int arry[5]={12,7,8,5,66};


//     cout<<linear(arry,key,5)<<endl;


// //On





//     return 0;
// }


#include <iostream>
using namespace std;

int linear(int arr[],int key, int n){

    for(int i=0; i<n; i++){
        if(key==arr[i]){
            return i;
        }
    }
    return -1;
}

int main(){

    int key=11;
    int arry[5]={23,3,46,77,11};

    cout<<linear(arry, key, 5)<<endl;




    return 0;

}