# import numpy as np
# arr = np.array([[[1,1,1],
#                  [2,2,2],
#                  [3,3,3]]])
# print(arr)                 
# newarr = np.transpose(arr)
# print(newarr)

# # print(arr[arr==1])
# print(arr[arr>1])
# for x in arr:
#     for y in x:
#         for z in y:
#             print(z)
#         # print(y)
#     # print(x)

# a = np.sum(arr)    

import numpy as np
arr = np.array([[1,2,3],
                [4,5,6],
                [7,8,9]])

print(arr)            
new_arr = np.transpose(arr) 
# print(new_arr)  
# print(arr[arr==1])
# print(arr[arr>1])
# for x in arr:
#     for y in x:
#         for z in y:
#             print(z)
#         print(y)
#     print(x)
a = np.sum(arr)
print(a)

