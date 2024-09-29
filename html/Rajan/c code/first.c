#include <stdio.h>
 struct student{
     char name[10];
     int rollnumber;
     char course[3];
 }s1,s2;

int main() {
    printf("enter a name =");
    scanf("%s",&s1.name);
    printf("enter a rollnumber =");
    scanf("%d",&s1.rollnumber);
    printf("enter a course =");
    scanf("%s",&s1.course);

    printf("enter a name =");
    scanf("%s",&s2.name);
    printf("enter a rollnumber =");
    scanf("%d",&s2.rollnumber);
    printf("enter a course =");
    scanf("%s",&s2.course);

    


    printf("%s \n",s1.name);
    printf("%d \n",s1.rollnumber);
    printf("%s \n",s1.course);

    
    printf("%s \n",s2.name);
    printf("%d \n",s2.rollnumber);
    printf("%s \n",s2.course);
    
    return 0;
}