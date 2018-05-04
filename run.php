<?php
include('../pages/head.php');
//include('../pages/menu.php');// ohne menu
?>
<script>
var RT = <?php
	
    $myfile = fopen("http://keinkunst.ch/data/zentime.txt", "r") or die("Unable to open file!");
	$end_date = fgets($myfile); // get end time from file
	fclose($myfile);
	$start_date = date("h:i:sa"); // now is
	
	//$start_date="11:51:14";// provisorisch
    //$end_date="11:54:29";// provisorisch
    
    $start_time = strtotime($start_date);
    $end_time = strtotime($end_date);
    $difference = $end_time - $start_time;

    //echo sprintf("%02d%s%02d%s%02d", floor($difference/3600), ':', ($difference/60)%60, ':', $difference%60); // outputs 47:56:15
    $remainingtime =  ($difference/60)%60 * 60;
    //echo $remainingtime;
	if ($remainingtime > 3600) $remainingtime = 2;
	echo json_encode($remainingtime, JSON_HEX_TAG);
?>; //Don't forget the extra semicolon!


function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
		
       if (--timer < 0) {
		   clearInterval(timer);
			document.getElementById("restart").style.visibility = "visible";
			display.textContent = "00:00";      	
        }
    }, 1000);
}


window.onload = function () {
	
	document.getElementById("restart").style.visibility = "hidden";
	
    var counter = RT,
        display = document.querySelector('#time');
		//display.textContent = "Q0:00";
    startTimer(counter, display);
};
	
</script>
<table width="1300" height="820" border="0" align="center">
  <tr>
    <th height="750" scope="col"><iframe width="1280" height="720" src="https://www.youtube.com/embed/POHLLeQ51Ic?autoplay=1?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <br>
    </th>
  </tr>
  <tr>
    <td align="center">
    <form id="form1" name="form1" method="post" action="http://keinkunst.ch/zen/start.php">
                <input type="submit" name="button" id="restart" value="restart" />
              </form>
                <div>Remaining time ≈ <span id="time">--:--</span></div>
                </td>
  </tr>
</table>
