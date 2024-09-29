#include <iostream>
using namespace std;

int fact(int num){
    int fact=1;
    for(int i=1; i<=num ;i++){
            fact*=i;
    }

    return fact;
}


int sum(int num){
    int sum=0;
    for(int i=1; i<=num ;i++){
            sum+=i;
    }

    return sum;
}


int main(){


// int num=4;

// int sum=0;
// int fact=1;

// for(int i=1; i<=num ;i++){
//     sum+=i; // sum= sum+i
// }
// cout<<sum<<endl;


// for(int i=1; i<=num ;i++){
//     fact*=i; // sum= sum+i
// }
// cout<<fact<<endl;



cout<<sum(4)<<endl;


    return 0;
}



// int main(){

    // sum(10);


    


