multiDim = [[1,2,3],[4,5,6],[7,8,9]] 

multi = [
    [
        [1,1,1],
        [2,2,2],
        [3,3,3]
    ],
    [
        [1,1,1],
        [2,2,2],
        [3,3,3]
    ],
    [
        [1,1,1],
        [2,2,2],
        [3,3,3]
    ]
        ]
# for i in multiDim:
#     print(multiDim)
#     print(multiDim[0])

# for i in range(len(multiDim)):
#     print(multiDim[i])



    

for a in multi:
    for b in a:
        for c in b:
            print(c,end="")
        print("\r")       
            


