#!/usr/bin/env python

import RPi.GPIO as GPIO

# use P1 header pin numbering convention
GPIO.setmode(GPIO.BCM)

GPIO.setup(17, GPIO.OUT)

GPIO.output(17, True)
