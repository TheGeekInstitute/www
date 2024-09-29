#include<iostream>

using namespace std;

int sum(int n){
    if(n==0){
        return 0;
    }

    return  n+sum(n-1);
}

int fact(int n){
    if(n==0){
        return 1;
    }

    return  n*sum(n-1);
}


int power(int n, int p){
    if(p==0){
        return 1;
    }

    int result = power(n,p-1);
    return n*result;
}



int fib(int n){
    if(n<=1){
        return n;
    }

    return fib(n-1) + fib(n-2);
}


int main(){
    cout<<fib(20)<<endl;


// cout<<power(4,3)<<endl;

cout<<fib(5);

    return 0;
}