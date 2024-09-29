#include<stdio.h>

long sum( long r);

int main(){

long answer=sum(6);

printf("%ld\n",answer);
    return 0;
}

long sum(long r){
    if( r==0){
    return 1; 
}

else {
    return r*sum(r-1);
}
}