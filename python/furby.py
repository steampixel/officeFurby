#!/usr/bin/env python

import sys
import time
import pifacedigitalio as p
from subprocess import call

#init the piface board
#False means do not reinit the board again
#But you have to init it once!
pdf = p.PiFaceDigital(0,0,0,True)

#for each argument
for argument in sys.argv:
	if(argument!=sys.argv[0]):
		print argument

		pdf.output_pins[1].value = 1 #start engine
		time.sleep(0.5)
		pdf.output_pins[1].value = 0 #stop engine

		#pdf.output_pins[0].value= 1 #start amplifyer
			
		#weibliche stimme in englisch
		#call(["espeak","-ven-us+f4","-s170",sys.argv[1]])
	
		#weibliche stimme in franzoesich :-)
		#call(["espeak","-vfr+f4","-s170",argument])
		
		#weibliche stimme auf deutsch
		call(["espeak","-vde+f4","-s100",argument])
		
		#normale stimme
		#call(["espeak",sys.argv[1]])
		
		#pdf.output_pins[0].value = 0 #disable amplifyer

		pdf.output_pins[1].value = 1 #start engine
		time.sleep(0.5)
		pdf.output_pins[1].value = 0 #stop engine
