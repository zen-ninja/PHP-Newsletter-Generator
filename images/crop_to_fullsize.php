<?php
	//error_reporting(E_ALL);
	//ini_set("error_reporting", E_ALL);
    include('defined.php');

    session_start();    
    if(isset($_SESSION['numb'])){
 		$_SESSION['numb']=$_SESSION['numb']+1;
	}else{
 		$_SESSION['numb']=1;
	}
	$numb = $_SESSION['numb'];
    $output_filename = "img_crop/fullsize/fullsize_".$numb;
    define_upload($output_filename);     
?>