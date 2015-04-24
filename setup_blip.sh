#!/bin/bash

echo ""
echo "IMPORTANT!"
echo ""
echo "You are about to download and install the server monitoring app 'Blip'."
echo "Packages apache2, php5, and php5-curl will also be installed if they are not already."
echo ""

read -p "To confirm, type 'y'. to decline, type 'n'" answer
if [[ $answer = y ]]
then
	echo "Beginning install..."
	echo ""
	
	echo "Checking apache2, php5, and php5curl..."
	apt-get install apache2 php5 php5-curl
	sleep 2
	echo "restarting apache2"
	service apache2 restart

	echo "DONE"
	
	cd /var/local
	wget http://harrisonsouth.co.uk/blip/packages/scriptmaster.sh
	wget http://harrisonsouth.co.uk/blip/packages/total_diskspace.txt
	wget http://harrisonsouth.co.uk/blip/packages/get_bandwidth.sh
	wget http://harrisonsouth.co.uk/blip/packages/get_memory_usage.sh
	wget http://harrisonsouth.co.uk/blip/packages/get_cpu_usage.sh
	wget http://harrisonsouth.co.uk/blip/packages/get_ip.sh
	wget http://harrisonsouth.co.uk/blip/packages/arrayGenerator.txt
	wget http://harrisonsouth.co.uk/blip/packages/send_server_usage.txt
	
	chmod +x *
	mkdir gen

	echo ""
	echo "Enter what this server will be called followed by [ENTER]:"
	read name
		while [ "$name" = "" ]; do
			echo "Cannot be blank!"
			echo "Enter what this server will be called followed by [ENTER]:"
			read name
		done
	echo "$name" > gen/server_name.txt

	echo ""
	echo "Enter the location of the server (e.g. Los Angeles) followed by [ENTER]:"
	read location
		while [ "$location" = "" ]; do
			echo "Cannot be blank!"
			echo "Enter the location of the server followed by [ENTER]:"
			read location
		done
	echo "$location" > gen/server_location.txt

	crontab -l > tempCronGen
	echo "* * * * * bash /var/local/scriptmaster.sh" >> tempCronGen
	crontab tempCronGen
	rm tempCronGen
	
elif [[ $answer = n ]] ; then
	echo "Aborting"
else
	echo "Invalid option. Aborting."
fi
