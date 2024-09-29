marks = int(input("enter students marks: "))

if marks>=90:
    grade = "A"
elif marks>=80 and marks<90:
    grade = "B"
elif marks>=70 and marks<80:
    grade = "C" 
else:
    grade = "D"  
print("grade of the student: " , grade)


# import pandas as pd
# std_data=[(1,'tarik',19,'male','?','delhi'),
#           (2,'munna',45,'male','?','punjab'),
#           (3,'i',143,'love','?','you'),
#           (4,'sumit',20,'male','susmita','ayodhya')]
# df=pd.DataFrame(std_data,columns=['stud_id','name','age','gender','g_f','address'])
# print(df)



# adda karnaka 



# df[df['age'] > 25]
# df = df.drop(5)
# df.loc[2, 'phone_no'] = 45
# df.loc[3, 'phone_no'] = 78

# df.insert(3, 'phone_no', [10,20,30,4])
# df = df.drop(columns=['phone_no'])
# df.loc[[0,2], 'address'] = ['india' , 'pakistan']
# df = df.rename(columns={'age': 'stud_age'})
# df['phone_no']=[10,20,30,40,50]

# end tak













