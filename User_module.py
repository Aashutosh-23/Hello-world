from tkinter import *
from tkinter import ttk
root = Tk()

frm = ttk.Frame(root, padding = "20 30 70 80")
frm.grid()
ttk.Label(frm, text = "HELLO WORLD").grid(column = 0, row = 0)
ttk.Label(frm, text = "HELLO WORLD").grid(column = 1, row = 0)
ttk.Label(frm, text = "HELLO WORLD").grid(column = 2, row = 0)
ttk.Button(frm, text = "EXIT", command = root.destroy).grid(column = 5, row = 0)
root.mainloop()

# nameout("Aashutosh")