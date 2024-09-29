# # class myMath:
    
# # def __init__(data,num):
# #         data.myNum=num

# #     def sr_no(data):
# #         for x in range(1,data.myNum+1):
# #             print(x)

# #     def odd(data,a):
# #         data.a=a
# #         for x in range(1,data.a+1):
# #             if x%2 !=0:
# #                 print(x)

# #     def even(data,a):
# #         for x in range(1,data.a+1):
# #             if x%2==0:
# #                 print(x)   
# # mt = myMath(10)
# # mt.sr_no()                         
# # mt.odd()


# class myMath:
#     def __init__(data,num):
#         data.myNum=num

#     def sr_no(data):
#         for x in range(1,data.a+1):
#             print(x)

#     # def table(data,a):
#     #     data.a=a
#     #     for x in range(1,11):
#     #         print(str(data.a) + " x " + str(x) + " = " + str(data.a*x)) 

#     # def fact(data,a):
#     #     data.a=a
#     #     data.fact=1
#     #     for x in range(1,data.a+1):
#     #         data.fact*=x   
#     #     print(data.fact)

#     # def sqrt(data,a):
#     #     data.a=a
#     #     print(data.a**0.5) 

#     def arry(data,a):
#         data.a=a
        

    
#             print(x)    



        

    
# mt = myMath(10)
# # mt.table(2)
# # mt.fact(4)   
# # mt.sqrt(25)   
# mt.arry()           


class myMath:
    def __init__(data,num):
        data.mynum = num
        

    def sr_no(data,a):
        data.a=a
        for x in range(1,data.a+1):
            print(x) 

    def odd(data,a):
        data.a=a
        for  x in range(1,data.a+1):
            if x%2!=0:
               print(x) 

    def even(data,a):
        data.a=a
        for x in range(1,data.a+1):
            if x%2==0:
                print(x)

                
                  


# mt = myMath(10)
# mt.odd(10)              
# mt.even(20)