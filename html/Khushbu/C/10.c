#include<stdio.h>
#include<string.h>
int main(){
    char name[]="ABCD XYZfsdfsdfsd";
    char one[]="One";
    // printf("%c\n",name[1]);

    // printf("%d\n",sizeof(name));

    // for(int i =0 ; i< sizeof(name) ; i++){
    //     printf("%c",name[i]);
    // }
    // printf("%d\n",strlen(name));
strcat(name,one);
printf("%s",name);

    return 0;
}