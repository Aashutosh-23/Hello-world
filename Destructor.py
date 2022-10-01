class Myclass:
    age = 56
    def __init__(self, age):
        print("Constructor called")
        print(self.age, age)
    def __del__(self):
        print("Destructor called")

obj1 = Myclass(20)
#  del obj1
print("This is req of the program")
