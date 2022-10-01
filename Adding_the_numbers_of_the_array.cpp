//#include<iostream>
//using namespace std;
//class student{
//	public:
//	static int count;
//	int roll_number;
//	string name;
//	int marks[5];
//	
//	void details(){
//		cout<<"Enter your name: ";
//		cin>>name;
//		cout<<"Enter your roll number: ";
//		cin>>roll_number;
//	}
//	void get_marks(){
//		for(int a = 1; a<=5; a++){
//			cout<<"Enter your marks "<<a<<endl;
//			cin>>marks[a];
//		}
//
//	}
//	void display(){
////		int b=0;
////		for (int i = 1; i<6; i++){
////			b += marks[i];
////		}
////		b = b/5;
////		cout<<"Your percentage is: "<<b;
////		
////		count++;
////		cout<<"Display call: "<<count<<endl;	
//	int b;
//	b = (marks[1]+marks[2]+marks[3]+marks[4]+marks[5])/5;
//	cout<<"Your percentage is "<<b<<endl;
//	}
//
//	
//
//};
//int student::count = 0;// intialization
//int main(){
//	student obj[10];
//	for(int i = 0; i<=10; i++){
//	obj[i].details();
//	obj[i].get_marks();
//	obj[i].display();		
//	}
//		
//	cout<<"total count "<< student::count;
//	return 0;
//}







#include<iostream>
using namespace std;
int main(){
	int arr[5];
	cout<<"Enter the elements of the array: "<<endl;
	for(int i = 1; i<6; i++){
	cin>>arr[i];
	}
	cout<<"The addition of all the number entered in the array is: ";

	cout<<arr[1]+arr[2]+arr[3]+arr[4]+arr[5];
	
	
	
	return 0;
}















