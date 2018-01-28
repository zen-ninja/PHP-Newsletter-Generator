<?php
	/*ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);*/

	include('functions.php');
	include('get_info.php');	
	
	//echo $pop_code;
	$thisMonthDir = "../ontheblog/".$thisYear."/".$thisMonthNo;
	$newsIndex = fopen($thisMonthDir."/index.html", "w") or die("Unable to create file!");
	fwrite($newsIndex, $pop_code);
	fclose($newsIndex);
	header('Location: '.$thisMonthDir);
?>