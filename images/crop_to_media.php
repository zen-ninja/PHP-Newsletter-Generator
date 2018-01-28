<?php    
    //error_reporting(E_ALL);
	//ini_set("error_reporting", E_ALL);
    include('defined.php');

    $thisMonthNo = date('m');
	$thisYear = date('Y');
    $newsMedia = "../../ontheblog/".$thisYear."/".$thisMonthNo."/images/news/";

    session_start();    
    if(isset($_SESSION['number'])){
 		$_SESSION['number']=$_SESSION['number']+1;
	}else{
 		$_SESSION['number']=1;
	}
	$number = $_SESSION['number'];    
    
	$output_filename = $newsMedia."inthenews_".$number;
	define_upload($output_filename);
?>