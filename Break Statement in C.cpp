/*#include<stdio.h>
int main()
{
	printf("Hello World\n");
	int i, age;   //Declaring the variable
	for(i=0; i<10; i++)	{
	printf("%d\nEnter your age\n", i);
	scanf("%d", &age);  //Scan f takes the integer of the operator 
	if (age>10)    //Maximum age is 10 which means we cannot put age more than 10 otherwise loop will break.
	{
	break;   //This means it will stop the loop
	}
	
	}
	return 0;
}*/


/*#include<stdio.h>
int main()
{
	printf("Hello World\n");
	int i, age;   //Declaring the variable
	for(i=0; i<10; i++)	{
	printf("%d\nEnter your age\n", i);
	scanf("%d", &age);  //Scan f takes the integer of the operator 
	if (age>10)    //Maximum age is 10 which means we cannot put age more than 10 otherwise loop will break.
	
	{
		continue;
	}
	printf("We have all the things to become a programmer and no one can stop us"); 
	//Agar age 10 se zyaada hai then this above line will not be executed 
	//And if age 10 se kam hai then line will be printed in the console
	}
 
	return 0;
}*/

//Sample program 
#include<stdio.h>
int main()
{
	int age, i;
	for(i=0; i<10; i++){			//You can modify this and try 
		printf("Enter your age\n");
		scanf("%d", &age);
		if(age<10){
			break;
		}
		printf("Hence Proved\n");
	}
	return 0;
}

/*
#include <stdio.h>
int main () {
   int a = 10; // Local variable declaration:
   do { // do loop execution
      printf("value of a: %d\n", a);
      a = a + 1;
   } while( a < 20 );
   return 0;
}
*/
