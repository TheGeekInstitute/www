#include <iostream>
#include <algorithm>
using namespace std;

int check(int arry[], int size,int key){
    // int length=sizeof(arry)/sizeof(arry[0]);
    for(int i=0 ; i < size ; i++){
        if(key==arry[i]){
            return true;
        }
    }
    return false;
}


int main(){

int arr[5] ={23,56,78,99,43};
int n=43;

// if(check(arr,5,n)){
//     cout<<"Found"<<endl;
// }
// else{
//     cout<<"Not Found"<<endl;
// }
    return 0;

}