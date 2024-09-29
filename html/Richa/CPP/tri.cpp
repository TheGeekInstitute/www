

#include <iostream>
#include <cmath>

using namespace std;

class Triangle {
private:
    double side1, side2, side3;

public:
    
    Triangle(double s1, double s2, double s3){
      side1=s1;
      side2=s2;
      side3=s3;
    }
    
    double areaRightAngle() const {
      
        return 0.5 * side1 * side2;
    }

    double areaHeron() const {
        double s = (side1 + side2 + side3) / 2; 
        return sqrt(s * (s - side1) * (s - side2) * (s - side3));
    }
};

int main() {
      int side1,side2,side3;
      int side4,side5,side6;


    cout<<"Enter the details of  Right Angled Triangle:\n";

    cout<<"Enter the side1:";
    cin>>side1;

    cout<<"Enter the side2:";
    cin>>side2;


    cout<<"Enter the side3:";
    cin>>side3;
    
    cout<<"\n\n";

    cout<<"Enter the details of Any Triangle:\n";

    cout<<"Enter the side14:";
    cin>>side4;

    cout<<"Enter the side5:";
    cin>>side5;


    cout<<"Enter the side6:";
    cin>>side6;


    Triangle RightTriangle(side1,side2,side3);
    cout << "The area of right-angled triangle: " << RightTriangle.areaRightAngle() << endl;

    Triangle NormalTriangle(side4,side5,side6);
    cout << "The area of any triangle by Heron's formula: " << NormalTriangle.areaHeron() << endl;

    return 0;
}
