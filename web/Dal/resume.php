<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class resumeDal extends ActiveRecord {

    public $table_name = 'resume_inherits';

    public function findALL($field,$orderby){

        $where = $this->joinFieldValue();

        $this->where($where)->db(2)->field($field)->order($orderby);
    }

    public function getUserResumeDefaultByUserId($user_id) {

        if (!empty($user_id)) {

            $resume_info = $this->where("user_id = " . $user_id)->db(2)->find();

            if ($resume_info == NULL) {

                $resume_info = $this->where("user_id = " . $user_id)->db(2)->find();
            }

            return $resume_info;
        }
    }

    
    public function getUserResumeDefaultById($id) {

        if (!empty($id)) {

            $resume_info = $this->where("id = " . $id)->db(2)->find();

            return $resume_info;
        }
    }

    public function getUserResumeInfoByResumeId($resume_id) {

        if (!empty($resume_id)) {

            $resume_info = $this->where("id = " . $resume_id)->db(2)->find();

            return $resume_info;
        }
    }

}
