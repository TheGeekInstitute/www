#include <stdio.h>
int main(){
    int i, num, even_sum = 0, odd_sum = 0;
    
    // Asking for Input
    printf("Enter the Maximum Value: ");
    scanf("%d", &num);
    
    for (i = 1; i <= num; i++){
        if (i % 2 == 0){
            even_sum = even_sum + i;
        }
        else{
            odd_sum = odd_sum + i;
        }
    }
    printf("The Sum of all Even Numbers up to %d is %d.\n", num, even_sum);
    printf("The Sum of all Odd Numbers up to %d is %d.", num, odd_sum);
    return 0;
}