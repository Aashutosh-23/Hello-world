	#include<iostream>
	using namespace std;
	class circle{
		public:
			double radius;
			double compute_area(){
				return 3.14*radius*radius;
			}	
			
	};	//end of body of class 
	int main()
	{
		circle obj;
		obj.radius = 5.5;
		cout<<"Radius is: "<<obj.radius<<"\n";
		cout<<"Area is: "<<obj.compute_area();
		return 0;
	}

