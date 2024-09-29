

data = pd.read_csv('data.csv')

data.dropna(inplace = True)
# new_data = data.dropna();


data['Hindi'].fillna(10,inplace=True);
data['Per'].fillna(97,inplace=True);
