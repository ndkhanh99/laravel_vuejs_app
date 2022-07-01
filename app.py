import requests
from bs4 import BeautifulSoup
import datetime
from datetime import datetime
import time
import os

minutes = 0 
day = 0 
month = 0 

while True:
    
    now = datetime.now()
    
    # time_now = datetime.now().time()
    
    # today8am = time_now.replace(hour=23, minute=0, second=0, microsecond=0)
    
    dt_string = now.strftime("%d/%m/%Y %H:%M:%S")
    
    print("date and time =", dt_string)
    
    print(dt_string)
 
    url = "http://e-learning.hcmut.edu.vn/my/"
    
    # Gửi 1 request đến url phía trên và nhận lại source page của nó
    r = requests.get(url)
    
    print(r.status_code) # 200 là thành công

    soup = BeautifulSoup(r.text, 'lxml')

    print(soup)
    
    time.sleep(3600)
    
    # url_1 = "http://clm123.me/full"
    
    # b = requests.get(url_1)
    
    # print(b.status_code)
    
    # soup_1 = BeautifulSoup(b.content, 'lxml')
    
    # print(soup_1)
    
    # time.sleep(1)
    
    # minutes += 5
    
    # print("so phut la:", minutes)
    
    # if minutes == 20:
        
    #     url_2 = "http://cltx86.com/ds"
    #     c = requests.get(url_2)
    #     soup_2 = BeautifulSoup(c.content, 'lxml')
    #     print('Thanh cong 2 : ', soup_2)
        
    
    # if minutes == 30:
        
    #     url_3 = "http://cltx86.com/dn"
    #     d = requests.get(url_3)
    #     soup_3 = BeautifulSoup(d.content, 'lxml')
    #     print('Thanh cong 3 : ', soup_3)
        
    # if time_now > today8am:
            
    #     url_4 = "http://cltx86.com/d"
    #     e = requests.get(url_4)
    #     soup_4 = BeautifulSoup(e.content, 'lxml')
    #     print('Thanh cong 4 : ', soup_4)
    #     day += 1
    #     minutes = 0 
        
    # if day == 5:
    #     url_5 = "http://cltx86.com/m"
    #     m = requests.get(url_5)
    #     soup_5 = BeautifulSoup(m.content, 'lxml')
    #     print('Thanh cong 5 : ', soup_5)
    #     day = 0
        
        
        
        
        
    
        
        
        
        
    
    
    
    
    
    
    
    
    