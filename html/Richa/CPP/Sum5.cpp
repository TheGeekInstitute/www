#include <iostream>
using namespace std;

int sum_of_digits(int n) {
    // Initialize sum to 0
    int sum = 0;
    
    // Iterate through each digit of the number
    while (n > 0) {
        // Extract the last digit
        int digit = n % 10;
        // Add the digit to the sum
        sum += digit;
        // Remove the last digit from the number
        n = n / 10;
    }
    
    return sum;
}

int main() {
    int num;
    cout << "Enter a number: ";
    cin >> num;
    cout << "Sum of digits: " << sum_of_digits(num) << endl;
    return 0;
}
