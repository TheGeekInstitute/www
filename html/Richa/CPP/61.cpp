 #include<iostream>
 using namespace std;
 
 
 int main(){
 int n;
 float sum=0;
 float avg=0;
 cout<<"How many prices you want to take:";
cin>>n;
 float price[n];
// cout<<"enter the prices:";

 for(int i=0;i<n;i++){
    cout<<"Enter Price "<<i+1<<": ";
    cin>>price[i];
 }


for(int j=0; j<n ; j++){
   sum+=price[j];
}

avg=sum/n;

cout<<"Average : "<<avg<<"\n";

for(int k=0; k<n ; k++){
   if(price[k]>avg){
      cout<<price[k]<<" ";
   }
}  return 0;
 }