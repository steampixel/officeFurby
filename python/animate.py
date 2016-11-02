#!/usr/bin/env python

import RPi.GPIO as GPIO
import time

# use P1 header pin numbering convention
GPIO.setmode(GPIO.BCM)

GPIO.setwarnings(False)

GPIO.setup(7, GPIO.OUT)
GPIO.setup(8, GPIO.OUT)
GPIO.setup(11, GPIO.OUT)
GPIO.setup(9,GPIO.IN, GPIO.PUD_DOWN)

GPIO.output(8, True)
GPIO.output(7, False)

pwm = GPIO.PWM(11, 1200);
pwm.start(100.0)

#time.sleep(10.0)

while (True):
	if (GPIO.input(9) == GPIO.HIGH):
		print ("Animation over")
		break
	else:
		print ("Animate")

#pwm.ChangeDutyCycle(100.0)

#GPIO.cleanup()
