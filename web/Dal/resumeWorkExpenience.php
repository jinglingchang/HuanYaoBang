<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class resumeWorkExperienceDal extends ActiveRecord {

    public $table_name = 'resume_workexperiences';

    public function getLastSchoolByResumeId($resume_id) {

        if (!empty($resume_id)) {

            $result = $this->where("resume_id = " . $resume_id . " and end_times is not NULL and company is not NULL")->order("end_times DESC")->db(2)->limit(1)->find();

            return $result;
        }
    }

}
