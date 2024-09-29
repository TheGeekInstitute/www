#include<stdio.h>
int days(int num){

char * days[] = { "Monday", "Tuesday", "Wednesday", "Thursday", "Friday" };


    switch(num){

        case 1 : printf("%s",days[0]);
            break;
        case 2: printf("%s",days[1]);
            break;
        case 3 : printf("%s",days[2]);
        default : return 0;
    }
}

int main(){


    days(1);
    return 0;
}