# age=19

# if age>=18:
#     print("You can Vote Because You are " + str(age))
# else:
#     print("You can Not Vote Because You are " + str(age))

a=70
b=70
c=70

if a>b and a>c:
    print(str(a) + " is grater than " + str(b) + " and " + str(c))
elif b>a and b>c:
    print(str(b) + " is grater than " + str(a) + " and " + str(c))
elif c>a and c>b:
    print(str(c) + " is grater than " + str(a) + " and " + str(b))
else:
    print("All Numbers are Equals")



a=10
b=20
c=30
d=40
if a>b and a>c and a>d:
    print(str(a)+ "is greater than" + str(b) + "and" + str(c) + "and" + str(d))
elif b>a and b>c and b>d:
    print(str(b) + "is greater than" + str(a) + "and" + str(c) + "and" +str(d))
elif c>a and c>b and c>d:
    print(str(c) + "is greater than"+ str(a) + "and" + str(b) + "and" + str(d))
elif d>a and d>b and d>c:
    print(str(d) + "is greater than" + str(a) + "and" + str(b) + "and" + str(c))
else:
    print("All numbers are equals")
