//Way number 1

	//#include <stdio.h>
	//int main() {
	//  int n, i;
	//  printf("Enter an integer: ");
	//  scanf("%d", &n);
	//  for (i = 1; i <= 10; ++i) {
	//    printf("%d * %d = %d \n", n, i, n * i);
	//  }
	//  return 0;
	//}


//Way number 2
#include<stdio.h>
int main()
{
	int num;
	printf("Enter the number you want the multiplication table of:\n");
	scanf("%d", &num);
	
	printf("Multiplication table of %d is as follows: \n", num);
	
	printf("%d x 1 = %d\n", num, num*1);
	printf("%d x 2 = %d\n", num, num*2);
	printf("%d x 3 = %d\n", num, num*3);
	printf("%d x 4 = %d\n", num, num*4);
	printf("%d x 5 = %d\n", num, num*5);
	printf("%d x 6 = %d\n", num, num*6);
	printf("%d x 7= %d\n",  num, num*7);
	printf("%d x 8 = %d\n", num, num*8);
	printf("%d x 9 = %d\n", num, num*9);
	printf("%d x 10 = %d\n", num, num*10);
	
	return 0;
}
