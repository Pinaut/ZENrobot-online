<?php
include('../pages/head.php');

    echo "ZENrobot log " . date("Y/m/d") ." ". date("h:i:sa") . "<br>" . "<br>";
	$datei=fopen("../data/zenlog.txt", "r") or die("Unable to open file!");
	while(!feof($datei)){ 
		$zeile = fgets($datei,1000); 
		echo $zeile."<br>"; 
	} 
	fclose($datei);
	echo "EOF "."<br>";
	echo date("Y/m/d") ." ". date("h:i:sa");
?>