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
    node* n = new node(val);
    n-> next=head;
    head=n;

}

void insertAtTail(node* &head, int val){
        node* n=new node(val);
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
void display(node* &head){
    node* temp=head;
    while(temp!=NULL){
        cout<<temp->data<<"->";
        temp=temp->next;

    }
    cout<<"NULL"<<endl;
}

bool search(node* &head, int key){
    node* temp=head;
    while(temp!=NULL){
        if(temp->data==key){
            return true;

        }
        temp=temp->next;

    }
    return false;

}
 int main(){
    node* head = NULL;
    int count=0;
    int nodeVal;

    cout<<"How many nodes do you want? :"<<endl;
    cin>>count;

    for(int i=1; i<count; i++){
        cout<<"Enter value of node : "<<i<<endl;
        cin>>nodeVal;
        insertAtTail(head,nodeVal);
        



    }
bool search(node* &head, int key){
    node* temp=head;
    while(temp!=NULL){
        if(temp->data==key){
            return true;

        }
        temp=temp->next;

    }
    return false;

        cout<<search(head,10);
}
 
    


    // insertAtTail(head,10);
    // insertAtTail(head,20);
    // insertAtTail(head,30);
    // display(head);

    // cout<<search(head,10);

    return 0;

 }