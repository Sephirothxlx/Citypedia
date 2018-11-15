import xlrd
import xlwt
import random

citydata=xlrd.open_workbook('city.xls')
table=citydata.sheet_by_index(0)

state=table.col_values(0)
city=table.col_values(1)

g=xlwt.Workbook()
table=g.add_sheet('Sheet1')
s=['basketball','football','baseball','hockey','badminton','table tennis','chess']
r=0
n=0
for x in range(len(state)):
	f=random.randint(30,120)
	for i in range(f):
		table.write(r,0,str(state[x]))
		table.write(r,1,str(city[x]))
		table.write(r,2,'Team'+str(n))
		l=random.randint(0,6)
		table.write(r,3,str(s[l]))
		n=n+1
		r=r+1
g.save('sportteam.xls')