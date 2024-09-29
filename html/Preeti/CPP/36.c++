// #include <iostream>
// #include <string>

// using namespace std;

// int main() {

//     int arry1[3][3]={{1,2,3},{1,2,3},{1,2,3}};
//     int arry2[3][3]={{1,2,3},{1,2,3},{1,2,3}};
//     int arry3[3][3];


//    for(int i=0; i<3; i++){
//       for(int j=0; j<3 ;j++){
//         arry3[i][j]=arry1[i][j]*arry2[i][j];
//         }
//    }

//    for(int i=0; i<3; i++){
//       for(int j=0; j<3 ;j++){
//         cout<<arry3[i][j]<<" ";
//         }
//         cout<<"\n";

//    }

   
    





//   return 0;
// }



#include <iostream>
using namespace std;

int main(){



//   int arr1[3][3]= {{1,2,3},{1,2,3},{1,2,3}};
//   int arr2[3][3]= {{1,2,3},{1,2,3},{1,2,3}};
//   int arr3[3][3];

//   for (int i=0; i<3; i++){
//     for (int j=0; j<3; j++){
//       arr3[i][j]= arr1[i][j] + arr2[i][j];
//     }
//   }

  
//   for (int i=0; i<3; i++){
//     for (int j=0; j<3; j++){
//       cout<<arr3[i][j]<<" ";
//     }
//     cout<<"\n";
//   }

  int arr1[3][3] = {{1,2,3},{1,2,3},{1,2,3}};
  int arr2[3][3];

  for (int i=0; i<3; i++){
    for (int j=0; j<3; j++){
      arr2[i][j] = arr1[i][j]-arr1[i][j];
    }
  }


  for (int i=0; i<3; i++){
    for (int j=0; j<3; j++){
      cout<<arr2[i][j]<<" ";
    }
    cout<<"\n";
  }

  return 0;
}