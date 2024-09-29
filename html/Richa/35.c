// #include<stdio.h>
int var(int r);


int main(){
int result = var(12);
printf("%d\n",result);


    return 0;
}

int var(int r){
    if( r==0){
        return 1;
    }
    else{

    return r +var(r-2);
    }
//
