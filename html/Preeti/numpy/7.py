from numpy import random
import numpy as np


# x = random.rand(3)
# x = random.randint(100, size=(5))
# x = random.randint(100, size=(3,5))

# x = random.choice([3, 5, 7, 9])

# x = random.choice([3, 5, 7, 9], size=(3,5))
# x = random.choice([3, 5, 7, 9], p=[0.1, 0.3, 0.6, 0.0], size=(3,5))

# arr = np.array([1, 2, 3, 4, 5])

# random.shuffle(arr)

# arr = np.array([1, 2, 3, 4, 5])
# arr1=random.permutation(arr)
# print(arr1)
# print(arr)

# x = random.rand(2)
# x = random.randint(100,size=(2))
# x = random.randint(100,size=(3,5))
# y = random.randint(50,size=(2,10))
# print(y)
# print(x)
# x = random.choice([2,4,6,8,10])
# x = random.choice([2,4,6,8,10], size=(3,9))

# print(x)

arr = np.array([1,2,3,4,5,6,7,8])
# random.shuffle(arr)
# print(arr)
arr1 = random.permutation(arr)
print(arr1)