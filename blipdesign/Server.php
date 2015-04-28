<?php
class Server {
private $server_id;
private $name;
private $location;
private $ip_address;
private $hdd_space;
private $ram_space;
private $online;
private $server_usage = null;
private $start_time;
//when we first create a server we only ever require the name, but these other parameters are possible.
//all other details are added in setters
public function __construct($ip_address, $online, $name, $start_time){
	
	if(!is_null($name)){
		$this->name = $name;
	} else {
		return null;
	}
	if(!is_null($online)){
		$this->online = $online;
	}
	if(!is_null($ip_address)){
		$this->ip_address = $ip_address;
	
}

if(!is_null($start_time)){
		$this->start_time = $start_time;
		}
}
	public function getServerId(){
		return $this->server_id;
	}
	public function setServerId($server_id){
		$this->server_id = $server_id;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function getLocation(){
		return $this->location;
	}
	public function setLocation($location){
		$this->location = $location;
	}
	public function getIpAddress(){
		return $this->ip_address;
	}
	public function setIpAddress($ip_address){
		$this->ip_address = $ip_address;
	}
	public function getHddSpace(){
		return $this->hdd_space;
	}
	public function setHddSpace($hdd_space){
		$this->hdd_space = $hdd_space;
	}
	public function getRamSpace(){
		return $this->ram_space;
	}
	public function setRamSpace($ram_space){
		$this->ram_space = $ram_space;
	}
	public function getOnline(){
		return $this->online;
	}
	public function setOnline($online){
		$this->online = $online;
	}
	public function getServerUsage(){
		return $this->server_usage;
	}
	public function setServerUsage($server_usage){
		$this->server_usage = $server_usage;
	}
	public function getStartTime(){
		return $this->start_time;
	}
	public function setStartTime($start_time){
		$this->start_time = $start_time;
	}
}
?>