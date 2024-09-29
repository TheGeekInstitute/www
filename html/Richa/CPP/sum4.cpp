#include <iostream>
#include <cmath>

double series_sum(int n) {
    double sum = 0.0;
    for (int i = 1; i <= n; ++i) {
        sum += 1.0 / pow(i, i);
    }
    return sum;
}

int main() {
    int n;
    std::cout << "Enter the number of terms: ";
    std::cin >> n;

    double result = series_sum(n);
    std::cout << "Sum of the series for " << n << " terms is: " << result << std::endl;

    return 0;
}