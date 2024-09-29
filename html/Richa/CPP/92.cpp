#include <iostream>

using namespace std;

int addition () {
     int size  ; 
    int array1[size], array2[size], sum[size];

cout<<"Enter the size of array:";
cin>>size;


    cout << "Enter elements of first array:" << endl;
    for (int i = 0; i < size; i++) {
        cin >> array1[i];
    }

    
    for (int i = 0; i < size; i++) {
        cout<< array1[i]<<" ";
    }
    cout<<"\n\n";

    cout << "Enter elements of second array:" << endl;
    for (int i = 0; i < size; ++i) {
      cin >> array2[i];
    }
    
    for (int i = 0; i < size; ++i) {
       cout<< array2[i]<< " ";
    }

       cout<<"\n\n";

    for (int i = 0; i < size; ++i) {
        sum[i] = array1[i] + array2[i];
    }

    cout << "Array after addition" << endl;
    for (int i = 0; i < size; ++i) {
        cout << sum[i] << " ";
    }
    cout << endl;
    cout<<"\n\n";
    return 0;
}



int search(){
 int search,found;
  int n;
  
cout<<"The size of array:";
cin>> n;

int M[n];
cout<<"the number to search";
cin>>search;

cout<<"enter the elements of array";

for(int i=0;i<n;i++){
  cin>>M[i];
}

for(int i=0;i<n;i++){
  cout<<M[i]<<" ";


if(M[i]==search){
found=1;
cout<<"No is found at index["<<i<<"]\n";
break;
}

if(found==0){
cout<<"No.not found";
}
}
0 cout<<"\n\n";


return 0;
}