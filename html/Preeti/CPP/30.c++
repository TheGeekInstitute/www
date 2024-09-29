// #include <iostream>
// using namespace std;

// int fact(int num){
//     if(num<=0){
//         return 1;
//     }else{
//         return num*fact(num -1);
//     }
// }


// int sum(int num){
//     if(num<=0){
//         return 0;
//     }else{
//         return num+sum(num -1);
//     }
// }


// int data(){

    
//     return 0;
//     cout<<"hello";
//     cout<<"World";
    
    

// }



// int main(){ 


// //    int fact=1;
// //    int a=4;

// //    for(int i=1 ; i<= a ; i++){
// //     fact*=i;
// //    }

// //    cout<<fact<<endl;



// // cout<<sum(10)<<endl;

// cout<<data()<<endl;
// // data();


//     return 0;

// }

#include <iostream>
using namespace std;

int fact(int a){
    if(a<=0){
        return 1;
    }else{
        return a*fact(a-1);
    }
}


int sum(int num){
    if(num<=0){
        return 0;

    }else{
        return num+sum(num-1);
    }
}
int min(int num){
    if(num<=0){
        return 0;

    }else{
        return num-min(num-1);
    }
}







int main(){
    // int fact=1;
    // int a=5;
    // for (int i=1; i<=a; i++){
    //     fact*=i;
    // }

    // cout<<fact<<endl;


    cout<<fact(5)<<endl;
    cout<<sum(20)<<endl;
    cout<<min(10)<<endl;


    int num=5;
    for (int i=0; i<num; i++){
        num*i;


    }
    cout<<num<<endl;






    return 0;
}