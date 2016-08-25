<?php

class dictWorkNaturesDal extends ActiveRecord {

    public $table_name = 'dict_work_natures';

    public function getList() {

        $result = $this->db(1)->select();

        return $result;
    }

    public function getInfoById($id) {

        if (!empty($id)) {

            $result = $this->where("id = " . $id)->find();

            return $result;
        }
    }

}

?>