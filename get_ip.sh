#!/bin/bash

#writes the public ip to a file

echo `hostname -I` > gen/ip.txt
