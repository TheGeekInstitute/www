// #include<iostream>
// using namespace std;

// inorder
// struct Node{
//     int data;
//     struct Node *left;
//     struct Node *right;

//     Node(int v){
//         data=v;
//         left=right=NULL;
//     }

// };

// void inorder(struct Node* node){
//     if(node==NULL){
//         return;
//     }
//     inorder(node->left);
//     cout<<node->data<<" ";
//     inorder(node->right);

// }


// int main(){

//     struct Node*root = new Node(1);
//     root->left=new Node(2);
//     root->left->left=new Node(4);
//     root->left->right=new Node(5);
//     root->right=new Node(3);
//     root->right->left = new Node(6);
//     root->right->right=new Node(7);


//     inorder(root);



//     return 0;

// }

// // // preorder

#include<iostream>
using namespace std;


struct Node{
    int data;
    struct Node *left;
    struct Node *right;

    Node(int v){
        data=v;
        left=right=NULL;
    }

};

void printpreorder(struct Node* node){
    if(node==NULL){
        return;
    }
    cout<<node->data<<" ";
    printpreorder(node->left);
    
    printpreorder(node->right);

}


int main(){

    struct Node*root = new Node(1);
    root->left=new Node(2);
    root->left->left=new Node(4);
    root->left->right=new Node(5);
    root->right=new Node(3);
    root->right->left = new Node(6);
    root->right->right=new Node(7);


    printpreorder(root);



    return 0;

}

// // postorder


// #include<iostream>
// using namespace std;


// struct Node{
//     int data;
//     struct Node *left;
//     struct Node *right;

//     Node(int v){
//         data=v;
//         left=right=NULL;
//     }

// };

// void postorder(struct Node* node){
//     if(node==NULL){
//         return;
//     }
//     postorder(node->left);
//     cout<<node->data<<" ";
//     postorder(node->right);

// }


// int main(){

//     struct Node*root = new Node(1);
//     root->left=new Node(2);
//     root->left->left=new Node(4);
//     root->left->right=new Node(5);
//     root->right=new Node(3);
//     root->right->left = new Node(6);
//     root->right->right=new Node(7);


//     postorder(root);



//     return 0;

// }






















