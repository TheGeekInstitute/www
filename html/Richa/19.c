#include <stdio.h>

int main(){
    int num[]={12,15,18,20,25,45};

    // printf("%d\n",num[1]);
    // printf("%ld", sizeof(num)/sizeof(num[0]));

    int length = sizeof(num)/sizeof(num[0]);

    for(int i=0; i<length ; i++){
        printf("%d\n",num[i]);
    }

    return 0;
}