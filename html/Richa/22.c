#include<stdio.h>
#include<string.h>
int main(){
    char name[]="Amit Singh";
    char name1[] = "Sumit Singh";
        strcat(name,name1);

    // printf("%s\n",name);
    // printf("%ld",strlen(name));
    // printf("%ld",sizeof(name));

    printf("%s",name);



    return 0;
}