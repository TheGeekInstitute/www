#include<stdio.h>

int main(){
    int num[]={101,102,103};
    int len=sizeof(num)/sizeof(num[0]);

    // printf("%d\n",num[0]+num[1]);
 
    for(int i=0 ; i<len ; i++){
    printf("%d\n",num[i]);
    }

// printf("%ld",sizeof(num)/sizeof(num[0]));

    return 0;
}
