#include<stdio.h>

int main(){
    // char name[]="Dhruv Gupta";
   
    char name[3][10]={"Aman","Ravi","Sumit"};
    int len=sizeof(name)/sizeof(name[0]);

for(int i=0; i<len ; i++){
   printf("%d. %s\n",i,name[i]);

}

// printf("%s\n",name[0]);



    return 0;
}
