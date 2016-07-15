import os
import time
import sys

def clickAction(gap):
    os.system("./autoClicker -x 2400 -y 700")
    time.sleep(0.2)
    os.system("./autoClicker -x 2400 -y 750")
    time.sleep(gap)
    print "clicking!!"

def start(gap):
    while True:
        clickAction(gap)

if __name__ == '__main__':
    try:
        if len(sys.argv) > 1:
            gap = int(sys.argv[1])
        else:
            gap = 3
        start(gap)
    except:
        print "error occurs"
