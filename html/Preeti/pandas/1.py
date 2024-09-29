# # https://www.w3schools.com/python/pandas/pandas_dataframes.asp

# import pandas as pd

# mydataset = {
#   'cars': ["BMW", "Volvo", "Ford"],
#   'passings': [3, 7, 2]
# }

# # myvar = pd.DataFrame(mydataset)

# # print(myvar)

# # print(pd.__version__)

# # a = [1, 7, 2]

# # myvar = pd.Series(a)
# # myvar = pd.Series(a, index = ["x", "y", "z"])

# # print(myvar['y'])


# # calories = {"day1": 420, "day2": 380, "day3": 390}

# # myvar = pd.Series(calories)

# # print(myvar)


# data = pd.read_csv('data.csv')


# # print(data.to_string())

# # print(pd.options.display.max_rows)

# json_data = pd.read_json("data.json")

# # print(json_data.to_string())

# # print(json_data.head(10))

# # print(json_data.tail(5))

# print(data.info())


# import pandas as pd
# mydata = {
#   # 'Girl': ["Preeti","Shweta","Tanisha"],
#   # 'marks': [10,20,30]
# }
# # myvar = pd.DataFrame(mydata)
# print(myvar)
# print(pd.__version__)

# # a = [10,20,30]
# myvar = pd.Series(a)
# myvar = pd.Series(a, index=["x","y","z"])
# print(myvar)
# print(myvar["x"])

# labours = {"day1":100 , "day2":200 , "day3":300}
# myvar = pd.Series(labours)
# print(myvar)


# data = pd.read_csv('data.csv')
# print(data.to_string())

# json_data = pd.read_json("data.json")
# print(data_json.to_string())




import pandas as pd
mydata = {
  'name' :  ["Preeti", "Shweta" , "Sapna"],
  'Roll no.' : [ 21, 16 ,15]
}
myvar = pd.DataFrame(mydata)
# print(myvar)

a=[10,20,30]
myvar = pd.Series(a)

myvar = pd.Series(a,index=["x","y","z"])
print(myvar)
data = pd.read_csv('data.csv')
print(data.to_string())

