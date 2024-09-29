#include <iostream>

using namespace std;

const int n=100;

class queue{
    int* arr;
    int  front;
    int back;


    public:
    queue(){
        arr = new int[n];
        front=-1;
        back=-1;
    }


void enqueue(int x){
    if(back==n-1){
        cout<<"Queue OverFlow";
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
        cout<<"No Elements In Queue";
        return;
    }
    front++;
}


int peek(){
       if(front==-1 || front>back){
        cout<<"No Elements In Queue";
        return -1;
    }
    return arr[front];
}

bool empty(){
       if(front==-1 || front>back){
         return true;
        }
        else{
            return false;

        }

}



};



int  main(){

    queue q;
    cout<<q.empty()<<endl;
    q.enqueue(10);
    q.enqueue(20);
    q.enqueue(30);
    q.enqueue(40);
    cout<<q.peek()<<endl;
    q.dequeue();
    q.dequeue();
    cout<<q.peek()<<endl;




return 0;

}