import xlrd
import xlwt
import random

statedata=xlrd.open_workbook('state.xls')
table=statedata.sheet_by_index(0)

state=table.col_values(0)

citydata=xlwt.Workbook()
table=citydata.add_sheet('Sheet1')
r=0
n=0
for x in state:
	for i in range(3):
		table.write(r,0,x)
		table.write(r,1,'City'+str(n))
		p=random.randint(100000,1500000)/10000
		q=random.randint(100000,1500000)/10000
		table.write(r,2,str(p)+'N')
		table.write(r,3,str(q)+'W')
		table.write(r,4,'It a beautiful city.')
		n=n+1
		r=r+1
citydata.save('city.xls')