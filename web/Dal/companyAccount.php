<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CompanyAccountDal extends ActiveRecord {

    public $table_name = 'employer_company_money';

    public function addCompanyAccount($data) {
        $result = '';
        $err = 0;
        if (is_array($data)) {
            $company_fields = array('company_id', 'money', 'freeze_money');
            foreach ($company_fields as $value) {
                if (empty($data[$value])) {
                    $err = 1;
                    break;
                }
            }
            if ($err != 1) {
                $result = $this->add($data);
            }
        }
        return $result;
    }

    public function getCompanyAccount($id) {
        $result = '';
        if (!empty($id)) {
            $result = $this->where('company_id = ' . $id)->find();
        }
        return $result;
    }

    public function updateCompanyAccount($condition, $data) {
        $result = '';
        if (is_array($condition) && is_array($data)) {
            $i = 1;
            foreach ($condition as $key => $value) {
                if ($i == 1) {

                    $string = $key . " = " . $value;
                } else {
                    $string = $string . " and " . $key . " = " . $value;
                }
                $i++;
            }
            $result = $this->where($string)->save($data);
        }
        return $result;
    }

    public function getCompanyAccountList($condition) {
        $result = '';
        if (is_array($condition)) {
            $i = 1;
            foreach ($condition as $key => $value) {
                if ($i == 1) {

                    $string = $key . " = " . $value;
                } else {
                    $string = $string . " and " . $key . " = " . $value;
                }
                $i++;
            }
            $result = $this->where($string)->select();
        }
        return $result;
    }

}
?>


