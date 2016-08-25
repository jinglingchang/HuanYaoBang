<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DictSalaryInfoDal extends ActiveRecord {

    public $table_name = 'dict_hirelib_compensation';

    public function getSalaryInfoBySalaryId($Id) {

        if (!empty($Id)) {

            $result = $this->where("hirelib_compensation_id = " . $Id)->db(1)->find();

            return $result;
        }
    }

    public function getSalaryList() {
        $result = $this->db(1)->select();

        return $result;
    }

}
