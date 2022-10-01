/*
#include<stdio.h>
int main(){
	int n, num=0, t;
	printf("Enter the number:");
	scanf("%d", &n);
	while(n>0)
	{
		t=n%10;
		num=num+t;
		n=n/10;
	}
	printf("Sum = %d", num);
	
	return 0;
}*/



#include<stdio.h>
int main()
{
	int num = 0, n, t;
	printf("Enter the numbers: ");
	scanf("%d", &n);
	
	while (n>0){
	t = n%10;
	num = num + t;
	n = n/10;		
	}
	
	printf("Sum = %d", num);
	return 0;
	}














