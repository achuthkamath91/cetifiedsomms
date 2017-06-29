<?php
define('CMS',false);

include 'config/config.php';
include MODEL_PATH.'mysqliDB.php';
include CONTROLLER_PATH.'page.php';

$db = new MysqliDb(DBHOST,DBUSER,DBPASS,DBNAME);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$URI = htmlspecialchars($_SERVER['REQUEST_URI']);
$simpleURL = explode('/somms',$URI);
$url = array($simpleURL);
$URI = $url[0][1];
$dbConnect = $db->connect();
$page = new Page($db);
$res = $page->getPage($URI);
if(isset($res)){
	$page_file = $res[0]['page_file'];
}else{
	"page Not found";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="Wine,review,best wines">
		<meta name="author" content="Cetifiedsomms">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cetifiedsomms</title>
		<link rel="stylesheet" href=<?php echo CSS_PATH?>customStyle.css />
		
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href=<?php echo CSS_PATH?>bootstrap.min.css>

		<!-- jQuery library -->
		<script src=<?php echo JS_PATH?>jquery-3.2.1.min.js></script>

		<!-- Latest compiled JavaScript -->
		<script src=<?php echo JS_PATH?>bootstrap.min.js></script> 
		
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
				
			<?php include VIEW_PATH.$page_file; ?>	
			
			</div>				
		</div>
		<?php include 'view/footer.php';?>	
	</body>
</html> 