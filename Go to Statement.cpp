//#include<stdio.h>
//int main()
//{
/*
	label:
		printf("Aashutosh will become the best coder bhagwan jee ke aashirvaad se\n");
		goto end;
//	printf("Hello world");
	goto label;
	end:
		printf("We have come to an end");		
*/
#include<stdio.h>
int main()
{
	for(int i = 0; i < 8; i++)
	{
		printf("%d\n", i);
		int num;
		for(int j = 0; j < 8; j++)
		{
			printf("Enter the number. Press 0 to exit\n");
			scanf("%d", &num);
			if(num==0){
				goto end;
			}
		}
	}
end: 
	
	
	return 0;
}



