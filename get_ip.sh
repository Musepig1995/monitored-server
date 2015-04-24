#!/bin/bash

#writes the public ip to a file

echo `hostname -I` > /var/local/gen/ip.txt
