#include<iostream>
using namespace std;
class private_specifier{
	protected:
		double r;
		float pi = 3.14;
	public:
		void compute_area(){
			cout<<"Enter the radius: ";
			cin>>r;
		}
		void get_area(){
			cout<<"Area of circle is: "<<pi*r*r;
			
		}
};
int main(){
	private_specifier obj;
	obj.compute_area();
	obj.get_area();
	return 0;
}

