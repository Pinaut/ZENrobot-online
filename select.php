<?php
// get pattern from user
// and write to file

if(isset($_GET['pattern'])) {// write pattern.txt
    $data = $_GET['pattern'];
	$file = '../data/pattern.txt';
	file_put_contents($file, $data); 
	
	$file = '../data/status.txt';// running write status.txt
	file_put_contents($file, "1");
	// $status = 1;
	
	// create log data
	$ip = $_SERVER['REMOTE_ADDR'];
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$log =  date("Y/m/d") ."   ". date("H:i:s")."   ".$data."   ".$ip."   ".$browser."\n";
	$file = '../data/zenlog.txt';// write zenlog.txt
	//file_put_contents($file, "1");
	file_put_contents($file, $log, FILE_APPEND);
	
	// and return to the site
	//sleep(5.0);
	$ch = curl_init("http://keinkunst.ch/zen/start.php");
	curl_exec($ch);
}
?>