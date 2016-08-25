<?php

class doctorModel extends BaseModel
{

    public function __construct($id = 0)
    {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->article_info = M('hyb_doctor')->where("id = " . $id)->find();

            $relation_info = M('hyb_department_relation')->where("id = ".$this->article_info['department_relation_id'])->find();

            $this->article_info['department'] = M('hyb_department')->where("id = ".$relation_info['department_id'])->find();

            $this->article_info['department_detail'] = M('hyb_department_detail')->where("id = ".$relation_info['department_detail_id'])->find();
        }
    }

    public function uploadFile(){

        if(!empty($_FILES['cover_pic_url']['tmp_name'])){

            $suffix = explode('.',$_FILES['cover_pic_url']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_name = time().rand(1,9999).'.'.$suffix_new;

            move_uploaded_file($_FILES['cover_pic_url']['tmp_name'],UPLOADFILE.'/'.$file_name);

            $this->set('cover_pic_url',$file_name);

            $this->set('cover_pic_url_file_name',$_FILES['cover_pic_url']['name']);
        }

    }

    public function createAndUpdateData($value)
    {

        switch ($value) {

            case 0:

                $this->set('create_time', time());

                $info = M('hyb_department_relation')->where("department_id = ".$_REQUEST['department_id'].' and department_detail_id = '.$_REQUEST['department_detail_id'])->find();

                if($info != NULL){

                    $this->set('department_relation_id',$info['id']);
                }

                $this->set('openid','0');

                $this->id = M('hyb_doctor')->add($this->field);

                break;

            case 1:

                $info = M('hyb_department_relation')->where("department_id = ".$_REQUEST['department_id'].' and department_detail_id = '.$_REQUEST['department_detail_id'])->find();

                if($info != NULL){

                    $this->set('department_relation_id',$info['id']);
                }

                M('hyb_doctor')->where("id = " . $this->id)->save($this->field);

                break;
        }
    }

    public function setArrayValue()
    {

        $array = array('name', 'sex_id', 'hospital_name', 'year_money','phone','check_status');

        foreach ($array as $value) {

            $this->set($value, $_REQUEST[$value]);
        }

        $this->set('update_time', time());
    }

    public function getList()
    {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('doctor', 'doctor_list');
    }

    public function getTotal()
    {

        $this->info = M('hyb_doctor')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage()
    {

        $info = M('hyb_doctor')->limit($this->limit)->offset($this->offset)->order('create_time ASC')->select();

        $info_count = count($info);

        if ($info_count > 0) {

            foreach($info as $key => $value){

                $relation_info = M('hyb_department_relation')->where("id = ".$value['department_relation_id'])->find();

                $info[$key]['department'] = M('hyb_department')->where("id = ".$relation_info['department_id'])->find();

                $info[$key]['department_detail'] = M('hyb_department_detail')->where("id = ".$relation_info['department_detail_id'])->find();

            }


            $this->list = $info;
        } else {

            $this->list = array();
        }
    }

}

?>