# It is block of code which returns the value when it is called

# def is a keyword to decalre the function
# def function_name():
    # name = input("Enter your name ")
    # print("Your name is: " + name)
    # print("Name of the person: " + name)
    # return name


# function_name()  # This is function calling
# print(function_name())       #This is function calling


# def function_02(name):
#     print("Your name is: " + name)
    
# function_02("Aashutosh")


# def function_02(name = "Default name"):
#     print("Your name is: " + name)

# function_02("Aashutosh")
# print("Now executing second time !!!")
# function_02()
    

def getName(name1, name2):  #Parameter
    print("Name1 is - ", name1, "Name2 is - ", name2)
getName("Aashutosh", "Bajaj")

print("---------------------------------------")

def getName(name2, name1):
    print("Name1 is - ", name2, "Name2 is - ", name1)
getName(name1 = "Bajaj", name2 = "Aashutosh")    #This is known as keyword argument

