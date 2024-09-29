#include<iostream>
using namespace std;

#define n 100
class stack{
    int* arr;
    int top_index;

    public:
    stack(){
        arr=new  int[n];
        top_index=-1;
    }


    void push(int x){
        if(top_index==n-1){
            cout<<"Stack Overflow"<<endl;
            return;

        }
            top_index++;
            arr[top_index]=x;
    }


    void pop(){
        if(top_index==-1){
            cout<<"No Element on top_index"<<endl;
            return;
        }
        top_index--;
    }


    int top(){
        if(top_index==-1){
            cout<<"No Element in Stack"<<endl;
            return -1;
        }

        return arr[top_index];
    }


    bool empty(){
        return top_index==-1;
    }


};



int main(){
    stack st;
    st.push(1);
    st.push(2);
    st.push(3);
    cout<<st.top()<<endl;
    cout<<st.empty()<<endl;




    return 0;
}