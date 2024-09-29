#include<stdio.h>
#include<string.h>

int main(){

int num;
printf("Enter a Number to Find Cube :");
scanf("%d",&num);


int cube=1;

for(int i=1; i<=3 ;i++){
    cube *=num; // cube =cube*num
}

printf("Cube is : %d\n",cube);






    return 0;
}