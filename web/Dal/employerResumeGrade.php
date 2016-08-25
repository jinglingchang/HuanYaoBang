<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class employerResumeGradeDal extends ActiveRecord {

    public $table_name = 'employer_resume_grade';

    public function createResumeGrade($account_id, $resume_id, $grade,$position_id) {

        if (!empty($account_id) && !empty($resume_id) && !empty($grade) && !empty($position_id)) {

            $create = array();

            $create['employer_account_id'] = $account_id;

            $create['resume_id'] = $resume_id;

            $create['resume_grade'] = $grade;
            
            $create['create_time'] = time();

            $create['position_id'] = $position_id;

            $id = $this->add($create);
            
            return $id;
        }
    }

    public function getUserResumeGrade($position_id, $resume_id) {

        if (!empty($position_id) && !empty($resume_id)) {

            $result = $this->where("position_id = " . $position_id . " and resume_id = " . $resume_id)->find();

            return $result;
        }
    }

}
