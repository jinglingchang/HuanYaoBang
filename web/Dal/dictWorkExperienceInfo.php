<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DictWorkExperienceInfoDal extends ActiveRecord {

    public $table_name = 'dict_hirelib_work_experience';

    public function getWorkExperienceInfoByWorkExperienceId($Id) {

        if (!empty($Id)) {

            $result = $this->where("hirelib_work_experience_id = " . $Id)->db(1)->find();

            return $result;
        }
    }

    public function getWorkExperienceList() {
        $result = $this->db(1)->select();
        return $result;
    }

}
