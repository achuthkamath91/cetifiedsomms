<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
<<<<<<< HEAD
define('DBNAME', 'somms');
=======
define('DBNAME', 'moss');
>>>>>>> 2db5f5f7e1b2c60ffa43633b5b617b11162d7bc2
if (!CMS) {
	define('HOME_PATH', '/');
	define('CONFIG_PATH', 'config/');
	define('CSS_PATH', 'resources/css/');
	define('IMAGES_PATH', 'resources/images/');
	define('JS_PATH', 'resources/js/');
	define('MODEL_PATH', 'model/');
	define('CONTROLLER_PATH', 'controller/');
	define('VIEW_PATH', 'view/');
}else{
	define('CSS_PATH', 'resources/css/');
	define('IMAGES_PATH', 'resources/images/');
	define('JS_PATH', '/resources/js/');
	define('INCLUDES_PATH', '/cms/model/');
}
?>