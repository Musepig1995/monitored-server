#!/bin/bash

# this script calls each function script, 30 times a minute

i="0"
#while [ $i -lt 30 ]
#do

	/var/local/blip/get_bandwidth.sh
	/var/local/blip/get_memory_usage.sh
	/var/local/blip/get_cpu_usage.sh
	/var/local/blip/get_ip.sh
	php /var/local/blip/total_diskspace.txt
	php /var/local/blip/arrayGenerator.txt
	php /var/local/blip/send_server_usage.txt

	#sleep 1.6 
	i=$[$i+1]
#done
