    #include <iostream>  
    using namespace std;  
    float division(int x, int y) {  
       return (x/y);  
    }  
    int main () {  

    
    try{
       int i = 50;  
       int j = 0;  
       float k = 0;  

    if(j==0){
        throw("Division By Zero is Not Allowed");
    }

          k = division(i, j);  
          cout << k << endl;  
    }

    // catch(const char* e){
    //     cout<<e;
    // }
    
        catch(const char* a){
        cout<<a;
    }



       return 0;  
    }  