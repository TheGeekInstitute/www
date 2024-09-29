#include <stdio.h>

int main(){
    int x = 2;
    int y =  3;
    int z = 5;
    int e = 6;

    if(x>y>z>e){
        printf("%d is greatest number\n",x);
        }
        else if( y>x>z>e){
            printf ("%d is a greatest number\n",y);
                }
        else if(z>x>y>e){
            printf("%d is the graetest number\n",z);

        }
    else{
        printf("%d is the greatest number\n,",e);
    }

    return 0;
}