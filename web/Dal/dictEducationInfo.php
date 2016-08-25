<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DictEducationInfoDal extends ActiveRecord {

    public $table_name = 'dict_hirelib_education';

    public function getEducationInfoByEducationId($Id) {

        if (!empty($Id)) {

            $result = $this->where("hirelib_education_id = " . $Id)->db(1)->find();

            return $result;
        }
    }

    public function getEducationList() {
        $result = $this->db(1)->select();
        return $result;
    }

    public function getEducationListByType($type) {

        $result = $this->where('education_type = ' . $type)->db(1)->select();

        return $result;
    }

}
