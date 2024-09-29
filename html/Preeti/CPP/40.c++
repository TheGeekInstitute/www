#include <iostream>
#include <string>

using namespace std;

int main() {

    // try{
    //     int age=10;
    //     if(age>=18){
    //         cout<<"You Can Vote"<<endl;
    //     }
    //     else{
    //         throw("You Can not Vote");
    //     }
    
    // }catch(char  const *a){
    //     cout<<a<<endl;
    // }

    // // catch(...){
    // //     cout<<"Error";
    // // }

   try{
    int age=20 ;
    if(age>=18){
        cout<<"You can vote "<<endl;
    }
    else{
        throw("You can not vote");
    }
   }catch(char const*a){
    cout<<a<<endl;
   }
   catch(...){
    cout<<"Error";
   }

  return 0;
}