#include<iostream>
using namespace std;

class Rectangle{
    private:
        double a,b;

    public:
        Rectangle(double height,double width){
                    a=height;
                    b= width;
        }

       double calculateArea(){
            return (a*b);
        }
      double  calculatePerimeter(){
            return 2*(a+b);
        }

};

int main(){
 double a,b;
 cout<< " enter the height and width: ";
 cin>>  a >> b;

 Rectangle r1(a,b);


 cout<< r1.calculateArea()<<"cm\n";
 cout<< r1.calculatePerimeter()<<"cm\n";






    return 0;
}