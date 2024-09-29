#include<iostream>
#include<string>
using namespace std;

// Function definition
void func(int a, int* b, int& c) {
    int temp = a + *b + c; // Calculate temp
    a += 10;               // Increment a by 10
    *b += 20;              // Increment value pointed by b by 20
    c += 30;               // Increment c by 30
}

int main() {
    int x = 1, y = 2, z = 3;
    cout << x << ". " << y << ". " << z << endl; // Output initial values

    // Call func with arguments x (by value), address of y, and z (by reference)
    func(x, &y, z);

    cout << x << ". " << y << ". " << z << endl; // Output modified values
    return 0;
}