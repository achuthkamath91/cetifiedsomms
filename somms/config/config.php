<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'somms');
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