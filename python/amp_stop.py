#!/usr/bin/env python

import pifacedigitalio as p

#init the piface board
#False means do not reinit the board again
#But you have to init it once!
pdf = p.PiFaceDigital(0,0,0,False)

pdf.output_pins[0].value = 0 #stop
