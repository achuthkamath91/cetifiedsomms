<?php
include 'config.php';


// On Submit of the form..
if(isset($_POST['submit'])){}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="Wine,review,best wines">
		<meta name="author" content="Cetifiedsomms">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cetifiedsomms</title>
		<link rel="stylesheet" href="customStyle.css" />
		
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include 'view/header.php';?>
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<h1>Cetifiedsomms</h1>
					<p>This is a Landing Page</p>				
				</div>
			
			</div>				
		</div>
		<?php include 'view/footer.php';?>	
	</body>
</html> 