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


void     printPreOrder(struct Node* node){
    if(node==NULL){
        return;
    }

    cout<< node->data <<" ";

    printPreOrder(node->left);

    printPreOrder(node->right);
}




int main(){

struct Node* root = new Node(1);
root->left = new Node(2);
root->left->left = new Node(4);
root->left->right = new Node(5);
root->right = new Node(3);
root->right->left = new Node(6);
root->right->right =  new Node(7);



printPreOrder(root);


    return 0;
}