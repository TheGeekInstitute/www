# # arr = [1,0,4,5,6]

# # # z=False

# # for x in arr:
# #     if x==0:
# #         z=True
# #         break
# #     else:
# #         z=False

# # if z==True:
# #     print("zero is present")
# # else:
# #     print("zero is not present")   





# import numpy as np
# # x=np.eye(3) 
# # print(x)    
# # x = np.zeros((4,4))
# # y = np.ones((3,3))
# # print(y)
# # x = np.random.normal(0,1,15)
# y = np.arange(1,10,2)

# print(y)
# # print(x)

import numpy as np
# arr = np.array([[1,2],
            #    [3,4]])
# print(arr)               
# print(np.sum(arr,axis=0))
# print(np.sum(arr,axis=1))


# x = np.array([1,2,1])
# y = np.array([3,4,3])
# print(np.dot(x,y))


arr = np.array([12,34,52,4,2,5,78,33,23,56])
print(np.sort(arr))
print(np.sort(arr,axis=0))

