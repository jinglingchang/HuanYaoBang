<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dictSalaryMonthDal extends ActiveRecord {

    public $table_name = 'dict_months_basic_salaries';

    public function getList() {

        $result = $this->db(1)->select();

        return $result;
    }

    public function getInfoById($id) {

        if (!empty($id)) {

            $result = $this->where("id = " . $id)->db(1)->find();

            return $result;
        }
    }

}
