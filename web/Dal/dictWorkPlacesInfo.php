<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DictWorkPlacesInfoDal extends ActiveRecord {

    public $table_name = 'dict_work_places';

    public function getWorkPlacesInfoByWorkPlacesId($Id) {

        if (!empty($Id)) {

            $result = $this->where("id = " . $Id)->db(1)->find();

            return $result;
        }
    }

    public function getWorkPlacesList() {
        $result = $this->db(1)->select();
        return $result;
    }

}
