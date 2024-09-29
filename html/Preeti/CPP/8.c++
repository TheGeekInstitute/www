// // #include<iostream>
// // using namespace std;

// // int main(){
// //     // int i=1;

// //     // while(i<=10){
// //     //     cout<<i<<endl;
// //     //     i++;
// //     // }


// // // for(int i=1; i<=10 ; i++){
// // //     cout<<i<<endl;
// // // }


// // string names[] = {"Amit","Sumit","Ravi","Ankit"};

// // // cout<<sizeof(names)/sizeof(names[0]);

// // // for(int i=0; i<4;i++){
// // //     cout<<names[i]<<endl;
// // // }


// // int num[3][3]={
// //     {1,2,3},
// //     {4,5,6},
// //     {7,8,9}
// // };


// // // cout<<num[1][1]<<endl;


// // // for(int i=0 ; i<3 ; i++){
// // //     for(int j=0; j<3 ; j++){
// // //         cout<<num[i][j]<<" ";
// // //     }
// // //     cout<<"\n";
// // // }


// // int rows;
// // cout<<"Number of Rows :";
// // cin>>rows;

// // // for(int i=1; i<=rows ;i++){
// // //     for(int j=1; j<=i ; j++){
// // //         cout<<"* ";
// // //     }
// // //     cout<<"\n";
// // // }


// // // for(int i=1; i<=rows ;i++){
// // //     for(int j=1; j<=i ; j++){
// // //         cout<<j <<" ";
// // //     }
// // //     cout<<"\n";
// // // }


// // // for(int i=1; i<=rows ;i++){
// // //     for(int j=1; j<=i ; j++){
// // //         cout<<i <<" ";
// // //     }
// // //     cout<<"\n";
// // // }


// // // for(int i=1; i<=rows ;i++){
// // //     for(int j=1; j<=rows ; j++){
// // //         cout<<i <<" ";
// // //     }
// // //     cout<<"\n";
// // // }




// // for(int i=1; i<=rows ;i++){
// //     for(int j=1; j<=rows ; j++){
// //         cout<<j <<" ";
// //     }
// //     cout<<"\n";
// // }

// //     return 0;
// // }

// #include <iostream>
// using namespace std;
// int main(){
//     // int i=1;
//     // while(i<=5){
//     //     cout<<i<<endl;
//     //     i++;

// // for (int i=1; i<=10; i++){
// //     cout<<i<<endl;
// // }
// // int rows;
// // cout<<"Enter number of rows: ";
// // cin>>rows;
// // for (int i=1; i<=rows; i++){
// //     for (int j=1; j<=i; j++){
// //         cout<<" * ";
// //     }
// // for (int i=1; i<=rows; i++){
// //     for (int j=1; j<=rows; j++){
// //         cout<<i ;
// //     }

// // string names[] = {"Ram", "Shyam", "Sita", "Radha"};
// //      cout<<sizeof(names)/sizeof(names[0])<<endl;
// //      for (int i=0; i<4; i++){
// //         cout<<names[i]<<endl;

// int arry[4][4] = {{1,2,3,4},{5,6,7,8},{8,10,11,12},{13,14,15,16}};
//     // cout<<arry[1][2]<<" ";
//     for (int i=0; i<4; i++){
//         for (int j=0; j<4; j++){
//            cout<<arry[i][j]<<" ";

//         }
//         cout<<"\n";    
//     }


//     // cout<<"\n";    

//     return 0;
// }

#include <iostream>
using namespace std;
int main(){
    int array[2][2] = {{1,2},{3,4}};
    cout<<array[1][2]<<endl;
    for (int i=0; i<2; i++){
        for (int j=0; j<2; j++){
          cout<<array[i][j];

        }


    }
    





    return 0;

}