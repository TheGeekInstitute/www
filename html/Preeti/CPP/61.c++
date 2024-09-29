// #include<iostream>

// using namespace std;

// struct Node{
//     int val;
//     Node* next;

// };

// class mystack{
//     Node* head;
//     int stacksize;
//     public:

//     mystack(){
//         head=NULL;
//         stacksize=0;
//     }

//     void push(int g){
//         Node* temp=new Node();
//         temp->val=g;
//         temp->next=head;
//         head=temp;

//         cout<<"Element "<<g<<" pushed into the stack!"<<endl;
//         stacksize++;
//     }
//     void pop(){
//         if(head==NULL){
//             cout<<"Stack is Empty! Cannot POP an Element!"<<endl;
//             return;
//         }
//         Node* temp=head;
//         head=temp->next;
//         temp->next=NULL;
//         delete temp;
//         cout<<"Element Popped!"<<endl;
//         stacksize--;

//     }

//     int top(){
//         if(head==NULL){
//             cout<<"NO Top element! Stack is empty!"<<endl;
//             return -1;

//         }
//         cout<<"Top Element is:"<<head->val<<endl;
//         return head->val;
//     }

//     int size(){
//         cout<<"Size of stack is:"<<stacksize<<endl;
//         return stacksize;
//     }
//     int empty(){
//         if(head==NULL){
//         }
//         cout<<"Stack is NOT EMPTY!"<<endl;
//         return 0;
//     }
// };

// int main(){
//     mystack s1;

//     // s1.push(7);
//     // s1.push(8);
//     // s1.push(9);
//     // s1.push(10);

//     // s1.pop();
//     // s1.empty();
//     // s1.pop();
    
//     int count = 0;
//     int val;

//     cout<<"How many elements do you want? : "<<endl;
//     cin>>count;
//     for(int i=1; i<count; i++){
//         cout<<"Enter value of stack "<<i<<":"<<endl;
//         cin>>val;
//     }


//     return 0;
// }




#include<iostream>
using namespace std;

const int n=10;


class queue{
    int* arr;
    int* front;
    int* back;


    public:
    queue(){
        arr = new int[n];
        front =-1;
        back=-1;

    }

void enqueue(int x){
    if(back==n-1){
        cout<<"Queue Overflow";
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
            return;
        }
}
}