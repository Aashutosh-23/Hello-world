//#include<iostream>
//using namespace std;
//int main(){
//	int num1, prod = 1, rem;
//	
//	cout<<"Enter the number: ";
//	cin>>num1;
//	
//	for(int i = 1; i<=num1; i++){
//		rem = num1%10;
//		prod = prod * rem;
//		num1 = num1/10;
//	}
//	cout<<"Answer is: "<<prod;
//}


//#include<iostream>
//using namespace std;
//int main(){
//	int a, b;
//	cout<<"Enter number 1: ";
//	cin>>a;
//	cout<<"Enter number 2: ";
//	cin>>b;
//	
//	for(int i = 0; i<a; i++){
//		b++;		//Dusra number is important
//	}
//	cout<<"Addition is: "<<b;
//	
//	
//	
//}


#include<iostream>
using namespace std;

class swapping{
	
	public: 
	int *a, *b, temp;
//	swapping(int x, int y){
//		a = x;
//		b = y;
//	}
	void input(){
		cout<<"Enter the value of a: ";
		cin>>*a;
		cout<<"Enter the values of b: ";
		cin>>*b;
	}
	void logic(){
		temp = *a;
		*a = *b;
		*b = temp;
	}
	void print_details(){
		cout<<"Value of a after swapping is: "<<*a<<endl;
		
		cout<<"Value of b after swapping is: "<<*b<<endl;
		
	}
};
int main(){
	swapping obj;
	obj.input();
	obj.logic();
	obj.print_details();
	return 0;
}














