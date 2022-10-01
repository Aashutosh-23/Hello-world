#include<iostream>
using namespace std;
int main()
{
	int a, b;
	
	cout<<"Numbers before swapping"<<endl;
	cout<<"Enter number 1: "<<endl;
	cin>>a;
	cout<<"Enter number 2: "<<endl;
	cin>>b;
	
	int ch;
	cout<<"Press 1"<<endl;
	cin>>ch;
	
	switch(ch){
		case 1: 
			 a = a*b;
			 b = a/b;
			 a = a/b;
	}
	
	cout<<"Number 1 after swapping "<<a<<endl;
	cout<<"Number 2 after swapping "<<b<<endl;
	
		
	
	return 0;
}
