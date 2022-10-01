#include<stdio.h>
int main(){
	int n;                        //Decalring the variable
	printf("Print the value of n to print the star pattern\n");
	scanf("%d", &n);
	
	for(int i = 0; i < n; i++)
	{
		for(int j = 0; j<i+1 ; j++)
		{
			printf("*");
		}
		printf("\n");
	}
	return 0;
}

//temp means temporary variable me store krvaana


//Doing this program again

//#include<stdio.h>
//int main()
//{
//	int n;
//	
//	printf("Enter the number you want the pattern of n \n");
//	scanf("%d", &n);
//
//for(int i = 0; i<n; i++)
//{
//	for(int j = 0; j<i+1; j++)
//	{
//		printf("S");
//		
//	}
//	printf("\n");
//}
//return 0;
//}
