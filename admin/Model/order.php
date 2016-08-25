<?php

class orderModel extends BaseModel
{

    public function __construct($id = 0)
    {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->order_info = M('hyb_order')->where("id = " . $id)->find();

            $service_current_hour = date('H',$this->order_info['service_time']);

            switch($service_current_hour){

                case '0':

                    $string = '上午';

                    break;

                case '12':

                    $string = '下午';

                    break;

                default:

                    $string = '晚上';
            }

            $this->order_info['string'] = $string;
        }
    }

    public function createAndUpdateData($value)
    {

        switch ($value) {

            case 0:

                $this->set('create_time', time());

                $this->id = M('hyb_order')->add($this->field);

                break;

            case 1:

                M('hyb_order')->where("id = " . $this->id)->save($this->field);

                break;
        }
    }

    public function setArrayValue()
    {

        $array = array('type_id_1', 'type_id_2', 'type_id_3');

        foreach ($array as $value) {

            $this->set($value, $_REQUEST[$value]);
        }

        $this->set('update_time', time());
    }


    public function getList()
    {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('drug', 'drug_list&ddd=1234');
    }

    public function getTotal()
    {

        $this->info = M('hyb_order')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage()
    {

        $info = M('hyb_order')->limit($this->limit)->offset($this->offset)->select();

        $info_count = count($info);

        if ($info_count > 0) {

            $this->list = $info;
        } else {

            $this->list = array();
        }
    }

}

?>