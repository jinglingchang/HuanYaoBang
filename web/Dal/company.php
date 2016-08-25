<?php

class CompanyDal extends ActiveRecord {

    public $table_name = 'company';

    public function getCompanybyid($id){

        if(!empty($id)){

            return $this->where('id = '.$id)->find();

        }

    }

    public function addCompany($data) {
        $result = '';
        $err = 0;
        if (is_array($data)) {
            $company_fields = array('company_name', 'province', 'city', 'district', 'address', 'resp_name', 'email', 'qq', 'phone');
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

    public function getCompany($id) {
        $result = '';
        if (!empty($id)) {
            $result = $this->where('id = ' . $id)->find();
        }
        return $result;
    }

    public function updateCompany($condition, $data) {
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
    public function getCompanyList($condition) {
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

