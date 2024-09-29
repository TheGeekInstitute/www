 #include<stdio.h>

int main(){
    int rows=0;
    printf("How Many Rows, You Want to Print ?: ");
    scanf("%d",&rows);

    if(rows>0){
        for(int i=1 ; i<= rows ; i++){
            for(int j=1; j<=i ; j++){
                printf("%d ",i);
            }
            printf("\n");
        }
    }
    return 0;
}