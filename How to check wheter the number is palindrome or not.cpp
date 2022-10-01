//A palindrome number is a number that is same after reverse.

#include<stdio.h>  
int main()    
{    
int n,r,sum=0,temp;    
printf("Enter the number=");    
scanf("%d",&n);    
temp=n;    
while(n>0)    
{    
r=n%10;    
sum=(sum*10)+r;    
n=n/10;    
}    
if(temp==sum)    
printf("Yes, it is a palindrome number");    
else    
printf("No, it is not a palindrome number");   
return 0;  
} 
