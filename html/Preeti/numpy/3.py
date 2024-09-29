# import numpy as np

# arr1 = np.array([[1, 2], [3, 4]])

# arr2 = np.array([[5, 6], [7, 8]])
# arr3 = np.array([[2, 1], [6, 5]])


# arr = np.concatenate((arr1,arr2),axis=1)

# arr = np.stack((arr1,arr2,arr3),axis=-1)

# # # arr = np.hstack((arr1,arr2,arr3))
# # # arr = np.vstack((arr1,arr2,arr3))

# # # arr = np.dstack((arr1,arr2,arr3))
# # arr = np.array([1, 2, 3, 4, 5, 6])

# # newarr = np.array_split(arr,3)


# # print(newarr[2][0])

import numpy as np
arr1 = np.array([[1, 2], [3, 4]])
arr2 = np.array([[5, 6], [7, 8]])
# # arr = np.concatenate((arr1,arr2))
# # arr = np.concatenate((arr1,arr2),axis=1)
# # print(arr)

arr = np.stack((arr1,arr2),axis=-1)
print(arr)
# # arr = np.hstack((arr1,arr2))
# # arr = np.vstack((arr1,arr2))
# # arr1 = np.array_split(arr1,3)
# # arr2 = np.array_split(arr2,2)

# # print(arr1)
# # print(arr2)






