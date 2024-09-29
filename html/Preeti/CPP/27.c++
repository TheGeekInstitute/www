#include<iostream>
using namespace std;

int main(){

int arr1[5] = {10,20,30,40,50};
int arr2[5] = {60,70,80,90,100};

int size = sizeof(arr1)/sizeof(arr1[0]);
int new_arr[10];
int i=0;
for (i; i<size; i++){
        new_arr[i]=arr1[i];
}

for (int j=0; j<size; j++){
        cout<<new_arr[i]=arr2[j];
}


for (int a=0; a<10; a++){
        cout<<new_arr[a]<<endl;
}

// int arry1[5]={1,2,3,4,5};
// int arry2[5]={7,8,9,40,11};

// int size = sizeof(arry1)/sizeof(arry1[0]);

// int new_arr[10];

// int i=0;

// for(i ; i<size ; i++){
//         new_arr[i]=arry1[i];
// }


// for(int j=0 ; j<size ; j++){
//         new_arr[i]=arry2[j];
//         i++;
// }


// for(int a=0 ; a<10 ; a++){
//     cout<<new_arr[a]<<endl;
// }







return 0;
}