// #include<iostream>
// using namespace std;
// // preorder
// struct Node{
//     int data;
//     struct Node *left;
//     struct Node *right;

//     Node(int v){
//         data=v;
//         left=right=NULL;
//     }
// };

// void printpreorder(struct Node* node){
//     if(node==NULL){
//         return;

//     }
//     cout<<node->data<<" ";
//     printpreorder(node->left);
//     printpreorder(node->right);
// }

// int main(){
//     struct Node*root = new Node(11);
//     root->left=new Node(13);
//     root->left->left= new Node(19);
//     root->left->right= new Node(26);
//     root->left->right->left=new Node(21);
//     root->left->right->right=new Node(22);
//     root->right= new Node(15);
//     root->right->left= new Node(17);
//     root->right->right= new Node(23);
//     root->right->right->right= new Node(25);

//     printpreorder(root);



//     return 0;
// }


// // inorder
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


    
    
// void inorder(struct Node* node){
//     if(node==NULL){
//         return;
//     }
//     inorder(node->left);
//     cout<<node->data<<" ";
//     inorder(node->right);

// }
// int main(){
//     struct Node*root = new Node(11);
//     root->left=new Node(13);
//     root->left->left= new Node(19);
//     root->left->right= new Node(26);
//     root->left->right->left=new Node(21);
//     root->left->right->right=new Node(22);
//     root->right= new Node(15);
//     root->right->left= new Node(17);
//     root->right->right= new Node(23);
//     root->right->right->right= new Node(25);

//     inorder(root);



//     return 0;
// }

// // postorder

 
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


    
    
void postorder(struct Node* node){
    if(node==NULL){
        return;
    }
    postorder(node->left);
    postorder(node->right);
    cout<<node->data<<" ";

}

int main(){
    struct Node*root = new Node(11);
    root->left=new Node(13);
    root->left->left= new Node(19);
    root->left->right= new Node(26);
    root->left->right->left=new Node(21);
    root->left->right->right=new Node(22);
    root->right= new Node(15);
    root->right->left= new Node(17);
    root->right->right= new Node(23);
    root->right->right->right= new Node(25);

    postorder(root);



    return 0;
}