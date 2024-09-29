import pandas as pd 

data = pd.read_csv('data.csv')

data.dropna(inplace = True)
new_data = data.dropna();


data['Hindi'].fillna(10,inplace=True);
data['Per'].fillna(97,inplace=True);



# #https://www.w3schools.com/python/pandas/pandas_plotting.asp


import pandas as pd
# data = pd.read_csv('data.csv')
# data.dropna(inplace = True)
# new_data = data.drpona()
# # data['Per'].fillna(80,inplace=True)
# # data.loc[4, 'Hindi'] = 90
# print(data.to_string())
# data = pd.read_csv('data.csv')
# print(data.to_string())

# a = pd.Series()
# print(a)

# datalist = [10,20,30,40]
# series = pd.Series(datalist)
# print(series)
# import numpy as numpy
# arr = np.array([1,2,3,4,5])
# series = pd.Series(arr)
# print(series)

# data_dict = [1,2,3] 
# series = pd.Series(data_dict)
# series = pd.Series(data_dict, index=['Ram','Shyam','Mohan'])
# series = pd.Series(1, index=['Ram','Shyam','Mohan'])


# print(series)

# date_series = pd.Series([1,2,3,4,5], index=pd.date_range('2024-06-01',periods=5))
# print(date_series)

# data = [10,20,30,40,50]
# labels = ['A','B','C','D','E']
# a = pd.Series(data, index=labels)
# print(a)
# print(a,['D'])


# a = pd.Series([1,2,3,4])
# b = pd.Series([10,20,30,40])
# c = a+b
# d = b-a
# print(c)
# print(d)
# e = a*b
# print(e)
# f = b/a
# print(f)

# g = b**a
# print(g)

# condition = a>2
# condition = b>2
# print(condition)
# print(a.mean())
# print(b.max())    

data = {'Name': ['Preeti','Shweta','Sapna'],
        'Age': [21,22,23],
        'City': ['New York','London','Paris']}

date_index = pd.date_range(start='2024-06-01',periods=3,freq= 'D')

df = pd.DataFrame(data,index=date_index)
                                                                                                                                            
print(df)


print(df.describe())


# import numpy as np
# df1 = pd.DataFrame({'key': ['b','b','a','c','a','a','b'],'data1': range(8)})
# df2 = pd.DataFrame({'key': ['a','b','d'],'data2': range(3)})
# print(df1)


