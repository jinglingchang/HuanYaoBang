<?php

class website
{

    public function __construct()
    {
        include_once 'defined.php';

        include_once 'basicViewModule.php';

        include_once 'baseModel.php';

        /**
         * 载入 路由 规则
         */
        include_once 'Dispatcher.class.php';

        header("Content-type:text/html;charset=utf-8");
    }

    public function run()
    {

        //路由处理

        $this->initializationRoute();
    }

    private function initializationRoute()
    {

        $route = new Dispatcher();

        if (!empty($route->conrtoller_name) && !empty($route->action_name)) {

            import('controller.' . $route->conrtoller_name);

            if (class_exists($route->conrtoller_name . 'Controller')) {

                $className = $route->conrtoller_name . 'Controller';

                $class = new $className();

                if ($class && method_exists($class, $route->action_name)) {

                    call_user_func(array(&$class, $route->action_name));

                } else{

                    echo '方法不存在';
                }

            } else {

                echo '控制层不存在';

            }
        }
    }
}

?>
