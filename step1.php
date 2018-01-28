<?php
	//error_reporting(E_ALL);
	//ini_set("error_reporting", E_ALL);

	include('functions.php');
	include('add.php');

	session_start();
	$_SESSION['template'];
	$selected_Template = $_SESSION['template'];
	
	$results = mysqli_query($con, "SELECT * FROM news_template where name='".$selected_Template."'");
		while ($row = mysqli_fetch_array($results))
		{
			$body = $row['body'];
			$trans = array(
				'<?php echo $thisMonth; ?>' => $thisMonth,
				'<?php echo $mainsite; ?>' => $mainsite, 
				'<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' => htmlspecialchars($_SERVER["PHP_SELF"]), 
				'<?php echo $firstCol; ?>' => $firstCol,
				'<?php echo $secondCol; ?>'=> $secondCol,
				'<?php echo $newsMedia; ?>' => $newsMedia,
				'<?php echo $iTNtitle;?>' => $iTNtitle,
				'<?php echo $iTNdesc;?>' => $iTNdesc,
				'<?php echo $articleSlug.$iTNSlug; ?>' => $articleSlug.$iTNSlug,
				'<?php echo $iTMtitle;?>' => $iTMtitle,
				'<?php echo $iTMdesc;?>' => $iTMdesc,
				'<?php echo $articleSlug.$iTMSlug; ?>' => $articleSlug.$iTMSlug,
				'<?php echo $upcomings;?>' => $upcomings,
				'<?php echo $upcomings; ?>' => $upcomings,
				'<?php echo $uAHTitle;?>' => $uAHTitle,
				'<?php echo $uAHDesc;?>' => $uAHDesc,
				'<?php echo $articleSlug.$uAHSlug; ?>' => $articleSlug.$uAHSlug,
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
				'<?php echo $uAATitle1;?>' => $uAATitle1,
				'<?php echo $uAATitle2;?>' => $uAATitle2,
				'<?php echo $uAATitle3;?>' => $uAATitle3,
				'<?php echo $uAATitle4;?>' => $uAATitle4,
				'<?php echo $uAATitle5;?>' => $uAATitle5,
				'<?php echo $uAATitle6;?>' => $uAATitle6,
				'<?php echo $uAATitle7;?>' => $uAATitle7,
				'<?php echo $uAATitle8;?>' => $uAATitle8,
				'<?php echo $uAATitle9;?>' => $uAATitle9,
				'<?php echo $uAATitle10;?>' => $uAATitle10,
				'<?php echo $succeses; ?>' => $succeses,
				'<?php echo $succeses;?>' => $succeses,
				'<?php echo $soldHTitle;?>' => $soldHTitle,
				'<?php echo $soldHDesc;?>' => $soldHDesc,
				'<?php echo $articleSlug.$soldHSlug; ?>' => $articleSlug.$soldHSlug,
				'<?php echo $recentSucTitle1;?>' => $recentSucTitle1,
				'<?php echo $recentSucDesc1;?>' => $recentSucDesc1,
				'<?php echo $articleSlug.$recentSucSlug1; ?>' => $articleSlug.$recentSucSlug1,
				'<?php echo $recentSucTitle2;?>' => $recentSucTitle2,
				'<?php echo $recentSucDesc2;?>' => $recentSucDesc2,
				'<?php echo $articleSlug.$recentSucSlug2; ?>' => $articleSlug.$recentSucSlug2
				);
			echo strtr($body, $trans);			
		}
?>