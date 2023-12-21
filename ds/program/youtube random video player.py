# from selenium import webdriver
# import os
# import subprocess
# #start Tor
# sproc=subprocess.Popen('""' )
#
# #start PhantomJS
# # service_args = [ '--proxy=localhost:9150', '--proxy-type=socks5', ]
# driver = webdriver.firefox()
# #get page
# driver.get("https://stackoverflow.com/questions/40161921/how-to-open-and-close-tor-browser-automatically-with-python")
# print(driver.page_source)
# driver.close()
# #kill process
# sproc.kill()

import webbrowser,os
url = 'https://getmovies10.blogspot.com/2022/05/kgf-chapter-2-download.html'
webbrowser.register('firefox', None, webbrowser.BackgroundBrowser(r"C:\\Users\\mrame\\OneDrive\\Desktop\\Tor Browser\\Browser\\firefox.exe"))
import  time
import random
webbrowser.get('firefox').open(url)
end_time = random.randint(300,2700)
print(end_time)
time.sleep(end_time)
os.system("taskkill /im firefox.exe /f")