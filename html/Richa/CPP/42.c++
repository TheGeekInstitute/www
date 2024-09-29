#include<iostream>
using namespace std;
class member{
    private:
        void print_private(){
            cout<<"Hello From Private Member\n";
        }
    protected:
        void print_protected(){
            cout<<"Hello Form Protected member\n";
        }

    public:
        void print_public(){
            cout<<"Hello Form Public Member\n";
        }

    void print_internal(){
        print_private();
        print_protected();
    }

};


class Child : public member{

    public:
        void print_data(){
        // print_private();
        print_protected();
        }

    void print_child(){
        cout<<"Hello Form Child Class\n";
    }

};


class GrandChild : public Child{
    public:
        void print_grand(){
        // print_private();
        print_protected();
        }


};


int main(){

    // member m1;

    // m1.print_internal();

    // Child c1;

    // c1.print_data();

    GrandChild g1;

    g1.print_grand();



    return 0;
}