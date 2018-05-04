<?
// get ZENrobot status from processing
// and write to file

$myPHPValue=isset($_GET['value']);
	$status = $_GET['value'];
	$file = '../data/zentime.txt';// write remaining time.txt 
	file_put_contents($file, $status);
echo $myPHPValue.$status;
?>