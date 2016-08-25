<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/23
 * Time: 上午11:05
 */
class DoctorController
{

    public function create()
    {

        $field_array = array('name', 'sex', 'hospital_name', 'year_money', 'department_name', 'department_detail_name', 'openid');

        foreach ($field_array as $value) {

            if (empty($_REQUEST[$value])) {

                $array = array('code' => 101, 'status' => "参数不全");

                echoJson($array);

                die;
            }
        }

        import('model.Doctor');

        $doctorModel = new DoctorModel();

        $doctorModel->createDoctor($_REQUEST);

        echoJson($doctorModel);
    }

    public function show()
    {

        if (!empty($_REQUEST['openid'])) {

            $openid = $_REQUEST['openid'];

            import('model.Doctor');

            $doctorModel = new DoctorModel();

            $doctorModel->getDoctorInfoByOpenId($openid);

            echoJson($doctorModel);
        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);
        }
    }

}