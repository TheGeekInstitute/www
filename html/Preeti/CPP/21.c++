#include <iostream>
using namespace std;
int main(){
 
int a;
cout<<"Enter row and column of an array: "<<endl;
cin>>a;

int arr[a][a][a];

for (int i=0; i<a; i++){
    for (int j=0; j<a; j++){
        for (int k=0; k<a; k++){
        cout<<"Enter the value for index "<<i<<" " <<j <<k <<" : ";
        cin>>arr[i][j][k];

        }
    }
}

for(int i=0 ; i<a ; i++){
    for(int j=0 ; j<a ; j++){
        for (int k=0; k<a; k++){
            cout<<arr[i][j][k]<<" ";
            

        }
        cout<<"\n";


    }
        cout<<"\n";


}


    return 0;

}