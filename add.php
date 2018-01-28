<?php
  include('connections.php');
	function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}
	
	/* User Input Variables */
	$firstCol = $secondCol = $iTNtitle = $iTNdesc = $iTNSlug = $iTMtitle = $iTMdesc = $iTMSlug = $uAHTitle = $uAHDesc = "";
	$uAHSlug = $uAATitle1 = $uAASlug1 = $uAATitle2  = $uAASlug2 = $uAATitle3  = $uAASlug3 = $uAATitle4  = $uAASlug4 = "";
	$uAATitle5  = $uAASlug5 = $uAATitle6  = $uAASlug6 = $uAATitle7  = $uAASlug7 = $uAATitle8  = $uAASlug8 ="";
	$uAATitle9  = $uAASlug9 = $uAATitle10  = $uAASlug10 = $recentSucTitle1 = $recentSucDesc1 = $recentSucSlug1 = "";
	$recentSucTitle2 = $recentSucDesc2 = $recentSucSlug2 = $soldHTitle = $soldHDesc = $soldHSlug = "";	
	
	//assign values
	/*$firstCol = $_POST['firstCol'];
	$secondCol = $_POST['secondCol'];
	$iTNtitle = $_POST['iTNtitle'];
	$iTNdesc = $_POST['iTNdesc'];
	$iTMtitle = $_POST['iTMtitle'];
	$iTMdesc = $_POST['iTMdesc'];
	$uAHTitle = $_POST['uAHTitle'];
	$uAHDesc = $_POST['uAHDesc'];
	$uAATitle1 = $_POST['uAATitle1'];
	$uAATitle2 = $_POST['uAATitle2'];
	$uAATitle3 = $_POST['uAATitle3'];
	$uAATitle4 = $_POST['uAATitle4'];
	$uAATitle5 = $_POST['uAATitle5'];
	$uAATitle6 = $_POST['uAATitle6'];
	$uAATitle7 = $_POST['uAATitle7'];
	$uAATitle8 = $_POST['uAATitle8'];
	$uAATitle9 = $_POST['uAATitle9'];
	$uAATitle10 = $_POST['uAATitle10'];
	$soldHTitle = $_POST['soldHTitle'];
	$soldHDesc = $_POST['soldHDesc'];
	$recentSucTitle1 = $_POST['recentSucTitle1'];
	$recentSucDesc1 = $_POST['recentSucDesc1'];
	$recentSucTitle2 = $_POST['recentSucTitle2'];
	$recentSucDesc2 = $_POST['recentSucDesc2'];*/

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//if (isset($_POST["submit"])){
		//first column
   		if (empty($_POST["firstCol"])) { 
     		$firstCol = "";
   		} else {
     		$firstCol = test_input($_POST["firstCol"]);
			$firstCol = preg_replace("/\n(\s*\n)+/", "</p><p>", $firstCol);
			$firstCol = '<p>'.$firstCol.'</p>';
   		}
   		//second column
   		if (empty($_POST["secondCol"])) { 
     		$secondCol = "";
   		} else {
     		$secondCol = test_input($_POST["secondCol"]);
			$secondCol = preg_replace("/\n(\s*\n)+/", "</p><p>", $secondCol);
			$secondCol = '<p>'.$secondCol.'</p>';
   		}
   		//ITN Title
   		if (empty($_POST["iTNtitle"])) { 
     		$iTNtitle = "";
   		} else {
     		$iTNtitle = test_input($_POST["iTNtitle"]);
     		$iTNSlug = preg_replace("/\s+/", "-", strtolower($iTNtitle));
   		}   		
   		//ITN Description
   		if (empty($_POST["iTNdesc"])) { 
     		$iTNdesc = "";
   		} else {
     		$iTNdesc = test_input($_POST["iTNdesc"]);
   		}
   		//ITM Title
   		if (empty($_POST["iTMtitle"])) { 
     		$iTMtitle = "";
   		} else {
     		$iTMtitle = test_input($_POST["iTMtitle"]);
     		$iTMSlug = preg_replace("/\s+/", "-", strtolower($iTMtitle));
   		}
   		//ITM Description
   		if (empty($_POST["iTMdesc"])) { 
     		$iTMdesc = "";
   		} else {
     		$iTMdesc = test_input($_POST["iTMdesc"]);
   		}
   		// $uAH Title
   		if (empty($_POST["uAHTitle"])) { 
     		$uAHTitle = "";
   		} else {
     		$uAHTitle = test_input($_POST["uAHTitle"]);
     		$uAHSlug = preg_replace("/\s+/", "-", strtolower($uAHTitle));
   		}   		
   		// $uAH Description
   		if (empty($_POST["uAHDesc"])) { 
     		$uAHDesc = "";
   		} else {
     		$uAHDesc = test_input($_POST["uAHDesc"]);
   		}
   		// $uAA Title 1
   		if (empty($_POST["uAATitle1"])) { 
     		$uAATitle1 = "";
   		} else {
     		$uAATitle1 = test_input($_POST["uAATitle1"]);
     		$uAASlug1 = preg_replace("/\s+/", "-", strtolower($uAATitle1));
   		}   		
   		// $uAA Title 2
   		if (empty($_POST["uAATitle2"])) { 
     		$uAATitle2 = "";
   		} else {
     		$uAATitle2 = test_input($_POST["uAATitle2"]);
     		$uAASlug2 = preg_replace("/\s+/", "-", strtolower($uAATitle2));
   		}   		
   		// $uAA Title 3
   		if (empty($_POST["uAATitle3"])) { 
     		$uAATitle3 = "";
   		} else {
     		$uAATitle3 = test_input($_POST["uAATitle3"]);
     		$uAASlug3 = preg_replace("/\s+/", "-", strtolower($uAATitle3));
   		}   		
   		// $uAA Title 4
   		if (empty($_POST["uAATitle4"])) { 
     		$uAATitle4 = "";
   		} else {
     		$uAATitle4 = test_input($_POST["uAATitle4"]);
     		$uAASlug4 = preg_replace("/\s+/", "-", strtolower($uAATitle4));
   		}   		
   		// $uAA Title 5
   		if (empty($_POST["uAATitle5"])) { 
     		$uAATitle5 = "";
   		} else {
     		$uAATitle5 = test_input($_POST["uAATitle5"]);
     		$uAASlug5 = preg_replace("/\s+/", "-", strtolower($uAATitle5));
   		}
   		// $uAA Title 6
   		if (empty($_POST["uAATitle6"])) { 
     		$uAATitle6 = "";
   		} else {
     		$uAATitle6 = test_input($_POST["uAATitle6"]);
     		$uAASlug6 = preg_replace("/\s+/", "-", strtolower($uAATitle6));
   		}
   		// $uAA Title 7
   		if (empty($_POST["uAATitle7"])) { 
     		$uAATitle7 = "";
   		} else {
     		$uAATitle7 = test_input($_POST["uAATitle7"]);
     		$uAASlug7 = preg_replace("/\s+/", "-", strtolower($uAATitle7));
   		}
   		// $uAA Title 8
   		if (empty($_POST["uAATitle8"])) { 
     		$uAATitle8 = "";
   		} else {
     		$uAATitle8 = test_input($_POST["uAATitle8"]);
     		$uAASlug8 = preg_replace("/\s+/", "-", strtolower($uAATitle8));
   		}
   		// $uAA Title 9
   		if (empty($_POST["uAATitle9"])) { 
     		$uAATitle9 = "";
   		} else {
     		$uAATitle9 = test_input($_POST["uAATitle9"]);
     		$uAASlug9 = preg_replace("/\s+/", "-", strtolower($uAATitle9));
   		}
   		// $uAA Title 10
   		if (empty($_POST["uAATitle10"])) { 
     		$uAATitle10 = "";
   		} else {
     		$uAATitle10 = test_input($_POST["uAATitle10"]);
     		$uAASlug10 = preg_replace("/\s+/", "-", strtolower($uAATitle10));
   		}
   		// $soldH Title
   		if (empty($_POST["soldHTitle"])) { 
     		$soldHTitle = "";
   		} else {
     		$soldHTitle = test_input($_POST["soldHTitle"]);
     		$soldHSlug = preg_replace("/\s+/", "-", strtolower($soldHTitle));
   		}
   		// $soldH Description
   		if (empty($_POST["soldHDesc"])) { 
     		$soldHDesc = "";
   		} else {
     		$soldHDesc = test_input($_POST["soldHDesc"]);
   		}
   		//recentSuc Title 1
   		if (empty($_POST["recentSucTitle1"])) { 
     		$recentSucTitle1 = "";
   		} else {
     		$recentSucTitle1 = test_input($_POST["recentSucTitle1"]);
     		$recentSucSlug1 = preg_replace("/\s+/", "-", strtolower($recentSucTitle1));
   		}   		
   		//recentSuc Description 1
   		if (empty($_POST["recentSucDesc1"])) { 
     		$recentSucDesc1 = "";
   		} else {
     		$recentSucDesc1 = test_input($_POST["recentSucDesc1"]);
   		}
   		//recentSuc Title 2
   		if (empty($_POST["recentSucTitle2"])) { 
     		$recentSucTitle2 = "";
   		} else {
     		$recentSucTitle2 = test_input($_POST["recentSucTitle2"]);
     		$recentSucSlug2 = preg_replace("/\s+/", "-", strtolower($recentSucTitle2));
   		}
   		//recentSuc Description 2
   		if (empty($_POST["recentSucDesc2"])) { 
     		$recentSucDesc2 = "";
   		} else {
     		$recentSucDesc2 = test_input($_POST["recentSucDesc2"]);
   		}      
		  //db query
		  //$sel_info = mysqli_query($con, "SELECT * FROM news_gen");
		  $store_info = mysqli_query($con, "SELECT * FROM news_gen");
		  //insert values to db
		  $store_info = mysqli_query($con, "INSERT INTO news_gen 
			(ceo_col1, ceo_col2, itn_title, itn_slug, itn_desc, 
			itm_title, itm_slug, itm_desc, ua_title, uah_slug, ua_desc, 
			uaa_title1, uaa_slug1, uaa_title2, uaa_slug2, uaa_title3, uaa_slug3, 
			uaa_title4, uaa_slug4, uaa_title5, uaa_slug5, uaa_title6, uaa_slug6, 
			uaa_title7, uaa_slug7, uaa_title8, uaa_slug8, uaa_title9, uaa_slug9, 
			uaa_title10, uaa_slug10, sh_title, sh_slug, sh_desc, 
			rs_title1, rs_slug1, rs_desc1, 
			rs_title2, rs_slug2, rs_desc2) 
			VALUES (
			'$firstCol', '$secondCol', '$iTNtitle', '$iTNSlug', '$iTNdesc', 
			'$iTMtitle', '$iTMSlug', '$iTMdesc', '$uAHTitle', '$uAHSlug', '$uAHDesc', 
			'$uAATitle1', '$uAASlug1', '$uAATitle2', '$uAASlug2', '$uAATitle3', '$uAASlug3', 
			'$uAATitle4', '$uAASlug4', '$uAATitle5', '$uAASlug5', '$uAATitle6', '$uAASlug6', 
			'$uAATitle7', '$uAASlug7', '$uAATitle8', '$uAASlug8', '$uAATitle9', '$uAASlug9', 
			'$uAATitle10', '$uAASlug10', '$soldHTitle', '$soldHSlug', '$soldHDesc', 
			'$recentSucTitle1', '$recentSucSlug1', '$recentSucDesc1', 
			'$recentSucTitle2', '$recentSucSlug2', '$recentSucDesc2'
			)
		");
		/* Complete submission */
		$store_info;
		// Close Database connection
		mysqli_close($con);
    $random = rand(0,3000);
    header('Location: step2.php?'.$random);
		//header('Location: step2.php');
	}	
?>	