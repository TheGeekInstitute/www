 #include<iostream>
using namespace std;
long sum(long);


int main(){
 long w=sum(4);
  cout<< w << "\n";


  return 0;
  





    // return 0;
}



  long sum(long num){
    if( num==0){
        return 1;
    }
    else{
    return    num* sum(num-1);
    }
  }
