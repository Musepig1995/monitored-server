#!/bin/bash

receiveFile="/sys/class/net/eth0/statistics/rx_bytes"
transmitFile="/sys/class/net/eth0/statistics/tx_bytes"

r1=$(cat "$receiveFile")
t1=$(cat "$transmitFile")
sleep 0.1
r2=$(cat "$receiveFile")
t2=$(cat "$transmitFile")

#total = reading2 - reading1, convert to kilobytes, then to kilobits, then making it a 1sec reading (not 100ms)

let rf="(($r2 - $r1) / 1024) * 8 * 10"
let tf="(($t2 - $t1) / 1024) * 8 * 10"

#print to csv file (kilobits per second >> download, upload)
echo $rf,$tf > /var/local/gen/bandwidth.csv
