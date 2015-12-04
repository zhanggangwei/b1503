<?php 

if($_SERVER['SERVER_ADDR'] == '114.215.91.216'){
	// 线上服务器
	// database host
	$db_host   = "localhost:3306";

	// database name
	$db_name   = "c1503";

	// database username
	$db_user   = "root";

	// database password
	$db_pass   = "root123456";

	// table prefix
	$prefix    = "ecs_";

	$timezone    = "PRC";

	$cookie_path    = "/";

	$cookie_domain    = "";

	$session = "1440";

	define('EC_CHARSET','utf-8');

	define('ADMIN_PATH','admin');

	define('AUTH_KEY', 'this is a key');

	define('OLD_AUTH_KEY', '');

	define('API_TIME', '2015-12-01 21:12:24');
}else{
	// database host
	$db_host   = "localhost:3306";

	// database name
	$db_name   = "c1503";

	// database username
	$db_user   = "root";

	// database password
	$db_pass   = "123456";

	// table prefix
	$prefix    = "ecs_";

	$timezone    = "PRC";

	$cookie_path    = "/";

	$cookie_domain    = "";

	$session = "1440";

	define('EC_CHARSET','utf-8');

	define('ADMIN_PATH','admin');

	define('AUTH_KEY', 'this is a key');

	define('OLD_AUTH_KEY', '');

	define('API_TIME', '2015-12-01 21:12:24');

	
}
define('DEBUG_MODE',2);

?>