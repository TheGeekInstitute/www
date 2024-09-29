// #include <iostream>
// #include <fstream>
// using namespace std;

// int main(){
//     int num=10;
//     int a=2;
//     string text;
//     ofstream fptr("table.txt");
//     for (int i=1; i<=num; i++){
//         fptr<<a<<" x "<<i<<" = "<<a*i<<endl;
//     }
//     // fptr.open("table.txt"); 
    
//     ifstream fptr1("table.txt");
//     // fptr>>text;   

//     while(getline(fptr1,text)){
        
//         cout<<text<<endl;
//     }

//     int 






//     return 0;

// }






#include <iostream>
using namespace std;

int check(int array[] , int size, int key){
    for (int i=0; i<size; i++ ){
        if (key==array[i]){
            return true;
        }
    }
    return false;

}








int main(){
int array[10]= {12,47,55,37,42,67,99,32,66,92};
// int n=40;

if (check(array,5,n)){
    cout<<"Found"<<endl;
}
else{
    cout<<"Not found"<<endl;
}



    return 0;
}






















   

