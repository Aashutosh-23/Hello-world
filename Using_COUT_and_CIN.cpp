#include<iostream>
using namespace std;
class A{
	protected: 
	int a;
	public:
	 void get(){
		cout<<"Enter the number: ";
		cin>>a;
	 }
};
class B : public A{
	public:
	void get_01(){
		cout<<"This is the subclass of A";
		a = a + 2;
		cout<<a;
	}
};
int main(){
	A obj;
	obj.get();
	// obj.get_01();
	return 0;
	
}