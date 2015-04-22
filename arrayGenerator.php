<?php

$file = fopen("bandwidth.csv", "r") or die ("File not found!");
$bandwidth = fread($file,filesize("bandwidth.csv");
fclose($file);

$file = fopen("cpu_percentage.txt", "r") or die ("File not found!");
$cpu_percentage = fread($file,filesize("cpu_percentage.txt");
fclose($file);

$file = fopen("diskspace.csv", "r") or die ("File not found!");
$diskspace = fread($file,filesize("diskspace.csv");
fclose($file);

$file = fopen("ip.txt", "r") or die ("File not found!");
$ip = fread($file,filesize("ip.txt");
fclose($file);

$file = fopen("memory_usage.csv", "r") or die ("File not found!");
$memory = fread($file,filesize("memory_usage.csv");
fclose($file);

$array = (
	"bandwidth" => "$bandwidth",
	"cpu_percentage" => "$cpu_percentage",
	"diskspace" => "$diskspace",
	"ip" => "$ip",
	"memory" => "$memory",
	"id" => "idPlaceholder",
);

?>
