#include<stdio.h>

int main (){
    char name[]="Mahesh";
    // name[0]='G';
    // printf("%s",name);
    int num=sizeof(name)/sizeof(name[0]);

    for( int i=0;i<num;i++){

    printf("%c",name[i]);
    }
}