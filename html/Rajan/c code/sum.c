// 1+4+7......20
#include<stdio.h>
int main(){
    int a=1;
    int b=4;
    int c=b-a;
    int n=1;
    int sum=0;
    for(int i=1;i<=20;i++){
        printf("%d+",n);
        n=n+c;
        sum+=n;
    }
    printf("=%d",sum);

}