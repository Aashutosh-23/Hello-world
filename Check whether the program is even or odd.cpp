/*
#include <stdio.h>
int main() {
    int num;		//Declaring a variable
    printf("Enter an integer: \n");
    scanf("%d", &num);

    // true if num is perfectly divisible by 2
    if(num % 2 == 0)
        printf("%d is even.", num);
    else
        printf("%d is odd.", num);
    
    return 0;
}*/
//Learn these programs
// Variable is a name given to memory location 

#include<stdio.h>	
int main()
{
	int number;
	printf("Enter the integer\n");
	scanf("%d", &number);
	
	if(number % 2 == 0)
		printf("%d is even", number);
		else
		printf("%d is odd", number);
		
		return 0;
}

