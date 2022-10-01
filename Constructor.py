class Myclass:
    age = 5
    def __init__(self, age):    #constructor is called in this way
        print("Constructor called")
        print(self.age, age)
    
obj1 = Myclass(20)

# print(obj1.x)