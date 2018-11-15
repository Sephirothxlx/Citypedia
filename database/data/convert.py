import pandas as pd
import sys

def xlsx_to_csv(name):
	data_xls = pd.read_excel(name)
	data_xls.to_csv(name.split('.')[0]+'.csv', encoding='utf-8',index=None,sep=',')

if __name__ == '__main__':
	xlsx_to_csv(sys.argv[1])