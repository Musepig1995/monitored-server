#!/bin/bash

# script to work out total memory, available memory in MB
# cut-d option is the delimintor, -f is the field to extract

FREE_MEMORY=`free -m | grep Mem`
CURRENT=`echo $FREE_MEMORY | cut -f3 -d' '`
TOTAL=`echo $FREE_MEMORY | cut -f2 -d' '`

let USED="($TOTAL - $CURRENT)"

echo $USED,$TOTAL > /var/local/gen/memory_usage.csv

