#include<stdio.h>
int main()
{
    int month;
    printf("enter month number: ");
    scanf("%d",&month);
    switch(month)
    { case 1:
        printf("january");
        break;
        case 2:
        printf("febuary");
        break;
        case 3:
        printf("march");
        break;
        case 4:
        printf("april");
        break;
        case 5:
        printf("may");
        break;
        case 6:
        printf("june");
        break;
        case 7:
        printf("july");
        break;
        case 8:
        printf("august");
        break;
        case 9:
        printf("sseptember");
        break;
        case 10:
        printf("october");
        break;
        case 11:
        printf("noveember");
        break;
        case 12:
        printf("december");
        break;
        default:
            printf("invalid month number");
            break;
    }
return 0;
}
