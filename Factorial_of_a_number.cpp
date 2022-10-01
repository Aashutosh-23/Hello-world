#include<iostream>
using namespace std;
int main()
{
	int x, fact;
	
	cout<<"Enter the number you want to print the factorial of: "<<endl;
	cin>>x;
	fact = x;
	
	
	while(x>1)
	{
	 	x--;
		 fact = fact * x;	  	
	}
	cout<<"Factorial is "<<fact<<endl;	
	return 0;
}

