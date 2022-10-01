#include<iostream>
using namespace std;
class employee;

	{
		
	public:
		int Eid;
		char Ename;
		
		void get_data()
		{
			cout<<"Enter Eid and Ename ";
			cin>>Eid>>Ename;
			
		}
		void display()
		{
			cout<<Eid<<Ename;
			
		}
	};

	main()
	{
		employee obj;
		obj: getdata();
		obj: display();
	}
}


