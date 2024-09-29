#include <iostream>
using namespace std;


int linear(int arr[], int key, int n ){
    for (int i=0; i<n; i++){
        if(key==arr[i]){
            return i;

        }

    }
    return -1;
}
int main(){

    int arry[5]={23,4,5,55,32};
    int n=5;
    int key = 55;

    cout<<linear( arry,key,n)<<endl;




    return 0;
}