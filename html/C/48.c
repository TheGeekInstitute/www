#nclude<stdio.h>


int main(){
    int i=0;
    FILE *abc;
    FILE *work;
    work = fopen("home.txt","a");
    fprintf(work,"\n");
    fclose(work);



    abc = fopen("home.txt","r");
    char word[100];
    while(fgets(word,100,abc)){
        i++;

    }
    printf("This is a line :%d\n",i);
    fprintf()

    fclose(abc);
