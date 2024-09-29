# class BaseClass:
    
#     def __init__(data,num):
#           data.myNum=num

#     def sr_no(data):
#           for x in range(1,data.myNum+1):
#               print(x)

#     def odd(data,a):
#           data.a=a
#           for x in range(1,data.a+1):
#               if x%2 !=0:
#                   print(x)

#     def even(data,a):
#           for x in range(1,data.a+1):
#               if x%2==0:
#                   print(x)   


# class DrivedClass(BaseClass):
#     def sum(data,x,y):
#         data.x =x
#         data.y=y
#         return data.y + data.x


# class abcd(DrivedClass):
#     pass

# # obj = abcd(10)
# # obj.odd(10)

# # ṣprint(obj.sum(10,45))


class Baseclass:
    def __init__(data,num):
        data.myNum=num

    def sr_no(data):
        for x in range(1,data.myNum+1):
            print(x) 


    def odd(data,a):
       data.a = a
       for x in range(1,data.a+1):
           if x%2!=0:
            print(x)



class DrivedClass(Baseclass):
    def sum(data,x,y):
        data.x=x
        data.y=y
        return data.x + data.y

class abcd(DrivedClass):
    pass        

obj=Baseclass(10)
obj.odd(10) 

print(obj.sum(10,20))        
