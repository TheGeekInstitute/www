#include <iostream>
#include<string>
using namespace std;
  int main(){

 string arry[]={"yellow","black","green","peach"};
 
//   cout<<sizeof (arry)/sizeof (arry[0]);
  int colour=0;
  while(colour<sizeof(arry)/sizeof(arry[0])){
    cout<<arry[colour]<<endl;
    colour++;
  }
   return 0;
  }

