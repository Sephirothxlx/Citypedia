import xlrd
import xlwt

citydata=xlrd.open_workbook('city.xls')
table=citydata.sheet_by_index(0)

state=table.col_values(0)
city=table.col_values(1)

airport=xlwt.Workbook()
table=airport.add_sheet('Sheet1')
r=0
n=0
for x in range(len(state)):
	for i in range(20):
		table.write(r,0,str(state[x]))
		table.write(r,1,str(city[x]))
		table.write(r,2,'Airport'+str(n))
		n=n+1
		r=r+1
airport.save('airport.xls')