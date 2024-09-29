#include <iostream>
#include <cmath>
using namespace std;

class Triangle {
private:
    double a, b, c;

public:
    Triangle(double side1, double side2, double side3) {
        a = side1;
        b = side2;
        c = side3;
    }

 
    double calculateArea() {
      
        double s = (a + b + c) / 2.0;

   
        double area = sqrt(s * (s - a) * (s - b) * (s - c));
        return area;
    }

   
    double calculatePerimeter() {
        return a + b + c;
    }
};

int main() {
    double side1, side2, side3;

  
    cout << "Enter the lengths of the three sides of the triangle: ";
    cin >> side1 >> side2 >> side3;

    
    Triangle triangle(side1, side2, side3);

   
    cout << "Area of the triangle: " << triangle.calculateArea() << endl;
    cout << "Perimeter of the triangle: " << triangle.calculatePerimeter() << endl;

    return 0;
}
