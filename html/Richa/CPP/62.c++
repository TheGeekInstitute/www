#include <iostream>
using namespace std;



int main() {
    int number;
    cout<<"Enter Number :";
    cin>>number;

    int reversedNumber = 0;
    int sumOfDigits = 0;
    
    
    while (number > 0) {
        int digit = number % 10;
        reversedNumber = reversedNumber * 10 + digit;
        sumOfDigits += digit;
        number /= 10;
    }

    cout<<"Reverse Number :"<<reversedNumber<<"\n";
    cout<<"Sum : "<<sumOfDigits<<"\n";

    return 0;
}
