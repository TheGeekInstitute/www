# # class Fruits:
# #     name="Mango"
# #     color="Yellow"



# # obj =  Fruits

# # print(obj.name)


# # class Fruits:
# #     def __init__(self,name,color):
# #         self.FruitName=name
# #         self.FruitColor=color

# #     def print_data(self):
# #         print(self.FruitName)
    

# # obj = Fruits("Apple","Red")

# # obj.print_data()


# class myMath:
#     def __init__(self,num):
#         self.myNum=num

#     def sr_no(self):
#         for x in range(1,self.myNum+1):
#             print(x)

#     def odd(self,a):
#         self.a =a
#         for x in range(1,self.a+1):
#             if x%2 !=0:
#                 print(x)

#     def even(self):
#         for x in range(1,self.myNum+1):
#             if x%2==0:
#                 print(x)


# mt = myMath(10)

# # mt.sr_no()
# # mt.odd(20)

# mt.even()
class myMath:
    
def __init__(data,num):
        data.myNum=num

    def sr_no(data):
        for x in range(1,data.myNum+1):
            print(x)
            

    def odd(data,a):
        data.a=a
        for x in range(1,data.a+1):
            if x%2 !=0:
                print(x)

    def even(data,a):
        for x in range(1,data.a+1):
            if x%2==0:
                print(x)   
mt = myMath(10)
mt.sr_no()                         
mt.odd(20)


