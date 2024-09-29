#include<stdio.h>



void write(){
    char firstname[255],lastname[255];
    printf("Enter First Name : ");
    scanf("%s",firstname);
    printf("Enter Last Name : ");
    scanf("%s",lastname);
   
    FILE *fptr;
    fptr = fopen("logs.txt","a");
    fprintf(fptr,"First Name :");
    fprintf(fptr,firstname);
    fprintf(fptr,"\nLast Name :");
    fprintf(fptr,lastname);
    fprintf(fptr,"\n\n");
    fclose(fptr);
    return ;
}


void read(){
    char xyz[255];
    FILE *fptr;
    fptr = fopen("logs.txt","r");
    while(fgets(xyz,255,fptr)){
        printf("%s\n",xyz);
    }
    fclose(fptr);
return ;
}


int main(){
    start:
    int choice;
    printf("1. Write\n2. Read\nOption : ");
    scanf("%d",&choice);
    printf("\n");

    switch(choice){
        case 1 : write();
            break;
        case 2 : read();
            break;
        default : printf("Invalid Choice\n\n");
        goto start;
    }


    return 0;
}