import xlrd
import xlwt
import random

citydata=xlrd.open_workbook('city.xls')
table=citydata.sheet_by_index(0)

state=table.col_values(0)
city=table.col_values(1)

g=xlwt.Workbook()
table=g.add_sheet('Sheet1')
s=[3000000,4000000,5000000,6000000,9000000]
r=0
n=0
for x in range(len(state)):
	l=random.randint(0,4)
	k=s[l]
	for i in range(10):
		table.write(r,0,str(state[x]))
		table.write(r,1,str(city[x]))
		k=random.randint(k-500000,s[l])
		table.write(r,2,str(k))
		table.write(r,3,str(2008+i))
		n=n+1
		r=r+1
g.save('population.xls')