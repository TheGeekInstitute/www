#include <iostream>
#include <cmath>
using namespace std;

double seriesSum(int n) {
    double sum = 0.0;
    for (int i = 1; i <= n; ++i) {
        if (i % 2 == 0) {
            sum -= 1.0 / pow(i, i);
        } else {
            sum += 1.0 / pow(i, i);
        }
    }
    return sum;
}

int main() {
    int n;
    cout << "Enter the number of terms: ";
    cin >> n;

    if (n <= 0) {
        cout << "Invalid input. Number of terms should be a positive integer." << endl;
        return 1;
    }

    double result = seriesSum(n);
    cout << "Sum of the first " << n << " terms of the series: " << result << endl;

    return 0;
}
