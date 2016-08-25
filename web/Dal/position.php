<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PositionDal extends ActiveRecord {

    public $table_name = 'position_inherits';
    public $limit = 10;

    public function getPositionListByPublishUserId($publish_user_id,$status = 0) {

        if (!empty($publish_user_id)) {

            $position_list = $this->where('publish_user_id = ' . $publish_user_id.' and  dict_position_status_id = '.$status)->order('position_update_date DESC')->db(2)->select();

            return $position_list;
        }
    }


    public function getPositionListByCompanyIdAndStatus($company_id,$status) {

        if (!empty($company_id)) {

            $position_list = $this->where('company_id = ' . $company_id.' and dict_position_status_id = '.$status)->order('position_update_date DESC')->db(2)->select();

            return $position_list;
        }
    }

    public function getPositionInfoById($position_id) {

        if (!empty($position_id)) {

            $position_info = $this->where('id = ' . $position_id)->db(2)->find();

            return $position_info;
        }
    }

    public function createPositionByPositionArray($position_create_array) {

        if (is_array($position_create_array)) {

            $id = $this->db(2)->add($position_create_array);

            return $id;
        }
    }

    public function updatePositionByPositionArrayAndPositionId($position_id, $position_update_array) {

        if (!empty($position_id) && is_array($position_update_array)) {

            $result = $this->where('id = ' . $position_id)->db(2)->save($position_update_array);

            return $result;
        }
    }

}
