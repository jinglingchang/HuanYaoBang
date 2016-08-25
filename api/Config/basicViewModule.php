<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/15
 * Time: 下午2:17
 */
class basicViewModule
{
    public $field_array;

    protected $check_operation_info_stauts;

    protected $check_field_empty = 1;

    public function checkFieldEmpty()
    {
        foreach ($this->field_array as $field_array => $field_value) {

            if (empty($_REQUEST[$field_value])) {

                $this->check_field_empty = 0;

                break;
            }
        }
    }

    public function checkBaseInfo()
    {

        $request = $_REQUEST;

        $this->checkCityInfo($request);

        $this->checkOperationInfo($request['operation_info']);

        $this->checkPhone($request['phone']);
    }

    public function checkCityInfo($info)
    {

        $this->checkCity($info['city']);

        $this->checkArea($info['area']);

        $this->checkProvince($info['province']);
    }

    public function checkCity($city)
    {

        if (!empty($city)) {


        }

    }

    public function checkArea($area)
    {

        if (!empty($area)) {


        }

    }

    public function checkProvince($province)
    {

        if (!empty($province)) {


        }

    }

    public function checkOperationInfo($info)
    {

        if (!empty($info)) {

            $array = array('头部手术', '眼耳鼻部手术', '口腔手术', '四肢手术', '胸部手术', '胃部手术', '肝胆手术', '肠道手术',

                '子宫手术', '甲状腺手术', '下肢血管手术', '背部手术');

            $key = array_search($info, $array);

            if ($key === false) {

                $this->check_operation_info_stauts = 0;

            } else {

                $this->check_operation_info_stauts = 1;
            }

        }
    }

    public function checkPhone($phone)
    {


    }


}