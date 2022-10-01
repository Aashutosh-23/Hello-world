#include<stdio.h>
int main()
{
	int num, sum=0;
	printf("Enter the numbers of natural numbers you want the sum of\n");
	scanf("%d", &num);
//	1 + 2 +3 + 4 + 5+.....+n
//for(int i = 1; i <= num; i++)
//{
//	sum += i;
//}


//Runs in constant line
sum = (num*num + num)/2;

printf("Sum of first %d natural numbers is: %d\n", num, sum);
	return 0;
}
