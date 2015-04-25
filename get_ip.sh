#!/bin/bash

#writes the public ip to a file

echo `hostname -I` > /var/local/blip/gen/ip.txt
