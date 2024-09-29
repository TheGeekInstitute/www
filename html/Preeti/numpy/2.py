# import numpy as np

# # # arr = np.array([1.1, 2.1, 3.1])

# # # newarr = arr.astype('i')



# # # print(newarr)
# # # print(newarr.dtype)


# # # arr = np.array([1, 2, 3, 4, 5])
# # # x1 = arr.copy()
# # # x = arr.view()

# # # x[1]=50

# # # arr[0] = 42

# # # print(arr)
# # # print(x)

# # # print(x1.base)
# # # print(x.base)


# # # arr = np.array([[1, 2, 3, 4], [5, 6, 7, 8]])
# # # arr = np.array([1, 2, 3, 4],ndmin=3)
# # # print(arr.shape)
# # # print(arr.ndim)

# # arr = np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12])

# # newarr = arr.reshape(3,2, 2)

# # # print(newarr)

# arr = np.array([[[1, 2, 3], [4, 5, 6]], [[7, 8, 9], [10, 11, 12]]])
# # # arr = np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12])


# # # for x in arr:
# # #     print(x)

# # # for x in np.nditer(arr[3:5]):
# #     # print(x)

# for a, x in np.ndenumerate(arr):
#     print(a,x)


# # import numpy as np 
# # arr = np.array([1.1,1.2,1.3])
# # newarr = arr.astype('i')
# # print(newarr)
# # print(arr)
# # print(newarr.dtype)


# # arr = np.array([[[1, 2, 3], [4, 5, 6]], [[7, 8, 9], [10, 11, 12]]])
# # print(arr)

# # arr = np.array([1,2,3,4,5,6,7])
# # x= arr.copy()
# # y=arr.view()

# # arr[2]=8
# # print(arr)
# # print(y)
# # print(x)

# # print(arr)
# # print(x.base)
# # print(y.base)

# # arr = np.array([[1, 2, 3, 4], [5, 6, 7, 8]])
# # arr = np.array([1,2,3,4],ndmin=3)
# # print(arr)
# # print(arr.shape)
# # print(arr.ndim)

# # arr = np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12])
# # newarr = arr.reshape(2,2, 3)
# # print(newarr)

# arr = np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12])


# # for x in arr:
#     # print(x)
# # for x in np.nditer(arr):
#     # print(x)
# for x in np.nditer(arr[4 :8]):
#     print(x)
# arr = np.array()

import numpy as np
# arr = np.array([[[1,2,3,4],[5,6,7,8]],[[9,10,11,12],[13,14,15,16]]])
# print(arr.ndim)
# for x in np.nditer(arr[2:5]):
    # print(x)
# for a, x in np.ndenumerate(arr):
    # print(a,x)


# Zeros__arr = np.zeros((2,3))

# print(Zeros__arr)

# ones__arr = np.ones((3,3))
# print(ones__arr)

arr1 = np.array([1,2,3])
arr2 = np.array([4,5,6])
# add = arr1[0] + arr2[0]
add = arr1 + arr2
print(add)
exp = arr1 ** arr2
print(exp)
log = np.log(arr1)
print(log)









