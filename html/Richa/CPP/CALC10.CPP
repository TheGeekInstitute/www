#include <iostream>
using namespace std;


float add(float num1, float num2) {
    return num1 + num2;
}

float subtract(float num1, float num2) {
    return num1 - num2;
}

float multiply(float num1, float num2) {
    return num1 * num2;
}

float divide(float num1, float num2) {
    if (num2 != 0)
        return num1 / num2;
    else {
        cout << "invalid" << endl;
        return 0;
    }
}

int main() {
    char ch;
    float num1, num2;

    cout << "Enter two numbers: ";
    cin >> num1 >> num2;
    
    cout << "Enter your choice: ";
    cin >> ch;



    switch (ch) {
        case 'a':
            cout << "Result: " << add(num1, num2) << endl;
            break;
        case 's':
            cout << "Result: " << subtract(num1, num2) << endl;
            break;
        case 'm':
            cout << "Result: " << multiply(num1, num2) << endl;
            break;
        case 'd':
            cout << "Result: " << divide(num1, num2) << endl;
            break;
        default:
            cout << "Invalid " << endl;
    }

    return 0;
}
