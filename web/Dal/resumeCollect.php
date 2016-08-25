<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class resumeCollectDal extends ActiveRecord {

    public $table_name = 'resume_collect';

    public function createResumeCollect($employer_account_id, $resume_id,$position_id) {

        if (!empty($employer_account_id) && !empty($resume_id) && !empty($position_id)) {

            $create = array();

            $create['employer_account_id'] = $employer_account_id;

            $create['resume_id'] = $resume_id;

            $create['collect_time'] = time();

            $create['position_id'] = $position_id;

            $id = $this->add($create);

            if (!empty($id)) {

                return true;
            } else {

                return false;
            }
        }
    }

    public function getUserCollectByAccountIdAndResumeId($account_id, $resume_id,$position_id) {

        if (!empty($account_id) && !empty($resume_id) && !empty($position_id)) {

            $result = $this->where("employer_account_id = " . $account_id . " and resume_id = " . $resume_id.' and position_id = '.$position_id)->find();

            return $result;
        }
    }

}
