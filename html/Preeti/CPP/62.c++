// // #include<iostream>
// // using namespace std;

// // const int n=50;

// // class queue{
// //     int* arr;
// //     int front;
// //     int back;

// //     public:
// //     queue(){
// //         arr = new int[n];
// //         front = -1;
// //         back = -1;
// //     }

// // void enqueue(int x){
// //     if(back==n-1){
// //         cout<<"queue Overflow";
// //         return;

// //     }

// //     back++;
// //     arr[back]=x;

// //     if(front==-1){
// //         front++;
// //     }
// // }

// // void dequeue(){
// //     if(front==-1 || front>back){
// //         cout<<"No Elements In Queue";
// //         return;

// //     }
// //     front++;

// // }

// // int peek(){
// //     if(front==-1  || front>back){
// //         cout<<"No Elements In Queue";
// //         return -1;

// //     }
// //     return arr[front];
// // }

// // bool empty(){
// //     if(front==-1 || front>back){
// //         return true;
// //     }
// //     else{
// //         return false;

// //     }
// // }
// // };




// // int main(){
// //     queue q;
// //     // cout<<q.empty()<<endl;
// //     q.enqueue(10);
// //     q.enqueue(20);
// //     q.enqueue(30);
// //     q.enqueue(40);

// //     q.dequeue();
// //     cout<<q.empty()<<endl;

// //     cout<<q.peek()<<endl;
// //     q.dequeue();
// //     cout<<q.peek()<<endl;


// // }



// #include<iostream>
// using namespace std;

// class node{
//     public:
//     int data;
//     node* next;


//     node(int val){
//         data=val;
//         next = NULL;

//     }
// };

// void insertAtHead(node* &head, int val){
//     node* n = new node(val);
//     n->next=head;
//     head=n;

// }

// void insertAtTail(node* &head, int val){
//         node* n = new node(val);
    
//     if(head==NULL){
//         head=n;
//         return;
//     }

//     node* temp=head;
//     while(temp->next!=NULL){
//         temp=temp->next;
//     }

//     temp->next=n;

// }


// void display(node* head){
//     node* temp=head;
//     while(temp!=NULL){
//         cout<<temp->data<<"->";
//         temp=temp->next;
//     }

//     cout<<"NULL"<<endl;
// }

// bool search(node* head, int key){
//     node* temp=head;
//     while(temp!=NULL){
//         if(temp->data==key){
//             return true;
//         }
//         temp=temp->next;

//     }
//     return false;

// }


// void deleteHead(node* &head){
//     node* todelete = head;
//     head= head->next;
//     delete todelete;
// }

// void deletion(node* &head, int val){
//     if(head==NULL){
//         return;

//     }

//     if(head->next==NULL){
//         deleteHead(head);
//         return;
//     }

//     node* temp=head;
//     while(temp->next->data!=val){
//         temp=temp->next;
//     }

//     node* todelete = temp->next;
//     temp->next= temp->next->next;
//     delete todelete;
// }


// int main(){
//     node* head=NULL;
//     int count=0;
//     int nodeVal;


//     cout<<"How many node do you want? :";
//     cin>>count;

//     for(int i=1; i<=count; i++){
//         cout<<"Enter value of node"<<i<<":";
//         cin>>nodeVal;
//         insertAtTail(head,nodeVal);
//     }

//     display(head);

//     return 0;
// }


#include<iostream>

using namespace std;
class node{
    public:
    int data;
    node* next;
    node* prev;

    node(int val){
        data=val;
        next=NULL;
        prev=NULL;

    }
};


void insertAtHead(node* &head, int val){
    node* n=new node(val);
    n->next=head;
    if(head!=NULL){
        head->prev=n;
    }
    head=n;

}

void insertAtTail(node* &head, int val){
        if(head==NULL){
            insertAtHead(head,val);
         return;
        }
    node* n=new node(val);
    node* temp=head;
    while(temp->next!=NULL){
        temp=temp->next;
    }    

    temp->next=n;
    n->prev=temp;

}

void display(node* head){
    node* temp=head;
    while(temp!=NULL){
        cout<<temp->data<<"->";
        temp=temp->next;
    }

    cout<<"NULL"<<endl;
}

void deleteHead(node* &head){
    node*todelete=head;
    head=head->next;
    delete todelete;

}

void deletion(node* &head, int pos){
    if(pos==1){
        deleteHead(head);
        return;
    }

    node* temp=head;
    int count=1;
    while(temp!=NULL && count!=pos){
        
    }
}