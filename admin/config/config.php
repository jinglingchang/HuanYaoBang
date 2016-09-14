<?php


session_start();

header("Content-type: text/html; charset=utf-8");

defined('ROOTPATH') or define('ROOTPATH', getcwd());

defined('project') or define('project', 'admin');

defined('APIURL') or define('APIURL','http://localhost/HuanYaoBang/api');

defined('WebSiteUrl') or define('WebSiteUrl', 'http://' . $_SERVER['HTTP_HOST'] . '/HuanYaoBang/' . project);

defined('FOOTBASIC') or define('FOOTBASIC', ROOTPATH . '/Db/');

defined('FOOTCLASS') or define('FOOTCLASS', ROOTPATH . '/Model/');

defined('MAINACTION') or define('MAINACTION', ROOTPATH . '/Lib/');

defined('environment') or define('environment', 'produce');

defined('UPLOADFILE') or define('UPLOADFILE', '/web/www/HuanYaoBang/web/Public/upload');

defined('STATICHTML') or define('STATICHTML', '/home/wwwroot/default/medhelper/Public/html');

defined('FOOTERURL') or define('FOOTERURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');


defined('MAINPUBLIC') or define('MAINPUBLIC', WebSiteUrl . '/public/default');


defined('FOOTFILES') or define('FOOTFILES', ROOTPATH . '/files/');


include_once 'extends.php';

include_once 'action.php';

include_once(FOOTBASIC . 'ActiveRecord.class.php');

include_once(FOOTBASIC . 'view.php');

$_ENV['DIR'] = 'website';

 if ($handle = opendir(FOOTCLASS)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn' && $file != '.DS_Store') {
            include_once(FOOTCLASS . $file);
        }
    }
    closedir($handle);
}

if ($handle = opendir(MAINACTION)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn' && $file != '.DS_Store') {
            include_once(MAINACTION . $file);
        }
    }
    closedir($handle);
}
?>