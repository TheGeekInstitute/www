#include<stdio.h>
int main(){
    FILE *dog;
    dog = fopen("bread.txt","a");
    fprintf(dog,"PITBULL\n");

    char abc[50];
    while(fgets(abc,50,dog)){
    printf("%s",dog);
    fclose(dog);
    }
}