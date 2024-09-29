# # # # Odd_list=[]
# # # # EvenList=[]
# # # # a=int(input("Enter a number: "))
# # # # for x in range(1,a+1):
# # #     # if x%2!=0:
# # #         # Odd_list.append(x)

# # # # for x in range(1,a+1):
# # #     # if x%2==0:
# # #         # EvenList.append(x)

# # # # print(list)

# # # # print(Odd_list)
# # # # print(EvenList)


# # # a=[]
# # # b=[]
# # # d=[]
# # # c=int(input("Enter a number: "))
# # # for x in range(1,c+1):
# # #     if x%5==0:
# # #         a.append(x)
# # # for x in range(1,c+1):
# # #     if x%5!=0:
# # #         b.append(x)
# # # for x in range(1,c+1):
# # #     if x>0:
# # #         d.append(x)
# # # for x in range(1,c+1):
# # #     if x==5:
# # #         print(x)        

# # # # print(list)
# # # # print(a)
# # # # print(b)  
# # # print(d)


# # a=[19,82,43,4,56,61,72,53,49,15]
# # for x in list(a):
# #     if x%2==0:
# #        print(x)
# # for x in list(a):
# #     if x%2!=0:
# #         print(x)




# # row=5

# # for i in range(1,row+1):
#     # print("\n")
#     # for j in range(1,i+1):
#         # print("*",end="")

# # # for i in range(1,row+1):
# # #     print("\n")
# # #     for j in range(1,i+1):
# # #         print("* ",end="")


# # # for i in range(1, row + 1):
# # #     for j in range(1, i + 1):
# # #         print("* ", end="")
# # #     print("\r")

# # a=5
# # i=j=1
# # for i in range(1,a+1):
# #     print()
# #     for j in range(1,i+1):
# #         print(".",end="")
        

# # a=5
# # for x in range(1,a+1):
#     # print()
#     # for y in range(1,x+1):
#         # print("*",end="")

# # def pyramid(n):
# #     for a in range(1,n+1):
# #         for b in range(n-a):
# #             print(" ",end=" ")
# #             for c in range(1,2*a):
# #                 print("*",end=" ")
        
# # pyramid(10)


# # Function to print full pyramid pattern
# def full_pyramid(n):
# 	for i in range(1, n + 1):
            
# 		# Print leading spaces
# 		for j in range(n - i):
# 			print(" ", end="")
		
# 		# Print asterisks for the current row
# 		for k in range(1, i+1):
# 			print("*", end=" ")
		
# full_pyramid(10)


x=5
for a in range(1,x+1):
	print()
	for b in range(1,a+1):
		# for c in range(1,b+1):
		    print("*",end=" ")