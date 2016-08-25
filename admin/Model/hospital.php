<?php

class hospitalModel extends baseModel
{

    private $type = 6;

    public function __construct($id = 0)
    {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->article_info = M('hyb_hospital')->where("id = " . $id)->find();
        }
    }

    public function createAndUpdateData($value)
    {

        switch ($value) {

            case 0:

                $this->set('create_time', time());

                $this->id = M('hyb_hospital')->add($this->field);

                break;

            case 1:

                M('hyb_hospital')->where("id = " . $this->id)->save($this->field);

                break;
        }

        $json = array('code' => 0, 'status' => 'ok', 'object' => 0);

        echo json_encode($json);

        die;
    }

    public function uploadFile()
    {

        $size = '2097152';

        if (!empty($_FILES['fengmiantu']['tmp_name'])) {

            if ($_FILES['fengmiantu']['size'] > $size) {

                $json = array('code' => 101, 'status' => "图片大小必须小于2M", 'object' => 'fengmiantu');

                echo json_encode($json);

                die;
            }

            $suffix = explode('.', $_FILES['fengmiantu']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_name = time() . rand(1, 9999) . '.' . $suffix_new;

            move_uploaded_file($_FILES['fengmiantu']['tmp_name'], UPLOADFILE . '/' . $file_name);

            $this->set('logo_name', $file_name);

            $this->set('logo_file_name', $_FILES['fengmiantu']['name']);
        }

        if (!empty($_FILES['zishitu']['tmp_name'])) {

            if ($_FILES['zishitu']['size'] > $size) {

                $json = array('code' => 101, 'status' => "图片大小必须小于2M", 'object' => 'zishitu');

                echo json_encode($json);

                die;
            }

            $suffix = explode('.', $_FILES['zishitu']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_name = time() . rand(1, 9999) . '.' . $suffix_new;

            move_uploaded_file($_FILES['zishitu']['tmp_name'], UPLOADFILE . '/' . $file_name);

            $this->set('zs_name', $file_name);

            $this->set('zs_file_name', $_FILES['zishitu']['name']);
        }

    }

    public function setArrayValue()
    {

        $array = array('name', 'province', 'city', 'address', 'hospital_type', 'phone', 'introduce');

        foreach ($array as $value) {

            $this->set($value, $_REQUEST[$value]);
        }

        $this->set('update_time', time());
    }

    public function getList()
    {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('hospital', 'hospital_list');
    }

    public function getTotal()
    {

        $this->info = M('hyb_hospital')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage()
    {

        $info = M('hyb_hospital')->limit($this->limit)->offset($this->offset)->select();

        $info_count = count($info);

        if ($info_count > 0) {

            $this->list = $info;
        } else {

            $this->list = array();
        }
    }

}

?>