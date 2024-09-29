#include<iostream>
using namespace std;
int main(){
int n;
int i;
int j;
cout<< " enter the number of the nodes of a graph:";
cin>>n;
int R[4][3];

for( i=1; i<=n; i++){
    for( j=1; j<=n;j++){
        if(i<=j){
        cout<< " enter the number of edges:"<<i<< "and" <<j;
       
        cin>> R[i][j];
         R[i][j]=R[j][i];
    }
}
}

for( i=1; i<=n; i++){
    for( j=1; j<=n;j++){
    cout<< R[i][j];
}

cout<<"\n";
}

    return 0;
}



