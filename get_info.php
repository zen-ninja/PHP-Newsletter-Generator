<?php
	include('connections.php');
	session_start();
	$_SESSION['template'];

	$query = mysqli_query($con, "SELECT * FROM news_gen ORDER BY id DESC LIMIT 1"); // run query
	$array = array(); // set array	
	while($row = mysqli_fetch_assoc($query)){ // look through query
  		$firstCol = $row['ceo_col1'];
  		$secondCol = $row['ceo_col2'];
		$iTNtitle = $row['itn_title'];
		$iTNSlug = $row['itn_slug'];
		$iTNdesc = $row['itn_desc'];
		$iTMtitle = $row['itm_title'];
		$iTMSlug = $row['itm_slug'];
		$iTMdesc = $row['itm_desc'];
		$uAHTitle = $row['ua_title'];
		$uAHSlug = $row['uah_slug'];
		$uAHDesc = $row['ua_desc'];
		$uAATitle1 = $row['uaa_title1'];
		$uAASlug1 = $row['uaa_slug1'];
		$uAATitle2 = $row['uaa_title2'];
		$uAASlug2 = $row['uaa_slug2'];
		$uAATitle3 = $row['uaa_title3'];
		$uAASlug3 = $row['uaa_slug3'];
		$uAATitle4 = $row['uaa_title4'];
		$uAASlug4 = $row['uaa_slug4'];
		$uAATitle5 = $row['uaa_title5'];
		$uAASlug5 = $row['uaa_slug5'];
		$uAATitle6 = $row['uaa_title6'];
		$uAASlug6 = $row['uaa_slug6'];
		$uAATitle7 = $row['uaa_title7'];
		$uAASlug7 = $row['uaa_slug7'];
		$uAATitle8 = $row['uaa_title8'];
		$uAASlug8 = $row['uaa_slug8'];
		$uAATitle9 = $row['uaa_title9'];
		$uAASlug9 = $row['uaa_slug9'];
		$uAATitle10 = $row['uaa_title10'];
		$uAASlug10 = $row['uaa_slug10'];
		$soldHTitle = $row['sh_title'];
		$soldHSlug = $row['sh_slug'];
		$soldHDesc = $row['sh_desc'];
		$recentSucTitle1 = $row['rs_title1'];
		$recentSucSlug1 = $row['rs_slug1'];
		$recentSucDesc1 = $row['rs_desc1'];
		$recentSucTitle2 = $row['rs_title2'];
		$recentSucSlug2 = $row['rs_slug2'];
		$recentSucDesc2 = $row['rs_desc2'];		

	$pop_code = $_SESSION['template'];

	if ($pop_code == "Default Template (10 UAA)" || $pop_code == "-- Default Template EDITOR (10 UAA)"){
		$pop_code = "Newsletter Default";
	}
	elseif ($pop_code == "Eighty Template (8 UAA)" || $pop_code == "-- Eighty Template EDITOR (8 UAA)"){
		$pop_code = "Eighty Newsletter (8 UAA)";
	}
	elseif ($pop_code == "No News Template" || $pop_code == "-- No News Template EDITOR"){
		$pop_code = "No News Newsletter";
	}
	elseif ($pop_code == "No Media Template" || $pop_code == "-- No Media Template EDITOR"){
		$pop_code = "No Media Newsletter";
	}
	elseif ($pop_code == "No Media Template (8 UAA)" || $pop_code == "-- No Media Template EDITOR (8 UAA)"){
		$pop_code = "No Media Newsletter Eighty (8 UAA)";
	}
	elseif ($pop_code == "No News Template (8 UAA)" || $pop_code == "-- No News Template EDITOR (8 UAA)"){		
		$pop_code = "No News Newsletter Eighty (8 UAA)";
	}	

	$selected_Template = $pop_code;

	$results = mysqli_query($con, "SELECT * FROM news_template_code where name='".$selected_Template."'");
		while ($row = mysqli_fetch_array($results))
		{
			$body = $row['body'];
			$trans = array(
				'<?php echo $thisMonth; ?>' => $thisMonth,
				'<?php echo $mainsite; ?>' => $mainsite,
				'<?php echo $firstCol; ?>' => $firstCol,
				'<?php echo $secondCol; ?>'=> $secondCol,
				'<?php echo $newsMedia; ?>' => $newsMedia,
				'<?php echo $iTNtitle; ?>' => $iTNtitle,
				'<?php echo $iTNdesc; ?>' => $iTNdesc,
				'<?php echo $articleSlug.$iTNSlug; ?>' => $articleSlug.$iTNSlug,
				'<?php echo $iTNSlug; ?>' => $iTNSlug,
				'<?php echo $iTMtitle; ?>' => $iTMtitle,
				'<?php echo $iTMdesc; ?>' => $iTMdesc,
				'<?php echo $articleSlug.$iTMSlug; ?>' => $articleSlug.$iTMSlug,
				'<?php echo $iTMSlug; ?>' => $iTMSlug,
				'<?php echo $upcomings; ?>' => $upcomings,
				'<?php echo $upcomings; ?>' => $upcomings,
				'<?php echo $uAHTitle; ?>' => $uAHTitle,
				'<?php echo $uAHDesc; ?>' => $uAHDesc,
				'<?php echo $uAHSlug; ?>' => $uAHSlug,
				'<?php echo $articleSlug.$uAHSlug; ?>' => $articleSlug.$uAHSlug,
				'<?php echo $uAASlug1; ?>' => $uAASlug1,
				'<?php echo $uAASlug2; ?>' => $uAASlug2,
				'<?php echo $uAASlug3; ?>' => $uAASlug3,
				'<?php echo $uAASlug4; ?>' => $uAASlug4,
				'<?php echo $uAASlug5; ?>' => $uAASlug5,
				'<?php echo $uAASlug6; ?>' => $uAASlug6,
				'<?php echo $uAASlug7; ?>' => $uAASlug7,
				'<?php echo $uAASlug8; ?>' => $uAASlug8,
				'<?php echo $uAASlug9; ?>' => $uAASlug9,
				'<?php echo $uAASlug10; ?>' => $uAASlug10,
				'<?php echo $articleSlug.$uAASlug1; ?>' => $articleSlug.$uAASlug1,
				'<?php echo $articleSlug.$uAASlug2; ?>' => $articleSlug.$uAASlug2,
				'<?php echo $articleSlug.$uAASlug3; ?>' => $articleSlug.$uAASlug3,
				'<?php echo $articleSlug.$uAASlug4; ?>' => $articleSlug.$uAASlug4,
				'<?php echo $articleSlug.$uAASlug5; ?>' => $articleSlug.$uAASlug5,
				'<?php echo $articleSlug.$uAASlug6; ?>' => $articleSlug.$uAASlug6,
				'<?php echo $articleSlug.$uAASlug7; ?>' => $articleSlug.$uAASlug7,
				'<?php echo $articleSlug.$uAASlug8; ?>' => $articleSlug.$uAASlug8,
				'<?php echo $articleSlug.$uAASlug9; ?>' => $articleSlug.$uAASlug9,
				'<?php echo $articleSlug.$uAASlug10; ?>' => $articleSlug.$uAASlug10,
				'<?php echo $uAATitle1; ?>' => $uAATitle1,
				'<?php echo $uAATitle2; ?>' => $uAATitle2,
				'<?php echo $uAATitle3; ?>' => $uAATitle3,
				'<?php echo $uAATitle4; ?>' => $uAATitle4,
				'<?php echo $uAATitle5; ?>' => $uAATitle5,
				'<?php echo $uAATitle6; ?>' => $uAATitle6,
				'<?php echo $uAATitle7; ?>' => $uAATitle7,
				'<?php echo $uAATitle8; ?>' => $uAATitle8,
				'<?php echo $uAATitle9; ?>' => $uAATitle9,
				'<?php echo $uAATitle10; ?>' => $uAATitle10,
				'<?php echo $succeses; ?>' => $succeses,
				'<?php echo $succeses; ?>' => $succeses,
				'<?php echo $soldHTitle; ?>' => $soldHTitle,
				'<?php echo $soldHDesc; ?>' => $soldHDesc,
				'<?php echo $soldHSlug; ?>' => $soldHSlug,
				'<?php echo $articleSlug.$soldHSlug; ?>' => $articleSlug.$soldHSlug,
				'<?php echo $recentSucTitle1; ?>' => $recentSucTitle1,
				'<?php echo $recentSucDesc1; ?>' => $recentSucDesc1,
				'<?php echo $recentSucSlug1; ?>' => $recentSucSlug1,
				'<?php echo $articleSlug.$recentSucSlug1; ?>' => $articleSlug.$recentSucSlug1,
				'<?php echo $recentSucTitle2; ?>' => $recentSucTitle2,
				'<?php echo $recentSucDesc2; ?>' => $recentSucDesc2,
				'<?php echo $recentSucSlug2; ?>' => $recentSucSlug2,
				'<?php echo $articleSlug.$recentSucSlug2; ?>' => $articleSlug.$recentSucSlug2
				);
			echo strtr($body, $trans);			
		}
	
	}
?>