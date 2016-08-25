<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/23
 * Time: 上午11:19
 */
class DoctorModel extends baseModel
{

    public function getDoctorInfoByOpenId($openid){

        if(!empty($openid)){

            $doctor_info = M('hyb_doctor')->where('openid like "' . $openid . '"')->find();

            if($doctor_info != NULL){

                $this->createObjectAttr($doctor_info);
            }

        }
    }

    public function createDoctor($data)
    {

        if (is_array($data)) {

            $doctor_info = M('hyb_doctor')->where('openid like "' . $data['openid'] . '"')->find();

            if ($doctor_info == NULL) {

                $operate_status = 1;

            } else {

                $operate_status = 2;
            }

            $create['openid'] = $data['openid'];

            $create['name'] = $data['name'];

            $create['sex_id'] = $data['sex'] == '男' ? 1 : 2;

            $create['hospital_name'] = $data['hospital_name'];

            $create['year_money'] = $data['year_money'];

            $create['check_status'] = 1;

            $create['create_time'] = time();

            $create['update_time'] = time();

            $department_info = M('hyb_department')->where('name like "' . $data['department_name'] . '" ')->find();

            $department_detail_info = M('hyb_department_detail')->where('name like "' . $data['department_detail_name'] . '" ')->find();

            if (!empty($department_info['id']) && !empty($department_detail_info['id'])) {

                $department_relation_info = M('hyb_department_relation')->where('department_id = ' . $department_info['id'] . ' and department_detail_id = ' . $department_detail_info['id'])->find();

                if ($department_relation_info != NULL) {

                    $create['department_relation_id'] = $department_relation_info['id'];

                    if ($operate_status == 1) {

                        $doctor_id = M('hyb_doctor')->add($create);

                        if (!empty($doctor_id)) {

                            $this->res = 1;

                            $this->id = $doctor_id;
                        }

                    } else {

                        M('hyb_doctor')->where('id = '.$doctor_info['id'])->save($create);

                        $this->res = 1;

                        $this->id = $doctor_info['id'];
                    }
                }
            }

        }
    }

}