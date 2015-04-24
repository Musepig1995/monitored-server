#!/bin/bash

# this script calls each function script, 30 times a minute

i="0"
while [ $i -lt 30 ]
do

/var/local/get_bandwidth.sh
/var/local/get_memory_usage.sh
/var/local/get_cpu_usage.sh
/var/local/get_ip.sh
php /var/local/total_diskspace.txt
php /var/local/arrayGenerator.txt

sleep 1.85 
i=$[$i+1]
done
