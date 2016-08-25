<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class resumeStaticDal extends ActiveRecord {

    public $table_name = 'resume_static';

    public function getResumeStaticByUserId($user_id) {

        if (!empty($user_id)) {
            
            $result = $this->where("user_id = ".$user_id)->db(2)->find();
            
            return $result;
        }
    }

}
