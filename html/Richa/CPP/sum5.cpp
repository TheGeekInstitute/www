#include <iostream>
using namespace std;

int sumdigits(int n) {
    int sum = 0;
    while (n != 0) {
        sum += n % 10; 
        n /= 10;      
    }
    return sum;
}

int main() {
    int num;
    cout << "Enter a number: ";
    cin >> num;

    int sum = sumdigits(num);
    cout << "Sum of digits: " << sum << endl;

    return 0;
}
