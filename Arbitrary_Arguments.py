def arbFunction(*args): #Other than args anyone can be used
    print("The second teacher is: ", args[2], args,)
arbFunction("Aashutosh", "Aryan", "Chetan") 

def arbKeyFunc(**arbArg):
    print("Full name is: ", arbArg["fname"])
    print(arbArg)
arbKeyFunc(fname = "Aashi", lname = "Bajaj")        #This will come in the form of dictionary
# "\n" is used to print in the next line