#include<iostream>
using namespace std;
class area_of_circle{
	private:
	int r = 34;
	public:
	float pi = 3.14;
//	void area(){
//		cout<<"Enter the radius of circle: ";
//		cin>>r;
//		
//	}
	void area_output(){
		cout<<"Area of circle is: "<<pi*r*r;
	}
	
};
int main(){
	area_of_circle obj;
//	obj.area();
	obj.area_output();
	return 0;
}
