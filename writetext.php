<?
$myPHPValue=isset($_GET['value'])?$_GET['value']:"";
 
$ch = curl_init("http://keinkunst.ch/ZENrobotT.html");
curl_exec($ch);
 
?>