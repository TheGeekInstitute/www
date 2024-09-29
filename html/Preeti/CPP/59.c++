// // // #include<iostream>
// // // using namespace std;
// // // // Circulary linked list
// // // class node{
// // //     public:
// // //     int data;
// // //     node* next;

// // //     node(int val){
// // //         data=val;
// // //         next=NULL;

// // //     }

// // // };

// // // void insertAtHead(node* &head, int val){
// // //     node* n=new node(val);
// // //     n->next = head;
// // //     head=n;

// // // }
// // // void insertAtTail(node* &head, int val){
// // //         node* n=new node(val);
// // //     if(head==NULL){
// // //         head=n;
// // //         return;

// // //     }    
// // //     node* temp=head;
// // //     while(temp->next!=NULL){
// // //         temp=temp->next;

// // //     }
// // //     temp->next=n;
// // // }
// // // void display(node* head){
// // //     node* temp=head;
// // //     while(temp!=NULL){
// // //         cout<<temp->data<<"->";
// // //         temp=temp->next;

// // //     }
// // //     cout<<"NULL"<<endl;
// // // }

// // // bool search(node* head, int key){
// // //     node* temp=head;
// // //     while(temp!=NULL){
// // //         if(temp->data==key){
// // //             return true;
// // //         }
// // //         temp=temp->next;

// // //     }
// // //     return false;

// // // }

// // // int main(){

// // //     node* head=NULL;
// // //     int count=0;
// // //     int nodeval;

// // //     cout<<"Enter total no. of nodes : "<<endl;
// // //     cin>>count;

// // //     for(int i=1; i<count; i++){
// // //         cout<<"Enter value of node: "<<i<<endl;
// // //         cin>>nodeval;
// // //         insertAtTail(head,nodeval);

        

// // //     }
// // //         cout<<search(head,4);


// // //     return 0;
// // // }




// // #include <iostream>
// // using namespace std;

// // int binary_search(int arr[], int n, int key){
// // int s=0;
// // int e=n;

// // while(s<=e){
// // int mid =  (e+s)/2;
// //     if(arr[mid]==key){
// //         return mid;
// //     }   

// //     else if(arr[mid]>key){
// //         e=mid-1;
// //     }
// //     else{
// //         s=mid+1;
// //     }
// // }


// //     return -1;


// // }


// // int main(){

// // int arr[5] = {1,2,3,4,5};
// // int n=5;

// // int key=2;


// // cout<<binary_search(arr,n,key)<<endl;

// //     return 0;
// // }


// #include<iostream>
// using namespace std;
// class node{
//     public:
//     int data;
//     node* next;

//     node(int val){
//         data=val;
//         next=NULL;
//     }
// };

// void insertAtHead(node* &head, int val){
//     node* n=new node(val);
//     n->next=head;
//     head=n;
// }

// void insertAtTail(node* &head, int val){
//     node* n=new node(val);
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
//         cout<<temp->data<<" ";
//         temp=temp->next;
//     }
//     cout<<"NULL"<<endl;
// }

// void deleteHead(node* &head){
//     node* todelete=head;
//     head=head->next;
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
//     node* todelete=temp->next;
//     temp->next=temp->next ->next;
//     delete todelete;
// }
    


// int main(){
//     node* head=NULL;

//     insertAtTail(head,1);
//     insertAtTail(head,2);
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
    node* todelete=head;
    head=head->next;
    head->prev=NULL;
    delete todelete;
}

void deletion(node* &head, int pos){
    if(pos==1){
        deleteHead(head);
        return;

    }

    node*temp=head;
    int count=1;
    while(temp!=NULL && count!=pos){
        temp=temp->next;
        count++;

    }

    temp->prev->next=temp->next;
        if(temp->next!=NULL){
            temp->next->prev=temp->prev;
        }
    delete temp;

}

int main(){
    node* head=NULL;
    insertAtTail(head,1);
    insertAtTail(head,2);
    insertAtTail(head,3);
    display(head);
}