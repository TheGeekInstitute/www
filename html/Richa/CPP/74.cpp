#include<iostream>
using namespace std;
class vehicle
{

    private:
    int price;


    public:
     int setprice(int p)
     {
        price =p;
        return 0;
     }
     
     int getprice()
         {
           return price;
        }
}   ;
int main(){
    int price;

    cout<<" enter the price of the vehicle:";
    cin>> price;


    vehicle v1;
    v1.setprice(price);
    
     cout<< " the price of the vehicle is:"<<v1.getprice();

}
