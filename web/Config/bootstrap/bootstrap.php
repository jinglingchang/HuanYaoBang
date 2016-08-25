<?php

class website {

    public function __construct() {

        //session_start();

        include_once 'defined.php';

        include_once 'Action.php';

        /**
         * 载入 路由 规则
         */
        include_once 'Dispatcher.class.php';
    }

    public function run() {
        /**
         * 处理URL 以及 执行Action
         */
        $this->initializationWebsiteUrl();
    }

    private function initializationWebsiteUrl() {

        /**
         * 路由处理
         */
        $url = new Dispatcher();
    
        /**
         * 加载该来源中 控制层文件
         */
        if ($this->fileExists(LIB . MODULE_DIR . '/Controllers/' . MODULE_NAME_CONTROLLER . '.class.php')) {

            
            include_once LIB . MODULE_DIR . '/Controllers/' . MODULE_NAME_CONTROLLER . '.class.php';

            if (class_exists(MODULE_NAME_CONTROLLER_NEW)) {


                /**
                 * 实例化类
                 */
                $className = MODULE_NAME_CONTROLLER_NEW;


                $module = new $className();

                if ($module && method_exists($module, ACTION_NAME)) {

                    /**
                     * 执行方法
                     */
                    call_user_func(array(&$module, ACTION_NAME));
                } else {


                    $Parameter = 1;
                }
            }
        } else {

            $Parameter = 1;
        }
    }

    private function fileExists($file) {

        if (file_exists($file)) {

            return true;
        } else {

            return false;
        }
    }

}

?>
