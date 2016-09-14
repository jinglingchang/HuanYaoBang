<?php

/**
 * 模版基类
 */
class Action {

    public $smarty;
    public $display_page;
    public $dir_name;
    public $module_dir_name;
    public $smarty_dir;
    public $tVar = array();
    public $userOpenId;
    public $requset;

    public function __construct() {

        header("Content-type: text/html; charset=utf-8");

    }

    public function countPage($finaPage, $limit) {

        if (!empty($finaPage)) {

            $this->resume_totle_page = ceil($finaPage / $limit);
        }
    }

    #判断用户使用哪个设备访问 动态加载交互文件

    public function judgeUserDeivceVisit() {

        if (stristr($_SERVER['HTTP_USER_AGENT'], 'Android')) {//返回值中是否有Android这个关键字
            $device_id = 3;
        } else if (stristr($_SERVER['HTTP_USER_AGENT'], 'iPhone')) {

            $device_id = 1;
        } else {

            $device_id = 1;
        }

        return $device_id;
    }

    public function displayWap($page = '') {

        $this->initView();

        if (!file_exists($this->smarty->template_dir)) {

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir, 0777);
        }

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')) {

            $suffix = '_wap';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Android')) {

            $suffix = '_wap';
        } else {

            $suffix = '';
        }

        if (!empty($page)) {

            $displayPage = $page . $suffix;
        } else {

            $displayPage = $this->display_page . $suffix;
        }

        if (!file_exists($this->smarty->template_dir . $displayPage . '.tpl')) {

            fopen($this->smarty->template_dir . $displayPage . '.tpl', "w+");

            chmod($this->smarty->template_dir . $displayPage . '.tpl', 0777);
        }


        //$user_id = getUserId();

        if (!empty($_SESSION['user_info']['user_id'])) {

            $userDal = new userDal();

            $user_info = $userDal->getUserInfoByUserId($_SESSION['user_info']['user_id']);

            $user_id = $_SESSION['user_info']['user_id'];
        } else {

            $user_id = 0;
        }

        $this->smarty->assign('user_info', $user_info);

        $this->smarty->assign('user_id', $user_id);

        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('path', WebSiteUrlPublicPath);

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);

        $this->smarty->assign('domain_url', SERVICEURL);

        $this->smarty->display($displayPage . '.tpl');

        
    }

    private function setPageDisplay() {

        if ($this->smarty) {

            if (!empty($this->display_page)) {
                
            } else {

                $this->display_page = ACTION_NAME;
            }

            if (!empty($this->dir_name)) {

                $this->smarty_dir = $this->dir_name;
            } else {

                $this->smarty_dir = MODULE_DIR;
            }

            if (!empty($this->module_dir_name)) {

                $module_dir = $this->module_dir_name;
            } else {

                $module_dir = MODULE_DIR;
            }

            $dir = LIB . ucfirst($module_dir) . '/Tpl/' . ucfirst($this->smarty_dir) . '/';

            $this->smarty->template_dir = $dir;
        }
    }

    private function initView() {

        if ($this->smarty != NULL) {
            
        } else {

            include ROOT_DIR . '/Config/bootstrap/smarty.php';

            $this->smarty = $smarty;
        }

        $this->setPageDisplay();

        if ($this->tVar && $this->smarty) {

            $this->smarty->assign($this->tVar);
        }
    }

    public function setDisplayDir($dir) {

        if (!empty($dir)) {

            $this->setDir($dir);

            $this->setFileDir($dir);
        }
    }

    public function setDir($dir) {

        $this->dir_name = $dir;
    }

    public function setFileDir($module) {

        if (!empty($module)) {

            $this->module_dir_name = $module;
        }
    }

    public function fetch($tpl) {

        $this->initView();

        if (!empty($tpl)) {

            $page = $tpl . '.tpl';
        } else {

            $page = $this->display_page . '.tpl';
        }


        if (!empty($_SESSION['user_info']['user_id'])) {

            $userDal = new userDal();

            $user_info = $userDal->getUserInfoByUserId($_SESSION['user_info']['user_id']);

            $user_id = $_SESSION['user_info']['user_id'];
        } else {

            $user_id = 0;
        }

        $this->smarty->assign('user_info', $user_info);

        $this->smarty->assign('user_id', $user_id);

        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('path', WebSiteUrlPublicPath);

        $this->smarty->assign('domain_url', SERVICEURL);

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);

        $this->smarty->assign('module',MODULE_DIR.'/'.ACTION_NAME);

        return $this->smarty->fetch($page);
    }

    public function configSmarty($page) {

        if (!file_exists($this->smarty->template_dir)) {

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir, 0777);
        }

        if (!empty($page)) {

            $displayPage = $page;
        } else {

            $displayPage = $this->display_page;
        }

        $this->displayPage = $displayPage;


        if (!file_exists($this->smarty->template_dir . $displayPage . '.tpl')) {

            fopen($this->smarty->template_dir . $displayPage . '.tpl', "w+");

            chmod($this->smarty->template_dir . $displayPage . '.tpl', 0777);
        }


        if (!empty($_SESSION['user_info']['user_id'])) {

            $userDal = new userDal();

            $user_info = $userDal->getUserInfoByUserId($_SESSION['user_info']['user_id']);

            $user_id = $_SESSION['user_info']['user_id'];

            $userModel = new userModel();

            $logo = $userModel->getPhoto($user_id);

            $this->smarty->assign('logo', $logo);

        } else {

            $user_id = 0;
        }

        $this->smarty->assign('user_info', $user_info);

        $this->smarty->assign('user_id', $user_id);

        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('path', WebSiteUrlPublicPath);

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);

        $this->smarty->assign('domain_url', SERVICEURL);
    }

    /**
     * is_menu(1:有菜单，0无菜单) 是否显示菜单   menu_title 二级菜单标题  header_type 头类 
     */
    public function displayNew($page = '' , $menu_title="",$header_type = 1,$header_title,$default = 0) {

        $this->initView();

        $this->configSmarty($page);

        if($default == 0){

          

             // $routeModel = new routeModel();

             // $routeModel->jump();
        }

        if($header_type == 1){

            if(!empty($_SESSION['user_info']['user_id'])){

                $message_info = M('message')->where("receiver_id = ".$_SESSION['user_info']['user_id']." and is_read = 1")->field('count(id) as message_count')->find();

                $message_tip = ($message_info['message_count'] > 0) ? 1:0;

            }

        }

        $content = $this->fetch($this->displayPage);

        $this->assign('content', $content);

        $this->assign('message_tip',$message_tip);

        $this->assign('title',$menu_title);

        $this->assign('header_type',$header_type);

        $this->assign('header_title',$header_title);

        $this->setDisplayDir('homepage');

        $this->display('main');
    }

    public function display($page = '') {

        $this->initView();

        if (!file_exists($this->smarty->template_dir)) {

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir, 0777);
        }

        if (!empty($page)) {

            $displayPage = $page;
        } else {

            $displayPage = $this->display_page;
        }


        if (!file_exists($this->smarty->template_dir . $displayPage . '.tpl')) {

            fopen($this->smarty->template_dir . $displayPage . '.tpl', "w+");

            chmod($this->smarty->template_dir . $displayPage . '.tpl', 0777);
        }
        
        //$user_id = getUserId();

        if (!empty($_SESSION['user_info']['user_id'])) {

            $userDal = new userDal();

            $user_info = $userDal->getUserInfoByUserId($_SESSION['user_info']['user_id']);

            $user_id = $_SESSION['user_info']['user_id'];
        } else {

            $user_id = 0;
        }

        $this->smarty->assign('user_info', $user_info);

        $this->smarty->assign('user_id', $user_id);

        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('path', WebSiteUrlPublicPath);

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);

        $this->smarty->assign('domain_url', SERVICEURL);

        $this->smarty->display($displayPage . '.tpl');
    }

    public function assign($name, $value = '') {

        if (is_array($name)) {


            $this->tVar = array_merge($this->tVar, $name);
        } else {

            $this->tVar[$name] = $value;
        }
    }

    public function errorDisplay($errorArray) {

        if (!empty($errorArray['error']) && is_array($errorArray['error'])) {
            
        }
    }

    public function jsJump($url) {

        exit('<script>window.location.href="' . $url . '";</script>');
    }

}

?>