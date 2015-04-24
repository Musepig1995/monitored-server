#!/bin/bash

#this script returns the CPU usage as a percentage

echo `top -bn 1 | awk '{print $9}' | tail -n +8 | awk '{s+=$1} END {print s}'` > /var/local/gen/cpu_percentage.txt
