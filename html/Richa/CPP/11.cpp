# include<iostream>
using namespace std;

int main(){
    // int age[5] = {45,25,78,12,36};

    // string names[5] ={"Amit","Sumit","Ravi","Ankit"};

    // age[0]=78;
    // cout<<age[0];

    // cout<< sizeof(age)/ sizeof(int);

// cout<<sizeof(names)/sizeof(string);
// cout<<sizeof(string);


// for(int i=0;  i < sizeof(names)/sizeof(string); i++){
//     cout<<names[i]<<"\n";
// }


string letters[2][4] = {
  { "A", "B", "C", "D" },
  { "E", "F", "G", "H" }
};


for(int i=0 ; i < 2 ;i++){
    for(int j=0 ; j < 4 ; j++){
       cout << letters[i][j]<<" ";++++
    }

    cout<<"\n";
}






return 0;
}
