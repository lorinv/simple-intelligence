#Converts Given image to gray

import cv2
import sys

#capture = cv2.VideoCapture(5)

img = cv2.imread(sys.argv[1], 0)
#img = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
cv2.imwrite(sys.argv[2], img)
cv2.imshow("Frame", img)
cv2.waitKey(0)





