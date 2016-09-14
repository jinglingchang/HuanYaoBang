<?php
ini_set('display_errors', 'On');

set_time_limit(0);

defined('VAR_MODULE') or define('VAR_MODULE', 'a');

defined('VAR_ACTION') or define('VAR_ACTION', 'v');

defined('VAR_GROUP') or define('VAR_GROUP', 'g');

defined('VAR_CUSTOMIZE') or define('VAR_CUSTOMIZE', 'c');

if (empty($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/index.php') {

    defined('URL_MODEL') or define('URL_MODEL', '0');

    $_GET[VAR_MODULE] = 'homepage';

    $_GET[VAR_ACTION] = 'index';
}

include 'Config/bootstrap/bootstrap.php';

$website = new website();

$website->run();

?>



