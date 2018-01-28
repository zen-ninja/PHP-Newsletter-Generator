<?php
  include('connections.php');
	function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	} 

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
	}	
	
	//if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["submit"])){
		/* User Input Variables */
		$firstCol = $secondCol = $iTNtitle = $iTNdesc = $iTNSlug = $iTMtitle = $iTMdesc = $iTMSlug = $uAHTitle = $uAHDesc = "";
		$uAHSlug = $uAATitle1 = $uAASlug1 = $uAATitle2  = $uAASlug2 = $uAATitle3  = $uAASlug3 = $uAATitle4  = $uAASlug4 = "";
		$uAATitle5  = $uAASlug5 = $uAATitle6  = $uAASlug6 = $uAATitle7  = $uAASlug7 = $uAATitle8  = $uAASlug8 ="";
		$uAATitle9  = $uAASlug9 = $uAATitle10  = $uAASlug10 = $recentSucTitle1 = $recentSucDesc1 = $recentSucSlug1 = "";
		$recentSucTitle2 = $recentSucDesc2 = $recentSucSlug2 = $soldHTitle = $soldHDesc = $soldHSlug = "";
		//first column
   		if (empty($_POST["firstCol"])) { 
     		$firstCol = "";
   		} else {
     	  $firstCol = test_input($_POST["firstCol"]);
        //$firstCol = preg_replace("/\n(\s*\n)+/", "<p></p>", $firstCol);
			  $firstCol = preg_replace("/\n(\s*\n)+/", "</p><p>", $firstCol);
			  $firstCol = '<p style="padding:0">'.$firstCol.'</p>';
   		}
   		//second column
   		if (empty($_POST["secondCol"])) { 
     		$secondCol = "";
   		} else {
     		$secondCol = test_input($_POST["secondCol"]);
        //$secondCol = preg_replace("/\n(\s*\n)+/", "<p></p>", $secondCol);
			  $secondCol = preg_replace("/\n(\s*\n)+/", "</p><p>", $secondCol);
			  $secondCol = '<p style="padding:0">'.$secondCol.'</p>';
   		}
   		//ITN Title
   		if (empty($_POST["iTNtitle"])) { 
     		$iTNtitle = "";
   		} else {
     		$iTNtitle = test_input($_POST["iTNtitle"]); 
   		}
      //ITN Slug
      if (empty($_POST["iTNSlug"])) { 
        $iTNSlug = preg_replace("/\s+/", "-", strtolower($iTNtitle));
      } else {        
        $iTNSlug = preg_replace("/\s+/", "-", strtolower($_POST["iTNSlug"]));
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
   		}
      //ITM Slug
      if (empty($_POST["iTMSlug"])) { 
        $iTMSlug = preg_replace("/\s+/", "-", strtolower($iTMtitle));
      } else {        
        $iTMSlug = preg_replace("/\s+/", "-", strtolower($_POST["iTMSlug"]));
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
   		}
   		// $uAA Slug 1
   		if (empty($_POST["uAASlug1"])) {
   			$uAASlug1 = preg_replace("/\s+/", "-", strtolower($uAATitle1));
   		}
   		else{
   			$uAASlug1 = test_input($_POST["uAASlug1"]);
   			$uAASlug1 = preg_replace("/\s+/", "-", strtolower($uAASlug1));
   		}
   		// $uAA Title 2
   		if (empty($_POST["uAATitle2"])) { 
     		$uAATitle2 = "";
   		} else {
     		$uAATitle2 = test_input($_POST["uAATitle2"]);     		
   		}
   		// $uAA Slug 2
   		if (empty($_POST["uAASlug2"])) {
   			$uAASlug2 = preg_replace("/\s+/", "-", strtolower($uAATitle2));
   		}
   		else{
   			$uAASlug2 = test_input($_POST["uAASlug2"]);
   			$uAASlug2 = preg_replace("/\s+/", "-", strtolower($uAATitle2));
   		}
   		// $uAA Title 3
   		if (empty($_POST["uAATitle3"])) { 
     		$uAATitle3 = "";
   		} else {
     		$uAATitle3 = test_input($_POST["uAATitle3"]);     		
   		}
   		// $uAA Slug 3
   		if (empty($_POST["uAASlug3"])) {
   			$uAASlug3 = preg_replace("/\s+/", "-", strtolower($uAATitle3));
   		}
   		else{
   			$uAASlug3 = test_input($_POST["uAASlug3"]);
   			$uAASlug3 = preg_replace("/\s+/", "-", strtolower($uAATitle3));
   		}
   		// $uAA Title 4
   		if (empty($_POST["uAATitle4"])) { 
     		$uAATitle4 = "";
   		} else {
     		$uAATitle4 = test_input($_POST["uAATitle4"]);     		
   		}
   		// $uAA Slug 4
   		if (empty($_POST["uAASlug4"])) {
   			$uAASlug4 = preg_replace("/\s+/", "-", strtolower($uAATitle4));
   		}
   		else{
   			$uAASlug4 = test_input($_POST["uAASlug4"]);
   			$uAASlug4 = preg_replace("/\s+/", "-", strtolower($uAATitle4));
   		}
   		// $uAA Title 5
   		if (empty($_POST["uAATitle5"])) { 
     		$uAATitle5 = "";
   		} else {
     		$uAATitle5 = test_input($_POST["uAATitle5"]);     		
   		}
   		// $uAA Slug 5
   		if (empty($_POST["uAASlug5"])) {
   			$uAASlug5 = preg_replace("/\s+/", "-", strtolower($uAATitle5));
   		}
   		else{
   			$uAASlug5 = test_input($_POST["uAASlug5"]);
   			$uAASlug5 = preg_replace("/\s+/", "-", strtolower($uAATitle5));
   		}
   		// $uAA Title 6
   		if (empty($_POST["uAATitle6"])) { 
     		$uAATitle6 = "";
   		} else {
     		$uAATitle6 = test_input($_POST["uAATitle6"]);     		
   		}
   		// $uAA Slug 6
   		if (empty($_POST["uAASlug6"])) {
   			$uAASlug6 = preg_replace("/\s+/", "-", strtolower($uAATitle6));
   		}
   		else{
   			$uAASlug6 = test_input($_POST["uAASlug6"]);
   			$uAASlug6 = preg_replace("/\s+/", "-", strtolower($uAATitle6));
   		}
   		// $uAA Title 7
   		if (empty($_POST["uAATitle7"])) { 
     		$uAATitle7 = "";
   		} else {
     		$uAATitle7 = test_input($_POST["uAATitle7"]);     		
   		}
   		// $uAA Slug 7
   		if (empty($_POST["uAASlug7"])) {
   			$uAASlug7 = preg_replace("/\s+/", "-", strtolower($uAATitle7));
   		}
   		else{
   			$uAASlug7 = test_input($_POST["uAASlug7"]);
   			$uAASlug7 = preg_replace("/\s+/", "-", strtolower($uAATitle7));
   		}
   		// $uAA Title 8
   		if (empty($_POST["uAATitle8"])) { 
     		$uAATitle8 = "";
   		} else {
     		$uAATitle8 = test_input($_POST["uAATitle8"]);     		
   		}
   		// $uAA Slug 8
   		if (empty($_POST["uAASlug8"])) {
   			$uAASlug8 = preg_replace("/\s+/", "-", strtolower($uAATitle8));
   		}
   		else{
   			$uAASlug8 = test_input($_POST["uAASlug8"]);
   			$uAASlug8 = preg_replace("/\s+/", "-", strtolower($uAATitle8));
   		}
   		// $uAA Title 9
   		if (empty($_POST["uAATitle9"])) { 
     		$uAATitle9 = "";
   		} else {
     		$uAATitle9 = test_input($_POST["uAATitle9"]);     		
   		}
   		// $uAA Slug 9
   		if (empty($_POST["uAASlug9"])) {
   			$uAASlug9 = preg_replace("/\s+/", "-", strtolower($uAATitle9));
   		}
   		else{
   			$uAASlug9 = test_input($_POST["uAASlug9"]);
   			$uAASlug9 = preg_replace("/\s+/", "-", strtolower($uAATitle9));
   		}
   		// $uAA Title 10
   		if (empty($_POST["uAATitle10"])) { 
     		$uAATitle10 = "";
   		} else {
     		$uAATitle10 = test_input($_POST["uAATitle10"]);     		
   		}
   		// $uAA Slug 10
   		if (empty($_POST["uAASlug10"])) {
   			$uAASlug9 = preg_replace("/\s+/", "-", strtolower($uAATitle9));
   		}
   		else{
   			$uAASlug10 = test_input($_POST["uAASlug10"]);
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
		//$upd_info = mysqli_query($con, "SELECT * FROM news_gen");
		//$update_rec = "UPDATE news_gen SET firstCol = $firstCol WHERE id = 8";
		
		//assign values
		$firstCol = $_POST['firstCol'];
		$secondCol = $_POST['secondCol'];
		$iTNtitle = $_POST['iTNtitle'];
		$iTNSlug = $_POST['iTNSlug'];
		$iTNdesc = $_POST['iTNdesc'];
		$iTMtitle = $_POST['iTMtitle'];
		$iTMSlug = $_POST['iTMSlug'];
		$iTMdesc = $_POST['iTMdesc'];
		$uAHTitle = $_POST['uAHTitle'];
		$uAHSlug = $_POST['uAHSlug'];
		$uAHDesc = $_POST['uAHDesc'];
		$uAATitle1 = $_POST['uAATitle1'];
		$uAASlug1 = $_POST['uAASlug1'];
		$uAATitle2 = $_POST['uAATitle2'];
		$uAASlug2 = $_POST['uAASlug2'];
		$uAATitle3 = $_POST['uAATitle3'];
		$uAASlug3 = $_POST['uAASlug3'];
		$uAATitle4 = $_POST['uAATitle4'];
		$uAASlug4 = $_POST['uAASlug4'];
		$uAATitle5 = $_POST['uAATitle5'];
		$uAASlug5 = $_POST['uAASlug5'];
		$uAATitle6 = $_POST['uAATitle6'];
		$uAASlug6 = $_POST['uAASlug6'];
		$uAATitle7 = $_POST['uAATitle7'];
		$uAASlug7 = $_POST['uAASlug7'];
		$uAATitle8 = $_POST['uAATitle8'];
		$uAASlug8 = $_POST['uAASlug8'];
		$uAATitle9 = $_POST['uAATitle9'];
		$uAASlug9 = $_POST['uAASlug9'];
		$uAATitle10 = $_POST['uAATitle10'];
		$uAASlug10 = $_POST['uAASlug10'];
		$soldHTitle = $_POST['soldHTitle'];
		$soldHSlug = $_POST['soldHSlug'];
		$soldHDesc = $_POST['soldHDesc'];
		$recentSucTitle1 = $_POST['recentSucTitle1'];
		$recentSucSlug1 = $_POST['recentSucSlug1'];
		$recentSucDesc1 = $_POST['recentSucDesc1'];
		$recentSucTitle2 = $_POST['recentSucTitle2'];
		$recentSucSlug2 = $_POST['recentSucSlug2'];
		$recentSucDesc2 = $_POST['recentSucDesc2'];

		$upd_info = mysqli_query($con, "UPDATE news_gen 
			SET 
			ceo_col1 = '$firstCol', 
			ceo_col2 = '$secondCol', 
			itn_title = '$iTNtitle', 
			itn_slug = '$iTNSlug',
			itn_desc = '$iTNdesc', 
			itm_title = '$iTMtitle', 
			itm_slug = '$iTMSlug',
			itm_desc = '$iTMdesc', 
			ua_title = '$uAHTitle', 
			uah_slug = '$uAHSlug', 
			ua_desc = '$uAHDesc', 
			uaa_title1 = '$uAATitle1', 
			uaa_slug1 = '$uAASlug1', 
			uaa_title2 = '$uAATitle2', 
			uaa_slug2 = '$uAASlug2', 
			uaa_title3 = '$uAATitle3', 
			uaa_slug3 = '$uAASlug3', 
			uaa_title4 = '$uAATitle4', 
			uaa_slug4 = '$uAASlug4', 
			uaa_title5 = '$uAATitle5', 
			uaa_slug5 = '$uAASlug5', 
			uaa_title6 = '$uAATitle6', 
			uaa_slug6 = '$uAASlug6', 
			uaa_title7 = '$uAATitle7', 
			uaa_slug7 = '$uAASlug7', 
			uaa_title8 = '$uAATitle8', 
			uaa_slug8 = '$uAASlug8', 
			uaa_title9 = '$uAATitle9', 
			uaa_slug9 = '$uAASlug9', 
			uaa_title10 = '$uAATitle10', 
			uaa_slug10 = '$uAASlug10',
			sh_title = '$soldHTitle', 
			sh_slug = '$soldHSlug', 
			sh_desc = '$soldHDesc', 
			rs_title1 = '$recentSucTitle1', 
			rs_slug1 = '$recentSucSlug1', 
			rs_desc1 = '$recentSucDesc1', 
			rs_title2 = '$recentSucTitle2', 
			rs_slug2 = '$recentSucSlug2', 
			rs_desc2 = '$recentSucDesc2'
			ORDER BY id DESC LIMIT 1"
		);
		
				
		/* Complete submission */
		mysqli_query($con, $upd_info);
		// Close Database connection
		mysqli_close($con);
    $random = rand(0,3000);
		header('Location: newsletter.php?'.$random);
	}	
?>