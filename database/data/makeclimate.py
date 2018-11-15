import xlrd
import xlwt
import random

citydata=xlrd.open_workbook('city.xls')
table=citydata.sheet_by_index(0)

state=table.col_values(0)
city=table.col_values(1)

climate=xlwt.Workbook()
table=climate.add_sheet('Sheet1')

w=['Sunny','Cloudy','Rainy','Snowy','Windy']
m=[31,28,31,30,31,30,31,31,30,31,30,31]
r=0
n=0
for x in range(len(state)):
	for i in range(12):
		for j in range(m[i]):
			table.write(r,0,str(state[x]))
			table.write(r,1,str(city[x]))
			p=random.randint(30,90)
			q=random.randint(20,p-10)
			table.write(r,2,str(p))
			table.write(r,3,str(q))
			table.write(r,4,str((p+q)/2))
			s=random.randint(0,100)/100
			table.write(r,5,str(s))
			f=random.randint(0,4)
			table.write(r,6,str(w[f]))
			table.write(r,7,str(2017))
			table.write(r,8,str(i+1))
			table.write(r,9,str(j+1))
			r=r+1
climate.save('climate.xls')