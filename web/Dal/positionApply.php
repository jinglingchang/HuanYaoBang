<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PositionApplyDal extends ActiveRecord {

    public $table_name = 'position_apply';

    public function getApplyNumberByPositionId($position_id) {

        if (!empty($position_id)) {

            $result = $this->where("position_id = " . $position_id)->db(2)->select();

            return count($result);
        }
    }


    public function getPositionApplyString($string){

        if(!empty($string)){
            
            $result = $this->where('position_id in '.$string)->db(2)->select();

            return $result;

        }

    }


    public function getPositionApplyByAccountId($account_id, $position_id) {

        if (!empty($account_id)) {

            $where = "company_id  = " . $account_id;

            if (!empty($position_id)) {

                $where.=" and position_id = " . $position_id;
            }
            
            $result = $this->where($where)->db(2)->select();

            return $result;
        }
    }

}
