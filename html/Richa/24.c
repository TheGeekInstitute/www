#include <stdio.h>

int main(){

char firstName[30];

// Ask the user to input some text
printf("Enter your first name: ");

// Get and save the text
scanf("%s", firstName);

// Output the text
printf("Hello %s \n", firstName);
    return 0;
}