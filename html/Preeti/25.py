# # a=["A","B","C","D","E"]
# # a.reverse()

# for x in a:
#     print(x)
# b=[7,5,370,23,45,55]

# # b.sort()
# # b.sort(reverse=True)

# # print(b[0])
# # print(b[len(b)-1])

# # big = b[0]
# # for x in b:
# #     if x>big:
# #         big = x

# # print(big)


# # sum=0

# # for x in b:
# #     sum+=x

# # print(sum/len(b))



# def findBig(arry):
#     big = b[0]
#     for x in arry:
#         if x>big:
#             big = x
#     return big


# print(findBig(b))


# def findsmall(arry):

#     small = b[0]
#     for y in arry:
#        if y>small:
#           small = y
#     return small     

a= [28,5,78,23,77]
a.reverse()
print(a)
for x in a:
    print(x)
# a.sort()
# print(a)
# a.sort(reverse=True)
print(a)
print(a[0])
print(a[len(a)-1])
big = a[0]
for x in a:
    if x>big:
        print(x)
small = a[0]
for y in a:
    if x>small:
        print(y)


