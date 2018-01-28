<?php
	//error_reporting(E_ALL);
	//ini_set("error_reporting", E_ALL);	
	include('defined.php');
	$thisMonthNo = date('m');
	$thisYear = date('Y');

	session_start();
	if(isset($_SESSION['num'])){
 		$_SESSION['num']=$_SESSION['num']+1;
	}else{
 		$_SESSION['num']=1;
	}
	$num = $_SESSION['num'];

    $output_filename = "../../ontheblog/".$thisYear."/".$thisMonthNo."/images/upcoming/".$num."_54";
    define_upload($output_filename);    
?>