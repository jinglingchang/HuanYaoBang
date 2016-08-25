<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class resumeBuyDal extends ActiveRecord {

    public $table_name = 'employer_resume_buy';

    public function createResumeBuy($account_id, $resume_id) {

        if (!empty($account_id) && !empty($resume_id)) {

            $create = array();

            $create['employer_account_id'] = $account_id;

            $create['resume_id'] = $resume_id;

            $id = $this->add($create);
            
            return $id;
        }
    }

    public function getResumeBuyInfo($account_id, $resume_id) {

        if (!empty($account_id) && !empty($resume_id)) {

            $result = $this->where("employer_account_id =" . $account_id . " and resume_id = " . $resume_id)->find();

            return $result;
        }
    }

}
