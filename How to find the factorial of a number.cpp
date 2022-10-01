#include<stdio.h>
int main()
{
	int i, f=1, num;
	printf("Enter a number");
	scanf("%d", &num);
	for(i=1; i<=num; i++){
		f=f*1;
	}
	printf("factorial of %d is:%d", num, f);
	
	return 0;
}
