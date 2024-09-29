#include<stdio.h>

int min(int a,int b,int c){
int min;
if(a<b && a<c){
    min=a;
}

    else if(b<c && b<a){
        min=b;
    }
    else if(c<a && c<b){
        min=c;
    }
else {
    min=0;
}
    return min;
}

    int main(){
        
        int r= min(23,56,88);
        printf("%d\n",r);

        return 0;


    }