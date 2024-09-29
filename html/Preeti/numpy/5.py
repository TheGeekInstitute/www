# # # # import numpy as np

# # # # # arr = np.array([41, 42, 43, 44])

# # # # # x = [True, False, True, False]

# # # # # newarr = arr[x]

# # # # # print(newarr)


# # # # arr = np.array([41, 42, 43, 44,10,12,5,7,8,25,35])

# # # # empty_arr=[]

# # # # for x in arr:
# # # #     if x<10:
# # # #         empty_arr.append(True)
# # # #     else:
# # # #         empty_arr.append(False)


# # # # # print(empty_arr)

# # # # newdata =  arr[empty_arr]

# # # # print(newdata)



# # # import numpy as np
# # # arr = np.array([2,3,6,7])
# # # x = [True,False,True,False]
# # # newarr = arr[x]
# # # print(newarr)

# # import numpy as np
# # arr = np.array([13,5,56,23,79,78,90,12,57])
# # empty_arr=[]
# # for x in arr:
# #     if x%2==0:
# #         empty_arr.append(True)
# #     elif x%2!=0:
# #         empty_arr.append(False)        
# #     else:
# #         print("Not found")
                                    

# # print(empty_arr)        
# import numpy as np
# # arr = np.array([[1, 2, 3],
#                 # [4, 5 ,6],
#                 # [7 ,8, 9]])

# # newarr=np.transpose(arr)
# # print(newarr)
# arr = np.array([[11,22,33]])
# swapped=np.swapaxes(arr,0,1)
# # swapped = np.swapaxes(arr,1,2)
# print(swapped)



import numpy as np
arr1 = np.array([[1, 2], [3, 4]])
arr2 = np.array([[5, 6], [7, 8]])
# arr = np.concatenate((arr1,arr2))
# arr = np.concatenate((arr1,arr2),axis=1)
# print(arr)

# arr = np.stack((arr1,arr2),axis=-1)
# print(arr)
# arr = np.vstack((arr1,arr2))
arr = np.transpose(arr1)
newarr = np.transpose(arr2)
print                                                                                                                                                                                                                                        