#include<iostream>

using namespace std;

void abcd(int* a, int* b){
    int temp;
    temp = *a;
    *a=*a+*b;
    cout<<*a<<endl;
    *b=temp-*b;
    cout<<*b<<endl;
}

int main(){
    int x=10;
    int y=9;
        abcd(&x,&y);

    return 0;
}