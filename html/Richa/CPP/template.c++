#include <iostream>

using namespace std;


template <typename T>

class Math{
    public:
    T a;
    T b;



    T sum(T a , T b){
        return a +b;
    }
};



int main() {
 
 Math  <float>m1;

 cout<<m1.sum(12.5,25.36)<<endl;

    return 0;
}
