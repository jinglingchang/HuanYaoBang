<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 上午10:44
 */
class HospitalModel extends baseModel
{

    public function searchHospital($name)
    {

        if (!empty($name)) {


            $hospital_array = array();

            $hospital_list = M('hyb_hospital')->where('name like "%' . $name . '%"')->field('id,name,province,city,area,introduce,create_time,update_time')->select();

            if (count($hospital_list) > 0) {

                foreach ($hospital_list as $key => $value) {

                    import('model.Hospital');

                    $hospitalModel = new HospitalModel();

                    $hospitalModel->getHospitalDetailByArray($value);

                    $hospital_array[] = $hospitalModel;

                }
            }

            $this->hospital_list = $hospital_array;
        }

    }

    public function getHospitalListByType()
    {

        $hospital_level_array = array();

        for ($i = 1; $i <= 3; $i++) {

            $hospital_list = M('hyb_hospital')->where('type = ' . $i)->field('id,name,province,city,area,introduce,create_time,update_time')->select();

            $hospital_array = array();

            if (count($hospital_list) > 0) {

                foreach ($hospital_list as $key => $value) {

                    import('model.Hospital');

                    $hospitalModel = new HospitalModel();

                    $hospitalModel->getHospitalDetailByArray($value);

                    $hospital_array[] = $hospitalModel;
                }
            }

            $hospital_level_array[$i] = $hospital_array;
        }

        $this->default_hospital_list = $hospital_level_array;
    }

    public function getHospitalDetailByArray($array)
    {

        $this->createObjectAttr($array);

        switch ($array['type']) {

            case 1:

                $this->type = '一级甲等';

                break;

            case 2:

                $this->type = '二级甲等';

                break;

            case 3:

                $this->type = '三级甲等';

                break;
        }

        $this->create_time = date('Y-m-d H:i:s', $array['create_time']);

        $this->update_time = date('Y-m-d H:i:s', $array['update_time']);
    }

}