#!/usr/bin/env python

import pifacedigitalio as p

#init the piface board
#False means do not reinit the board again
#But you have to init it once!
pdf = p.PiFaceDigital(0,0,0,True)

pdf.output_pins[1].value = 1 #start engine