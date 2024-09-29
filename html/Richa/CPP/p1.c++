#include <iostream>
#include <cmath>
#include <stdexcept>

using namespace std;

class Triangle {
private:
    double side1, side2, side3;

public:
    Triangle(double s1, double s2, double s3) : side1(s1), side2(s2), side3(s3) {
        // Check if sides are greater than 0
        if (s1 <= 0 || s2 <= 0 || s3 <= 0) {
            throw invalid_argument("Sides of the triangle must be greater than 0.");
        }

        // Check triangle inequality theorem
        if (s1 + s2 <= s3 || s1 + s3 <= s2 || s2 + s3 <= s1) {
            throw invalid_argument("Invalid triangle: Sum of any two sides must be greater than the third side.");
        }
    }

    double area() const {
        // Calculate area using Heron's formula
        double s = (side1 + side2 + side3) / 2;
        return sqrt(s * (s - side1) * (s - side2) * (s - side3));
    }

    double area(double base, double height) const {
        // Calculate area of right angled triangle
        return 0.5 * base * height;
    }
};

int main() {
    try {
        // Creating a triangle object with sides
        Triangle t(3, 4, 5);

        // Calculating and printing area
        cout << "Area of the triangle using Heron's formula: " << t.area() << endl;

        // Calculating and printing area of right angled triangle
        cout << "Area of the right angled triangle: " << t.area(3, 4) << endl;
    }
    catch (const invalid_argument& e) {
        cout << "Invalid triangle: " << e.what() << endl;
    }

    return 0;
}
