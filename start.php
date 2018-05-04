<?php
// get status and select page idle, running, offline
//
	//sleep(0.5);
    $myfile = fopen("../data/status.txt", "r") or die("Unable to open file!");
	$status = fgets($myfile);
    fclose($myfile);
    //echo $status;
    if ($status == "0"){
    	//echo ("wartend...");
        $ch = curl_init("http://keinkunst.ch/zen/idle.php");// let select pattern
    }
    if ($status == "1"){
    	//echo ("beschäftigt...");
        $ch = curl_init("http://keinkunst.ch/zen/init.html");// counter 10s then > run.php
    }
    if ($status == "2"){
    	//echo ("offline...");
        $ch = curl_init("http://keinkunst.ch/zen/off.php");// show offline
    } 
	curl_exec($ch);
?>
