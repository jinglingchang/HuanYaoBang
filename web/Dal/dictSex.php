<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dictSexDal extends ActiveRecord {

    public $table_name = 'dict_sexes';

    public function getSexById($id) {

        if (!empty($id)) {

            $result = $this->where("id = " . $id)->db(1)->find();

            return $result;
        }
    }

}
