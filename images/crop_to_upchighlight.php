<?php
    include('defined.php');
    $thisMonthNo = date('m');
	$thisYear = date('Y');
    $output_filename = "../../ontheblog/".$thisYear."/".$thisMonthNo."/images/upcoming/upcoming_highlight";
    define_upload($output_filename); 
?>