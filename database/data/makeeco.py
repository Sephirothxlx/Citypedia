import xlrd
import xlwt
import random

citydata=xlrd.open_workbook('city.xls')
table=citydata.sheet_by_index(0)

state=table.col_values(0)
city=table.col_values(1)

g=xlwt.Workbook()
table=g.add_sheet('Sheet1')
s=[20000,30000,40000,50000,60000,70000]
r=0
n=0
for x in range(len(state)):
	l=random.randint(0,5)
	k=s[l]
	for i in range(10):
		table.write(r,0,str(state[x]))
		table.write(r,1,str(city[x]))
		k=random.randint(k-5000,s[l])
		table.write(r,2,str(k))
		table.write(r,3,str(2008+i))
		n=n+1
		r=r+1
g.save('economics.xls')