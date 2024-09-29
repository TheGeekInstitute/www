# import pandas as pd
# data_multi_index = {'Age': [25,30,22,28,35,30],
#                     'City': ['New York','France','London','New York','France','London']}
# multi_index = pd.MultiIndex.from_product([['Group A','Group B'],['Alice','Bob','Charlie']],names=['Group','Name'])
# df_multi_index = pd.DataFrame(data_multi_index, index=multi_index)
# print(df_multi_index)

import pandas as pd
import numpy as np
data = pd.Series(np.random.randn(9),index=[['a','a','a','b','b','c','c','d','d'],[1,2,3,1,3,1,2,2,3]])
print(data)    

df1 = pd.DataFrame({'key': ['b','b','a','c','a','a','b'],'data1': range(7)})
df2 = pd.DataFrame({'key': ['a','b','d'],'data2': range(3)})
