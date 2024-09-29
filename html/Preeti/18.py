def  sr_no(n):
    for x in range(1,n+1):
        print(x)



def series(n,s):
    for x in range(1,n+1,s):
        print(x)


def odd(n):
    for x in range(1,n+1):
        if x%2!=0:
            print(x)

def even(n):
    for x in range(1,n+1):
        if x%2==0:
            print(x)

            
a = int(input("Enter a number: "))
print("1. Sr No")
print("2. series")
print("3. odd")
print("4. Even")

b = int(input("Choose an option :"))
if b==1:
    sr_no(a)
elif b==2:
    step = int(input("Enter Step Value :"))
    series(a,step)
elif b==3:
    odd(a)
elif b==4:
    even(a)
else:
    print("Not match")          

# Enter a Number : 45




# 1. Sr No
# 2. series
#  Step Value : 
# 3. Odd
# 4. Even

# Choose an Option : 1

# Output : 4 + 5 = 9

# 60*140