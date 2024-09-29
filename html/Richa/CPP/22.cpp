#include<iostream>
using namespace std;
int main(){
struct{
string name;
string taste;
int price;
}
food1,food2;
food1.name="namkeen";
food1.taste="salty";
food1.price=130;

food2.name="Jalebi";
food2.taste="sweet";
food2.price=200;


cout<<food1.name<<" "<<food1.taste<<" "<<food1.price<<"\n";

cout<<food2.name<<" "<<food2.taste<<" "<<food2.price<<"\n";

    return 0;
    
}