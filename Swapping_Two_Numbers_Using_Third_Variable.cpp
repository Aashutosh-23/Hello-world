//Write a program to swap two numbers using third variable.

#include <stdio.h> 
int main()
{
int var1, var2, temp; 
printf("Enter two integers \n");
scanf("%d%d", &var1, &var2);
printf("Before Swapping\n First variable = %d\nSecond variable = %d \n", var1, var2);
temp = var1;
var1 = var2;
var2 = temp;
printf("After Swapping\n First variable = %d\nSecond variable = %d \n", var1, var2);
return 0;
}
