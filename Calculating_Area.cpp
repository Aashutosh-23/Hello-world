#include<iostream>
using namespace std;
int main()
{
 	int length, breadth;
 	float pi = 3.14;
 	int radius;
 	int side;
 	
 	cout<<"AREA OF RECTANGLE"<<endl<<endl;
 	cout<<"Enter the value of length "<<endl;
 	cin>>length;
 	cout<<"Enter the value of breadth "<<endl;
 	cin>>breadth;
 	cout<<"Area of rectangle = "<<length*breadth<<endl<<endl;
 	
 	cout<<"AREA OF CIRCLE"<<endl;
 	
 	cout<<"Enter the radius of circle "<<endl;
 	cin>>radius;
 	cout<<"Area of circle = "<<pi*radius*radius<<endl<<endl;
 	
 	cout<<"AREA OF SQUARE"<<endl;

	cout<<"Enter the side of the square "<<endl;
	cin>>side;
	cout<<"Area of square = "<<side*side;



	return 0;
}

