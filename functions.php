<?php
	error_reporting(E_ALL);
	ini_set("error_reporting", E_ALL);
	
	/* Date Shortcodes */
	$thisMonthNo = date('m');
	$thisYear = date('Y');
	$thisMonth = date('F Y');
	
	/* URL Shortcodes */
	$mainsite = "yourdomain/newsletter/ontheblog/mainsite/";	
	$spacer = "yourdomain/newsletter/ontheblog/mainsite/spacers/white.jpg";
	$spacer2 = "yourdomain/newsletter/ontheblog/mainsite/spacers/14white.jpg";
	$spacer14 = "yourdomain/newsletter/ontheblog/2015/08/images/spacers/14gray.jpg";
	$newsMedia = "yourdomain/newsletter/ontheblog/".$thisYear."/".$thisMonthNo."/images/news/";
	$upcomings = "yourdomain/newsletter/ontheblog/".$thisYear."/".$thisMonthNo."/images/upcoming/";
	$succeses = "yourdomain/newsletter/ontheblog/".$thisYear."/".$thisMonthNo."/images/success/";
	$articleSlug = "yourdomain/news/";		

	function dashboard(){
		echo '
			<!DOCTYPE html>
			<html>
				<head>
					<meta charset="utf-8">
					<title>Welcome to the Newsletter Generator</title>
					<link rel="stylesheet" type="text/css" href="css/newsletter.min.css">
					<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">					
					<link rel="stylesheet" type="text/css" href="css/bg.css">
					<script type="text/javascript" src="../../js/2015/jquery.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
				</head>
				<body>
					<div class="page">
						<div class="row">
							<div class="col-xs-12">
								<h1 class="nomarg">Welcome to the Newsletter Generator</h1>
								<p>This Generator has been created to make life a little easier for the monthly newsletter for [ClientName].</p> 
								<p>The pages will automatically redirect to the next steps to proceed to the finished newsletter.</p>
								<p><a href="jump.html" target="_blank" class="btn btn-success">Jumpstart me!!</a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<p>The very first step is to add the article images.</p>								
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a href="images/" target="_blank" class="btn btn-danger">Add Images</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<p>Next, we need to select a template and add the articles.</p>								
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a href="select_template.php" target="_blank" class="btn btn-success">Lets get started!</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<p>Create & Download your newly cropped Full-Size Images Zip:</p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a href="zip_my_files.php" target="_blank" class="btn btn-info">Download!</a>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<p>Next, we will need to edit the url-slugs.</p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<a href="step2.php" target="_blank" class="btn btn-primary">Editing Time!!</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<p>The final step is the output. This saves the file as "index.html" in the current month already on the server for us. </p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<a href="newsletter.php" target="_blank" class="btn btn-info">Preview our work!</a>								
							</div>
						</div>
					</div>
				</body>
			</html>
		';
	}
?>