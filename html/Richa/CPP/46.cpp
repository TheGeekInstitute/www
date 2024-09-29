
// class box{
// public:
// int l,b,h;




//     public:
//     box(int lenght,int width,int height){
//          l=lenght;
//          b=width;
//          h= height;
//     }

//     int volume(){
//         return l*b*h;
//     }



// };

// int main(){
//     int l,b,h;
//     cout<< "enter the info of box:";
//     cin>> l >> b >> h;
//     box b1(l,b,h);
  
// // b1.volume();
// cout<< "the volume of the box  "<< b1.volume() << "\n";
#include<iostream>
using namespace std;
// class date{
// private:
//   int dd,mm,yyyy;

// public:
// date(int day, int month, int year){
//     dd=day;
//     mm=month;
//     yyyy= year;
// }
// void display(){
//     cout<< " the date is:"<<dd<<"-"<<mm<<"-"<<yyyy;
// }

 
//  };




// int main(){
//     int dd,mm,yyyy;
// cout<< " enter the date: \n";
// cin>> dd >> mm >> yyyy;

// date d1(dd,mm,yyyy);
// d1.display();
// // iint date();

// // cout<< " the date is "<< d1.dd <<"-" << d1.mm << "-" << d1.yyyy;
class odd{
    private:
    int n,sum=0;

    public:
    odd(int number){
        n=number;
        
    
    }
     void oddsum(){

        for(int i=1; i<n ; i++){
            if(i%2 !=0){
                sum+=i;
            }

        }

        cout<<"Sum:"<<sum;

    
     }

     };
int main(){
    int  n;
   cout<< " enter the number:";
    cin>>n;
    odd o(n);
o.oddsum();

    return 0;
}