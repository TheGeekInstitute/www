#include<iostream>
using namespace std;
int main(){

/*string word[3][3]={
    {"(bat)","(sat)","(mat)"},
    {"(cut)","(but)","(hut)"},
    {"(pin)","(bin)","(rin)"}
};

for(int i=0; i<3; i++){
    for(int j=0;j<3; j++){
     

        cout<<word[i][j]<< " ";
            

}
            cout<<"\n";

}*/

int num[3][3] = {
    {4,5,6},
    {7,8,9},
    {11,12,13}
};


 for(int i=0; i<3; i++){
    for(int j=0; j<3; j++){
    cout<< num[i][j]<< " ";
    }

cout<<"\n";
 }



return 0;

}




