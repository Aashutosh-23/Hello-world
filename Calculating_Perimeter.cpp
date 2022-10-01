#include<iostream>
using namespace std;
int main()
{
 	int radius;
 	int length;
 	int breadth;
 	float pi = 3.14;
 	
 	//Perimeter/Circumference of circle
 	
 	cout<<"PERIMETER OF CIRCLE"<<endl;
 	
 	cout<<"Enter the value of radius = ";
 	cin>>radius;
 	cout<<"Perimeter and circumference of circle = "<<2*pi*radius<<endl<<endl;	
	
	//Perimeter of rectangle
	
	cout<<"PERIMETER OF RECTANGLE"<<endl;
	
	cout<<"Enter the value of length = ";
	cin>>length;
	cout<<"Enter the value of breadth = ";
	cin>>breadth;
	cout<<"Perimeter of rectangle = "<<2*(length + breadth);
	

	return 0;
}

