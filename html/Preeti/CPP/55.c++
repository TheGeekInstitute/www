// #include<iostream>
// using namespace std;


// int main(){

//     int N=40;


//     for(int i=0; i<5; i++){
//         cout<<rand()%N<<" ";

//     }
    
 

//     return 0;
    
// }



#include<iostream>
using namespace std;

class node{
    public:
    int data;
    node* next;

    node(int val){
        data=val;
        next=NULL;

    }
};

void insertAtHead(node* &head, int val){
    node*n =new node(val);
    n->next=head;
    head=n;

}

void insertAtTail(node* &head, int val){
    node* n = new node(val);
    if(head==NULL){
        head=n;
        return;

    }
node* temp=head;
while(temp->next!=NULL){
    temp=temp->next;

}
temp->next=n;

}
void display(node* head){
    node* temp=head;
    while(temp!=NULL){
        cout<<temp->data<<" ";
        temp=temp->next;

    }
    cout<<"NULL"<<endl;
}

int main(){
    node* head=NULL;

    insertAtHead(head,5);
    insertAtHead(head,10);
    insertAtHead(head,15);
    insertAtHead(head,20);
    display(head);




    // insertAtTail(head,10);
    // insertAtTail(head,20);
    // insertAtTail(head,30);
    // insertAtTail(head,40);
    // display(head);
//     // insertAtHead(head,100);
//     int N=50;
//     for(int i=0; i<10; i++){
//         insertAtTail(head,(rand()%N));
        



//     }
//     display(head);



    return 0;
}