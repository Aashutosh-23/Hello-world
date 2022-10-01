#include<iostream>
#include<math.h>
using namespace std;
int main()
{
	float pi = 3.14, radius, length, breadth, side;
	int ch;
		
	cout<<"1. AREA OF RECTANGLE"<<endl;
	cout<<"2. AREA OF CIRCLE"<<endl;
	cout<<"3. AREA OF SQUARE"<<endl<<endl;
	
	cout<<"Enter your choice"<<endl;
	
	cin>>ch;
	
	switch(ch){
		
	
          case 1:
          	cout<<"Enter the value of length "<<endl;
          	cin>>length;
          	cout<<"Enter the value of breadth "<<endl;
          	cin>>breadth;
          	cout<<"Area of rectangle = "<<length*breadth;
			break;

          	
          	
		  case 2:
          	cout<<"Enter the value of radius "<<endl;
          	cin>>radius;
          	cout<<"Area of circle = "<<pi*radius*radius<<endl;
			break;
			  
			  
          case 3:
          	cout<<"Enter the value of side of square "<<endl;
          	cin>>side;
          	cout<<"Area of square = "<<side*side;	
			break;
          	
          }
          	return 0;
	
	
}
