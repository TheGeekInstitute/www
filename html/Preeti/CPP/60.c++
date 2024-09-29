// #include<iostream>
// using namespace std;

// const int n=50;

// class stack{
//     int* arr;
//     int top;


//     public:
//     stack(){
//         arr = new int[n];
//         top = -1;

//     }

// void push(int x){
//     if(top==n-1){
//         cout<<"Stack Overflow"<<endl;
//         return;
//     }
//     top++;
//     arr[top]=x;

// }   
// void pop(){
//     if(top==-1){
//         cout<<"Stack is Empty"<<endl;
//         return;

//     }
//     top--;

// } 
// int Top(){
//     if(top==-1){
//         cout<<"No Element";
//         return -1;
//     }
//     return arr[top];
// }

// bool empty(){
//     return top==-1;
// }
// bool full(){
//     return top==n-1;
// }
// };



// int main(){

//     int count=0;
//     int val;

//     cout<<"How many element do you want? :"<<endl;
//     cin>>count;

//     for(int i=1; i<count; i++){
//         cout<<"Enter value in stack"<<i<<endl;
//         cin>>val;
        
//     }

//     // stack st;
//     // st.push(1);
//     // st.push(2);
//     // st.push(3);
//     // st.push(4);
//     // cout<<st.Top()<<endl;
//     // st.pop();
//     // st.pop();
//     // st.pop();
//     // cout<<st.Top()<<endl;
//     // cout<<st.full()<<endl;
//     return 0;
// }



#include<iostream>
using namespace std;

void CountSort(int arr[], int n){
    int output[10];
    int count[10];
    int max=arr[0];

    for(int i=1; i<n; i++){
        if(arr[i]>max){
            max=arr[i];

        }
    }

    for(int i=0; i<=max; ++i){
        count[i]=0;
    }

    for(int i=0; i<n; i++){
        count[arr[i]]++;
    }

    for(int i=1; i<=max; i++){
        count[i] += count[i-1];
    }

    for(int i=n-1; i>=0; i--){
        output[count[arr[i]]-1]= arr[i];
        count[arr[i]]--;
    }

    for(int i=0; i<n; i++){
        arr[i]=output[i];
    }

}