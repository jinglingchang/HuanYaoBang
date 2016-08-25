<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DictPostitionRankInfoDal extends ActiveRecord {

    public $table_name = 'dict_hirelib_position_rank';

    public function getPositionRankById($id) {

        if (!empty($id)) {

            $result = $this->where("dict_position_rank_id = " . $id)->db(1)->find();

            return $result;
        }
    }

    public function getPostitionRankList() {
        $result = $this->db(1)->select();
        return $result;
    }

}
