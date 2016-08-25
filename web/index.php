<?php
ini_set('display_errors', 'On');

set_time_limit(0);

ini_set('display_errors','On');

if (empty($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/index.php') {

    defined('URL_MODEL') or define('URL_MODEL', '0');

    $_GET[VAR_MODULE] = 'homepage';

    $_GET[VAR_ACTION] = 'index';
}

include 'Config/bootstrap/bootstrap.php';

$website = new website();

$website->run();

?>



