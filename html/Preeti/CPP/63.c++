#include<iostream>
using namespace std;

# define MAX 100


class Deque{
    int arr[MAX];
    int front;
    int end;
    int size;

public:
    Deque(int size){
        front=-1;
        end=0;
        this->size=size;
    }    

    bool isFull(){
        return ((front==0 && end==size-1) || front==end+1);
    }

    bool isEmpty(){
        return (front==-1);
    }

void insertfront(int key){
    if(isFull()){
        cout<<"Overflow\n"<<endl;
        return;
    }

    if(front==-1){
        front=0;
        end=0;
    }

    else if(front==0)
        front=size-1;

    else
        front=front-1;

    arr[front]=key;

}

void insertend(int key){
    if(isFull()){
        cout<<"Overflow\n"<<endl;
        return;
    }

    if(front==-1){
        front=0;
        end=0;
    }

    else if(end==size-1)
        end=0;

    else
        end=end+1;

    arr[end]=key;

}

void deletefront(){
    if(isEmpty()){
        cout<<"Queue Underflow\n"<<endl;
        return;

    }

    if(front==end){
        front=-1;
        end=-1;
    }
    else
       if(front==size-1)
       front=0;

    else
        front=front+1;

}

void deleteend(){
    if(isEmpty()){
        cout<<"Underflow\n"<<endl;
        return;
    }

    if(front==end){
        front=-1;
        end=-1;

    }
    else if(end==0)
        end=size-1;

    else
        end=end-1;
}

int getFront(){

    if(isEmpty()){
        cout<<"Underflow\n"<<endl;
        return -1;
    }

    return arr[front];

}

int getend(){
    if(isEmpty() || end<0){
        cout<<"Underflow\n"<<endl;
        return -1;
    }
    return arr[end];

}

};

int main(){
    Deque dq(5);
    dq.insertend(5);
    dq.insertend(10);

    dq.getend();
    dq.insertfront(15);


}