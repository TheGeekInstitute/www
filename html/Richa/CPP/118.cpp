#include<iostream>
#include<fstream>
using namespace std;


int main(){
//  ofstream out("rahul.txt");
//  out<<"Rahul is a bad boy";
// out<<"he is bad";


//  out.close();


 ifstream in;
 string  data, l1,l2,l3;
 in.open("rahul.txt");

//  in>>l1>>l2>>l3;
//  cout<<l1<<l2<<l3;

while(in.eof()==0){
    getline(in,l1);
    cout<<l1<<endl;
}
 in.close();
 return 0;                                



    return 0;
}