# import numpy as np
# # num = np.array([10,6,8,3,7,93,6])
# # print(num)
# # print(array[0])


# a = np.array([1,2,3])
# print(a.ndim)

# b = np.array([[1,1,1],[2,2,2]])
# print(b.ndim)

# print(b[0][0])

# for x in a:
#     print(x)
#     for y in x:
#         print(y)
        
import numpy as np

# arr = np.array([51,66,55,74,41,34])

# new_array = arr.reshape(3,2)
# print(new_array)


arr = np.array([[[[[1,2,3,4,5],[6,7,8,9,10]]]]])

for x in arr:
    print(x)


print(arr.shape)