#include<iostream>
using namespace std;
void swap(int &a, int &b){
	int temp = a;
	a = b;
	b = temp;
}
void sort(int *arr, int n){
	for(int i = 0; i<n-1; i++){
		for(int j = 0; j<n; j++){
			if(arr[i]>arr[j]){
				swap(arr[i], arr[j]);
			}
		}
	}
}
int linear(int *arr, int x, int n){
	for(int i = 0; i<n; i++){
		if(x == arr[i]){
			return i;
		}
		return -1;
	}
}
int binary(int *arr, int x, int n){
	sort(&arr[n], n);
	int S = 0;
	int e = n-1;
	while(S<=e){
		int mid = S + (e-S)/2;
		if(x=arr[mid]){
			return mid;
		}
		else if(x>arr[mid]){
			S = mid + 1;
		}
		else{
			e = mid - 1;
		}
	}
	return -1;
}

int main(){
	int n;
	cout<<"Enter the size of an array: "<<endl;
	cin>>n;
	
	int arr[n];
	for(int i = 0; i<n; i++){
		cout<<"Enter array element "<<i+1<<endl;
		cin>>arr[i];
	}
	int x;
	cout<<"Enter the number to search in Array"<<endl;
	cin>>x;
	
	int choice;
	cout<<"Enter 1 for linear search"<<endl;
	cout<<"Enter 2 for binary search"<<endl;
	
	cin>>choice;
	switch(choice){
		case 1:
			cout<<"Present at: "<<linear(arr, x, n)<<endl;
			break;
			
		case 2:
			cout<<"Present at: "<<binary(arr, x, n)<<endl;
			break;
			
		default:
			cout<<"There is no valid choice"<<endl;
			return 0;
			
	}
}

