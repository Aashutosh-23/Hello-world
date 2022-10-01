#include<iostream>
using namespace std;
class calculation{
	public:
		int num, i, f1 = 0, f2 = 1, f3;
		void get_value()
		{
			cout<<"Enter the number"<<endl;
			cin>>num;
		}
		void factorial()
		{
			for(i=1; i<=num; i++){
				i = i*1;
			}
			
			cout<<"Factorial is: "<<i<<endl;
			
			
		}
		void Fibonacci_Series()
		{
			if(num==0 || num==1){
				cout<<f1<<f2;
			}
			else {
				cout<<f1<<"\t"<<f2;
				for(i=1; i<num-1; i++){
					f3 = f1+f2;
					f1=f2;
					f2=f3;
					cout<< "\t"<<f3;
				
				}
			
					
				}
				
			}
			
			
		};
//		void Palindrome()
//		{
//			
//			
//		}
		
//};
main()
{
	calculation obj;
	cout<<"Press 1 for factorial number"<<endl;
	cout<<"Press 2 for Fibonacci_Series"<<endl;
	cout<<"Press 3 for Palindrome"<<endl;
	
	int ch;
	cout<<"Enter your choice :"<<endl;
	cin>>ch;
	
	switch(ch) 
	{
	    
		case 1:
			 obj.get_value();
			 obj.factorial();
			 break;
			 
	    case 2: 
			 	obj.get_value();
			 	obj.Fibonacci_Series();
			 	break;
 	
       case 3: 
			 	obj.get_value();
			 	obj.Palindrome();
		 
	}
	
}
























