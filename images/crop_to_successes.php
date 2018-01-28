<?php
	error_reporting(E_ALL);
	ini_set("error_reporting", E_ALL);
    include('defined.php');

    $thisMonthNo = date('m');
	$thisYear = date('Y');
    $success = "../../ontheblog/".$thisYear."/".$thisMonthNo."/images/success/";

    session_start();    
    if(isset($_SESSION['numbers'])){
 		$_SESSION['numbers']=$_SESSION['numbers']+1;
	}else{
 		$_SESSION['numbers']=1;
	}
	$numbers = $_SESSION['numbers'];    
    
	$output_filename = $success."recent_success_".$numbers;
	define_upload($output_filename);
?>