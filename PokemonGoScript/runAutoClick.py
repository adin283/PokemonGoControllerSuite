import os
import time

def clickAction():
	os.system("./autoClicker -x 539 -y 508")
	os.system("./autoClicker -x 539 -y 558")
	time.sleep(1)
	print "clicking!!"

def start():
	while True:
		clickAction()

start()