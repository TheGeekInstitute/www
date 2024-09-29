#include<iostream>
#include<fstream>

using namespace std;

int main(){
    string text;

    ofstream fptr("data.txt");
    fptr<<"Hello World\n";
    fptr<<"Hello World\n";
    fptr<<"Hello World\n";


    // ifstream fptr("data.txt");
    // fptr>>text;
    // getline(fptr,text);
    // getline(fptr,text);
    // getline(fptr,text);
    // ifstream fptr;

    // fptr.open("data.txt");



    // while(getline(fptr,text)){
    //     cout<<text<<endl;
    // }

    // getline(fptr,text);
    // getline(fptr,text);
    // getline(fptr,text);
    // getline(fptr,text);
    // getline(fptr,text);
    // cout<<fptr.eof()<<endl;

    // while(!fptr.eof()){
    //     getline(fptr,text);
    //     cout<<text<<endl;
    // }







    fptr.close();

    return 0;
}