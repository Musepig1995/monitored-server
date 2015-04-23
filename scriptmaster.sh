#!/bin/bash

# this script calls each function script, 30 times a minute

i="0"
while [ $i -lt 30 ]
do

./get_bandwidth.sh
./get_memory_usage.sh
./get_cpu_usage.sh
./get_ip.sh
php total_diskspace.php
php arrayGenerator.php

sleep 1.85 
i=$[$i+1]
done
