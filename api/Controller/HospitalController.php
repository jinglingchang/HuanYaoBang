<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 上午10:43
 */
class HospitalController
{

    //医院查询

    public function search(){

        if(!empty($_REQUEST['name'])){

            import('model.Hospital');

            $hospitalModel = new HospitalModel();

            $hospitalModel->searchHospital($_REQUEST['name']);

            echoJson($hospitalModel->hospital_list);

        } else{

            $array = array('code' => 101,'status'=>"参数不全");

            echoJson($array);
        }
    }

    //医院默认列表

    public function lists(){

        import('model.Hospital');

        $hospitalModel = new HospitalModel();

        $hospitalModel->getHospitalListByType();

        echoJson($hospitalModel->default_hospital_list);
    }

}