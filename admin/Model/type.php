<?php

class typeModel extends BaseModel
{

    private $upload_file_path = '/home/wwwroot/default/medhelper/Public/image/type/';

    public function __construct($type = 0, $level = '')
    {

        if (!empty($type) && !empty($level)) {

            switch ($type) {

                case '1':

                    $this->name = '科室';

                    if ($_REQUEST['level'] != 99) {

                        $this->type_list = M('hyb_department')->select();

                    } else {

                        $info = M('hyb_department_relation')->where('department_id = ' . $_REQUEST['type_1'])->select();

                        if (count($info) > 0) {

                            $id_array = array();

                            foreach ($info as $key => $value) {

                                $id_array[] = $value['department_detail_id'];
                            }

                            $string = '(' . implode(',', $id_array) . ')';

                            $this->type_list = M('hyb_department_detail')->where('id in ' . $string)->select();
                        }

                    }
                    break;

                case '2':

                    $this->name = '专科';

                    break;

                case '3':

                    $this->name = '文章';

                    $this->type_list = M('hyb_type')->where("belong_type = 1")->select();

                    break;
            }
        }
    }

    public function createRecord()
    {

        if (count($this->field) > 0) {

            switch ($this->field['belong_type']) {

                case 1:

                    $create = array(

                        'create_time' => time(),

                        'update_time' => time(),
                    );

                    if ($this->field['level'] == 1) {

                        $department_info = M('hyb_department')->where('name like "' . $this->field['name'] . '"')->find();

                        if ($department_info == NULL) {

                            $create['name'] = $this->field['name'];

                            M('hyb_department')->add($create);

                        }
                    } elseif ($this->field['level'] == 99) {

                        $create['name'] = $this->field['name'];

                        $department_detail_info = M('hyb_department_detail')->where('name like "' . $this->field['name'] . '"')->find();

                        if ($department_detail_info != NULL) {

                            $department_detail_id = $department_detail_info['id'];

                        } else {

                            $department_detail_id = M('hyb_department_detail')->add($create);
                        }

                        if (!empty($department_detail_id)) {

                            $department_relation_info = M('hyb_department_relation')->where("department_id = " . $_REQUEST['type_1'] . " and department_detail_id = " . $department_detail_id)->find();

                            if ($department_relation_info == NULL) {

                                $createBind = array(

                                    'department_id' => $_REQUEST['type_1'],

                                    'department_detail_id' => $department_detail_id,

                                    'create_time' => time(),

                                    'update_time' => time(),
                                );

                                M('hyb_department_relation')->add($createBind);
                            }
                        }
                    }

                    $this->id = 1;
                    break;

                case '3':

                    $type = M('hyb_type')->where('name like "' . $_REQUEST['name'] . '" and belong_type = 1')->find();

                    if ($type == NULL) {

                        $create = array(

                            'name' => $_REQUEST['name'],

                            'belong_type' => 1,
                        );

                        $this->id = M('hyb_type')->add($create);
                    } else {

                        $this->id = 0;
                    }

                    break;

                case '4':

                    $type = M('hyb_type')->where('name like "' . $_REQUEST['name'] . '" and belong_type = 2')->find();

                    if ($type == NULL) {

                        $create = array(

                            'name' => $_REQUEST['name'],

                            'belong_type' => 2,
                        );

                        $this->id = M('hyb_type')->add($create);

                    } else {

                        $this->id = 0;
                    }

                    break;
            }
        }
    }

}

?>