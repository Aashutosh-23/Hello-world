#Multiple Inheritance 

class Person:
    name = ""
    age = ""
    gender = ""
    def __init__(self, name, age, gender):
        self.name = name
        self.age = age
        self.gender = gender
        print("Constructor of Person parent class called")
    def out(self):
        print("Name: ", self.name, "Age: ", self.age, "Gender: ", self.gender)

class employee(Person):
    def __init__(self, empid, name, age, gender):
        print ("Constructor of employee child class called")
        self.empid = empid
        Person.__init__(self, name, age, gender)
    # self.name = name
    # self.gender = gender
    # self.age = age
    def out(self):
        # print("Name: ", self.name, "Age: ", self.age, "Gender: ", self.gender, "Employee ID: ", self.empid)
        print("Name: ", self.name)
        print("Age: ", self.age)
        print("Gender: ", self.gender)
        print("Employee ID: ", self.empid)

empObj = employee(2511, "Aashutosh", 20, "Male")
empObj.out()


