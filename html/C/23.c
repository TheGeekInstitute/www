#include<stdio.h>
int main (){
    int num[]={1,2,3,4,5,6,7,8,9,10};
    int size = sizeof(num)/sizeof(num[0]);
for(int i=0 ; i< size; i++){
    printf("%d\n",num[i]);
}

return 0;
    
}