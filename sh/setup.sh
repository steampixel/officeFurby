#!/bin/bash

echo update...

apt-get update

echo upgrade...

apt-get upgrade

echo installing espeak...

apt-get install espeak

echo installing webserver

apt-get install apache2 php5
