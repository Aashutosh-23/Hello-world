from tkinter import *
from tkinter import ttk
root = Tk()     #Frame is made becaause of this
frm = ttk.Frame(root, padding = 10)
frm.grid()
def printName():
    nameval = name.get()
    print(nameval)
    ttk.Label(frm, text = "Hello" + nameval + "!").grid(column = 0; row = 2)
ttk.Label(frm, text = "Enter your name").grid(column = 0, row = 0)

#pip install pytube






