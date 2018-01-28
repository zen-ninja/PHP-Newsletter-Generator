<?php
	error_reporting(E_ALL);
	ini_set("error_reporting", E_ALL);

	include('functions.php');
	include('connections.php');

	$query = mysqli_query($con, "SELECT * FROM news_template");
	
	if (isset($_POST['template_sel'])){
		session_start();
		$_SESSION['template'] = $_POST['template_select'];
		$selected_Template = $_SESSION['template'];
	}	
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Select a Newsletter Template</title>
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
					<h1 class="nomarg">Select Newsletter Template</h1>
					<p>If the design of the newsletter has changed, please select a template below that suits the need of the newsletter.</p> 
					<p>Upon selecting "Submit" we can get started.</p>
					<p><b>NOTE:</b>The options at the bottom (that have been grayed out) are not to be used, these are for the editor options in step 2.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<?php
						if (!isset($_POST['template_select'])){ ?>
							<select id="temp_sel" name="template_select" class="form-control" style="width:75%;float:left;margin-right:20px">
							<option value="none">--Select Template--</option>
						<?php
						while ($row = $query->fetch_assoc()){ ?>
    						<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
						<?php    
						}
						echo "</select>"; ?>
							<input type="submit" name="template_sel" value="Submit" class="btn btn-primary">
						<?php }
						else{ ?>
							<p>You have selected the <b><?php echo $selected_Template; ?></b> Template.</p>
							<a href="step1.php" class="btn btn-success">Lets get started!</a>
						<?php }	
						?>						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>