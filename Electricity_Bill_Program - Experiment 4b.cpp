#include<iostream>
#include<math.h>
using namespace std;
int main()
{
	float unit;
	float amount;
	float Total_amount;
	
	cout<<"Enter the unit"<<endl;
	cin>>unit;
	
	if(unit<=50)
	{
		amount = unit * 3.50;
		Total_amount = amount + 150;
		cout<<"Amount will be: "<<amount<<endl;
		cout<<"Total amount will be: "<<Total_amount;
	}
	else if(unit>50 && unit<=100)
	{
		amount = 175 + ((unit-50)*4.50);
		Total_amount = amount + 150;
		cout<<"Amount will be: "<<amount<<endl;
		cout<<"Total amount will be: "<<Total_amount;
		
	}
	
	else if(unit>100 && unit<=200)
	{
		amount = 175 + ((unit-50)*5.00);
		Total_amount = amount + 150;
		cout<<"Amount will be: "<<amount<<endl;
		cout<<"Total amount will be: "<<Total_amount;
		
	}



	return 0;
}

