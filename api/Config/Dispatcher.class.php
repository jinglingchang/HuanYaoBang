<?php

class Dispatcher {

    public function dispatcher() {

        switch (URL_MODEL) {

            case '0':

                $this->parsentUrl();

                break;

            case '1':

                $this->parsentPathInfo();

                break;
        }
    }

    private function parsentUrl() {

        $pathInfo = array();

        if (!empty($_REQUEST[VAR_CONTROLLER])) {

            array_push($pathInfo, $_REQUEST[VAR_CONTROLLER]);
        } else {

            array_push($pathInfo, 'homepage');
        }

        if (!empty($_REQUEST[VAR_ACTION])) {

            if (!empty($_REQUEST[VAR_ACTION])) {

                $function = $_REQUEST[VAR_ACTION];
            } else {

                $function = 'index';
            }
            array_push($pathInfo, $function);
        } else {

            array_push($pathInfo, 'index');
        }

        $this->DataProcess($pathInfo);
    }

    private function parsentPathInfo() {

        if (!empty($_SERVER['PATH_INFO'])) {

            $pathInfo = explode(URL_PATHINFO_DEPR, trim($_SERVER['PATH_INFO'], URL_PATHINFO_DEPR));
        } else {

            $pathInfo = array('homepage', 'index');
        }

        $this->DataProcess($pathInfo);
    }

    /**
     * 处理数组 来获取方法和操作
     */
    private function DataProcess($pathArray)
    {

        $array = array('model', 'action');

        foreach ($array as $k => $v) {

            if (!empty($pathArray[0])) {

                $$v = $pathArray[0];

                array_shift($pathArray);
            }
        }

        defined('WEBISTE_API_CONTROLLER') or define('WEBISTE_API_CONTROLLER',ucfirst($model));

        defined('WEBISTE_API_ACTION') or define('WEBISTE_API_ACTION',$action);

        $this->conrtoller_name = WEBISTE_API_CONTROLLER;

        $this->action_name = WEBISTE_API_ACTION;
    }
}

?>