#include <iostream>
#include<string>
using namespace std;


int main(){
// int i=1;
// while(i<=10){
//     cout<<i<<endl;
//     if(i==3){
//         break;
//     }
//     i++;
// }


// do{
//     if(i%2!=0){
//     cout<<i<<endl;
//     }
//     i++;

// }while(i<=10);



int arry[] = {10,12,13,18,70};

// cout<<sizeof(arry)/sizeof(arry[0]);

int i=0;

while(i<sizeof(arry)/sizeof(arry[0])){
    cout<<arry[i]<<endl;
    i++;
}


  return 0;
}

