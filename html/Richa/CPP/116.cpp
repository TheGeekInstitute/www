#include<iostream>
#include<fstream>
using namespace std;

int main(){

ofstream write("richa.txt");
write<< " Hi Richa";
write.close();


return 0;
}