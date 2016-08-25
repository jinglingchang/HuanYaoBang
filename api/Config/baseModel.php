<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/19
 * Time: 上午9:15
 */
class baseModel
{

    public function createObjectAttr($array)
    {

        if (is_array($array)) {

            $this->getArrayKeys($array);

        }

    }

    public function getArrayKeys($array)
    {

        if (is_array($array)) {

            $array_keys = array_keys($array);

            if (count($array_keys) > 0 && is_array($array_keys)) {

                foreach($array_keys as $key => $value ){

                    $this->setObjectValue($value,$array[$value]);
                }
            }
        }

    }


    public function setObjectValue($name, $value)
    {

        if (!empty($name) && isset($value)) {

            $this->$name = $value;

        }

    }

}