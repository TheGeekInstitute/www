#include<iostream>
using namespace std;
class pattern{
private:
int i=0,j=0,n;

public:
pattern(int a){
n=a;

}

void pet(){
    cout<<n;
    for(i=0;i<=n;i++){
        for(j=0;j<n;j++){
            cout<<"*";
        }
        cout<<"\n";
    }
}
};





int main(){


pattern p1(5);
pattern* ptr= &p1;

ptr->pet();

    return 0;
}