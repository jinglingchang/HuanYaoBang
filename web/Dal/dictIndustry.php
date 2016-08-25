<?php

class dictIndustryDal extends ActiveRecord {

    public $table_name = 'dict_industry';

    public function getIndustryList() {

        $dictIndustryList = $this->db(1)->select();

        return $dictIndustryList;
    }

}

?>