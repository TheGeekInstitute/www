void main(int param_1,undefined8 *param_2)

{
  int num1;
  size_t len;
  long of;
  char abc;
  int num2;
  int num3;
  undefined8 num4;
  
  num4 = *(undefined8 *)(of + 0x28);
  if (param_1 != 2) {
    printf("Usage : %s <license pass code here [numbers only]>\n",*param_2);
                    /* WARNING: Subroutine does not return */
    exit(0);
  }
  num2 = 0;
  num3 = 0;
  while( true ) {
    len = strlen((char *)param_2[1]);
    if ((int)len <= num3) break;
    abc = *(char *)((long)num3 + param_2[1]);
    num1 = atoi(&abc);
    num2 = num2 + num1;
    num3 = num3 + 1;
  }
  if (num2 == 0x32) {
    puts("Premium access has been activated !");
                    /* WARNING: Subroutine does not return */
    exit(0);
  }
  puts("Wrong license code");
                    /* WARNING: Subroutine does not return */
  exit(0);
}
