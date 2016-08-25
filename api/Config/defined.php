<?php

session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);

defined('ROOT_DIR') or define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT'].'/HuanYaoBang');

defined('WEBSITE_ROOT_DIR') or define('WEBSITE_ROOT_DIR',ROOT_DIR.'/api');

defined('WEBSITE_ROOT_CRONTROLLER_DIR') or define('WEBSITE_ROOT_CRONTROLLER_DIR',WEBSITE_ROOT_DIR.'/Controller');

defined('WEBSITE_ROOT_Model_DIR') or define('WEBSITE_ROOT_Model_DIR',WEBSITE_ROOT_DIR.'/Model');

defined('WEBSITE_ROOT_Dal_DIR') or define('WEBSITE_ROOT_Dal_DIR',WEBSITE_ROOT_DIR.'/Dal');

defined('WEBSITE_ROOT_ViewModule_DIR') or define('WEBSITE_ROOT_ViewModule_DIR',WEBSITE_ROOT_DIR.'/ViewModule');

defined('ARTICLEURL') or define('ARTICLEURL','http://localhost/HuanYaoBang/web/');

include_once ROOT_DIR.'/config/include.php';

?>
