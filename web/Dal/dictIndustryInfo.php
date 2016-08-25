<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DictIndustryInfoDal extends ActiveRecord {

    public $table_name = 'dict_industry_info';

    public function getIndustryInfoByIndustryId($industryId, $type = 0) {

        if (!empty($industryId)) {

            $result = $this->where("industry_id = " . $industryId . " and industry_type = " . $type)->db(1)->select();

            return $result;
        }
    }

    public function getIndustryInfoPublicByIndustryId($industry_id, $type = 0) {

        if (!empty($industry_id)) {

            $result = $this->where("(industry_id = 0 or industry_id = " . $industry_id . ") and industry_type = " . $type)->db(1)->select();

            return $result;
        }
    }

}
