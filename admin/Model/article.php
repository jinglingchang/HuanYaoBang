<?php

class articleModel extends baseModel {

    public function __construct($id = 0)
    {

        parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $this->article_info = M('hyb_article')->where("id = " . $id)->find();

            $this->article_info['type'] = M('hyb_type')->where("id = ".$this->article_info['type'])->find();

            $this->article_info['tag_array'] = explode(',',$this->article_info['tag_string']);
        }
    }

    public function uploadFile(){

        if(!empty($_FILES['fengmiantu']['tmp_name'])){

            $suffix = explode('.',$_FILES['fengmiantu']['name']);

            $suffix_new = $suffix[count($suffix) - 1];

            $file_name = time().rand(1,9999).'.'.$suffix_new;

            move_uploaded_file($_FILES['fengmiantu']['tmp_name'],UPLOADFILE.'/'.$file_name);

            $this->set('logo_name',$file_name);

            $this->set('logo_file_name',$_FILES['fengmiantu']['name']);
        }

    }

    public function createAndUpdateData($value)
    {

        switch ($value) {

            case 0:

                $this->set('create_time', time());

                $this->id = M('hyb_article')->add($this->field);

                break;

            case 1:

                M('hyb_article')->where("id = " . $this->id)->save($this->field);

                break;
        }
    }

    public function setArrayValue()
    {

        $array = array('title', 'content', 'auther', 'digest','type');

        foreach ($array as $value) {

            $this->set($value, $_REQUEST[$value]);
        }

        if(!empty($_REQUEST['tag'])){

            $this->set('tag_string',$_REQUEST['tag']);

        } else{

            $this->set('tag_string',NULL);

        }
        $this->set('update_time', time());
    }

    public function getList()
    {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('article', 'article_list');
    }

    public function getTotal()
    {

        $this->info = M('hyb_article')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage()
    {

        $info = M('hyb_article')->limit($this->limit)->offset($this->offset)->order('create_time ASC')->select();

        $info_count = count($info);

        if ($info_count > 0) {

            foreach($info as $key => $value){

                $info[$key]['type'] = M('hyb_type')->where("id = ".$value['type'])->find();;

            }

            $this->list = $info;
        } else {

            $this->list = array();
        }
    }
    // 删除评论
    public function deleteArticle($id=0)
    {
        if($id){
            M('hyb_article')->where('id='.$id)->delete();
        }
 
    }

    

}

?>