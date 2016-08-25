<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class interviewManageDal extends ActiveRecord {

    public $table_name = 'interview_manage';

    public function getInterviewManageById($id) {

        if (!empty($id)) {

            $result = $this->where('id = ' . $id)->find();

            return $result;
        }
    }

    public function updateInterviewManageById($id, $update) {

        if (!empty($id) && is_array($update)) {

            $result = $this->where('id = ' . $id)->save($update);

            return $result;
        }
    }

    public function getInterviewManageByString($string){

        if(!empty($string)){

            $result = $this->where("employer_account_id in " . $string)->select();

            return $result;

        }

    }


    public function getInterviewManageByAccountId($id) {

        if (!empty($id)) {

            $result = $this->where("employer_account_id = " . $id)->select();

            return $result;
        }
    }

    public function createInterviewManage($create_array) {

        if (is_array($create_array) && count($create_array) > 0) {

            $id = $this->add($create_array);

            return $id;
        }
    }

}
