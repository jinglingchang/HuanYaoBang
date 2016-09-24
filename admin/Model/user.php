<?php

class userModel extends BaseModel
{

    public function user_info($id = 0)
    {

       // parent::__construct();

        if (!empty($id)) {

            $this->id = $id;

            $user_info = M('hyb_weixin_info')->where("id = " . $id)->find();

            $first_time = M('hyb_order')->where("open_id = '" . $user_info['openid']."' and create_time>0")->field('create_time')->order('create_time asc')->limit(0,1)->find();

            $last_time = M('hyb_order')->where("open_id = '" . $user_info['openid']."' and create_time>0")->order('create_time DESC')->limit(0,1)->find();

            if($first_time){

                $first_create_time=date("Y-m-d h:i:s",$first_time['create_time']);

            }else{

                $first_create_time='暂无下单';

            }
            $user_info['first_create_time']=$first_create_time;
            $user_info['order']=$last_time;

            if($user_info['sex']==1){

                $user_info['sex']='男';

            }else if($user_info['sex']==2){

                $user_info['sex']='女';

            }else{
                $user_info['sex']='保密';
            }
            
            $this->user_info=$user_info;
        }
    }

    public function getUserList()
    {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('user', 'user_list');
    }

    public function getTotal()
    {

        $this->info = M('hyb_weixin_info')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage()
    {

        $info = M('hyb_weixin_info')->limit($this->limit)->offset($this->offset)->order('create_time ASC')->select();

        $info_count = count($info);

        if ($info_count > 0) {

            foreach ($info as $key => $value) {

                if($value['sex']==1){
                    $info[$key]['sex']='男'; 
                }else if($value['sex']==2) {
                    $info[$key]['sex']='女';  
                }else{
                    $info[$key]['sex']='保密';
                }

            }

            $this->list = $info;

        } else {

            $this->list = array();
        }
    }

}

?>