#include<iostream>
using namespace std;
int main()
{
    int n=9;
    double sum=0;
 int arr[9];
cout<< "enter the value of elements:";
for(int i=0;i<n; i++)
{
 cin>>arr[i];
}

for(int i=0;i<n; i++)
{
 cout<<arr[i]<<" ";
}
for(int i=0;i<n; i++)
{
sum=sum+arr[i];
}


cout<<"\n"<<sum/9;




    return 0;
}