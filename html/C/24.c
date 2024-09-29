#include<stdio.h>
#include <string.h>

int main(){
    char name[]="Vinit is a Boy.Vinit is Kind Person.Vinit is Blind Guy.";

    // printf("%s",name);
    // printf("%c" ,name[4]);

    // for(int i=0 ; i<sizeof(name);i++){
    //     printf("%c",name[i]);
    // }

    // printf("%d",strlen(name));
    int num=sizeof(name)/sizeof(name[0]);
    // printf("%d",num);

for(int i=0; i<num ; i++){
 
    printf("%c",name[i]);

}

    return 0;
}