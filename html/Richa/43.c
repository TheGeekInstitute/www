#include<stdio.h>

int main(){

FILE *fg;

fg = fopen("abhi.txt","a");
char b[200]= "Abhi is a good boy";

char a[200] = "abhi is nice person";
char c[200]= "Someone you can trust with your life who has seen the best and worst of you and will be there whenever you need someone to talk to. ";

fprintf(fg,"%s\n",b);

fprintf(fg,"%s\n",a);

fprintf(fg,"%s\n",c);


    return 0;
}