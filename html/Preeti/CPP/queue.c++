#include <iostream>

using namespace std;

const int n=100;

class queue{
    int* arr;
    int front;
    int back;

    public:
        queue(){
            arr = new int[n];
            front =-1;
            back=-1;
        }

void enqueue(int x){
    if(back==n-1){
        cout<<"Queue Overflow"<<endl;
        return;
    }

    back++;
    arr[back]=x;

    if(front==-1){
        front++;
    }

}

void dequeue(){
    if(front==-1 || front>back){
        cout<<"No Elements in Queue";
        return;
    }
    front++;
}


int peek(){
    if(front==-1 || front>back){
        cout<<"No Elements in Queue";
        return -1;
    }

    return arr[front];
}


bool empty(){
    if(front==-1 || front>back){
        return true;
    }

    return false;
}

};


int main(){
    queue q;
    q.enqueue(1);
    q.enqueue(2);
    q.enqueue(3);
    q.enqueue(4);
    cout<<q.peek()<<endl;
    q.dequeue();
    cout<<q.peek() <<endl;




    return 0;
}