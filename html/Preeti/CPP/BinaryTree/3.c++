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


    
    
// void postOrder(struct Node* node){
//     if(node==NULL){
//         return;
//     }

//     postOrder(node->left);
//     postOrder(node->right);
//     cout << node->data << " ";
// }




// int main(){

//     struct Node* root = new Node(40);
//     root->left= new Node(4);
//     root->left->right = new Node(34);
//     root->left->right->left=new Node(14);
//     root->left->right->left->left=new Node(13);
//     root->left->right->left->right=new Node(15);
//     root->right=new Node(45);
//     root->right->right=new Node(55);
//     root->right->right->left=new Node(48);
//     root->right->right->left=new Node(47);
//     root->right->right->right=new Node(49);


//     postOrder(root);


//     return 0;

// }


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

// void printpreorder(struct Node* node){
//     if(node==NULL){
//         return;

//     }

//     cout<<node->data<<" ";
//     printpreorder(node->left);
//     printpreorder(node->right);

// }

// int main(){

//     struct Node* root = new Node(10);
//     root->left = new Node(5);
//     root->left->left = new Node(3);
//     root->left->right = new Node(9);
//     root->right = new Node(20);
//     root->right->left = new Node(15);
//     root->right->right = new Node(25);

//     printpreorder(root);


//     return 0;
// }

// Inorder
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

//     struct Node* root = new Node(10);
//     root->left = new Node(5);
//     root->left->left = new Node(3);
//     root->left->right = new Node(9);
//     root->right = new Node(20);
//     root->right->left = new Node(15);
//     root->right->right = new Node(25);

//     inorder(root);


//     return 0;
// }
//Postorder
// #include <iostream>
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
//     postorder(node->right);
//     cout<<node->data<<" ";

// }
// int main(){

//     struct Node* root = new Node(10);
//     root->left = new Node(5);
//     root->left->left = new Node(3);
//     root->left->right = new Node(9);
//     root->right = new Node(20);
//     root->right->left = new Node(15);
//     root->right->right = new Node(25);

//     postorder(root);


//     return 0;
// }



#include<iostream>

using namespace std;

struct Node{
    int data;
    struct Node *left;
    struct Node *right;

    Node(int v){
        data =v;
        left=right=NULL;
    }
};


void postOrder(struct Node* node){
    if(node==NULL){
        return;
    }

    postOrder(node->left);
    postOrder(node->right);
    cout << node->data << " ";
}




int main(){

struct Node* root = new Node(1);
root->left = new Node(2);
root->left->left = new Node(3);
root->left->right = new Node(4);
root->right = new Node(5);
root->right->left = new Node(6);
root->right->right =  new Node(7);



postOrder(root);


    return 0;
}