# firstname = input("Enter First Name :")
# lastname = input("Enter Last Name :")

# fptr = open("logs.txt","a")

# fptr.write("First Name : " + firstname + "\n")
# fptr.write("Last Name : " + lastname + "\n\n")

# fptr.close()


name1 = input("Enter Name1: ")
name2 = input("Enter Name2: ")

fptr = open("name.txt","a")

fptr.write("Name1: " + name1 + "\n")
fptr.write("Name2: " + name2 + "\n\n")

fptr.close