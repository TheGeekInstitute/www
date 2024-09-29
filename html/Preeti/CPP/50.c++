#include <iostream>
using namespace std;

int main(){
//    string a="school";
    // int arr[5]={122,34,55,21,45};


    // cout<<sizeof(arr)/sizeof(arr[0])<<endl;
    // int a=10;
    // int b=20;
    // int sum=a+b;
    // int sub=b-a;
    // string p="Preeti ";
    // string s="Singh";
    // string add=p+s;
    // cout<<add<<endl;
    // cout<<sub<<endl;
    // // cout<<sum<<endl;
    // int a=10;
    // int b=20;
    // int temp = a;
    // a=b;
    // b= temp;
    // cout<<"a="<<a<<" "<<"b="<<b<<endl;
    

    // int s;
    // cout<<"Enter a side of cube = "<<endl;
    // cin>>s;
    // int volume = s**3;
    // cout<<"Volume of cube "<<volume<<endl;


    // int side=10;
    // int vol=1;
    // for(int i=0; i<=3; i++){
    //     vol*=side;

    // }
    // cout<< "volume of cube "<<vol<<endl;


    // int num=5;
    // int pow=1;
    // for(int i=0; i<=3; i++){
    //     pow*=num;

    // }
    // cout<<"Power of num is : "<<pow<<endl;

    // int f;
    // cout<<"Enter a  Fahrenheit : "<<endl;
    // cin>>f;
    // int celsius =  (f - 32) * 5/9;
    // cout<<"Convert Fahrenheit to Celsius: "<<celsius<<endl;

    int p;
    cout<<"Enter a principal amount : "<<endl;
    cin>>p;
    int r;
    cout<<" Enter a rate in percent : "<<endl;
    cin>>r;
    int t;
    cout<<" Enter a time in year: "<<endl;
    cin>>t;
    int si=(p*r*t)/100;
    cout<<"Simple interest: "<< si<<endl;



    int FirstrepeatingElement(int arr[], int n){
        for(int i=0; i<n; i++){
            for(int j=i+1; j<n; j++){

                if(arr[i]==arr[j]){
                    return i;
                }
            }
        }
        return -1;
    }



    int main(){

        int arr[7]={55,29,44,71,23,78,67};
        int n=7;

    }





    
    
    
    // cout<<"char size "<< sizeof(char)<<endl;
    // cout<<"int size"<<sizeof(int)<<endl;
    // cout<<"int float"<<sizeof(float)<<endl;







    return 0;




}