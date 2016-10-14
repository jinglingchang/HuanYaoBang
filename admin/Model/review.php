<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/26
 * Time: 上午9:22
 */
class reviewModel extends baseModel
{

    public function getList()
    {

        $this->getTotal();

        $this->getInfoByPage();

        $this->fenye('user', 'review');
    }

    public function getTotal()
    {

        $this->info = M('hyb_user_review')->where('reply_id = 0')->field('id')->select();

        $this->countTotalPage($this->info);
    }

    public function getInfoByPage()
    {

        $info = M('hyb_user_review')->where('reply_id = 0')->limit($this->limit)->offset($this->offset)->order('create_time ASC')->select();

        $info_count = count($info);

        if ($info_count > 0) {

            foreach($info as $key => $value){

                $info[$key]['order_info'] = M('hyb_order')->where("id = ".$value['order_id'])->find();

                $info[$key]['user_info'] = M('hyb_weixin_info')->where('openid like "'.$value['open_id'].'"')->find();

            }

            $this->list = $info;
        } else {

            $this->list = array();
        }
    }

    public function test($id = 0,&$result=array())
    { 
        $a++; 
        $review_info = M('hyb_user_review')->where("reply_id = " . $id)->select();

        foreach ($review_info as $key => $value) {
            if($value['id']){
                $this->test($value['id']);
            }
            # code...
        }
        if ($review_info['']) 
        {   
            $result[]=$a;   
            test($a,$result); 
        } 
        echo $a; 
        return $result;   
    } 


    //患者评价详情  2016-10-14 by:cgk;
    public function reviewDetail($id = 0)
    {
        if (!empty($id)) {

            $this->id = $id;

            $review_info = M('hyb_user_review')->where("id = " . $id)->find();
            $user_info = M('hyb_weixin_info')->where("openid = '" . $review_info['open_id']."'")->find();
            switch ($user_info['sex']) {
                case 1:
                    $user_info['sex']='男';
                    break;
                case 2:
                    $user_info['sex']='女';
                    break;
                default:
                    $user_info['sex']='保密';
                    break;
            }
            $order_info = M('hyb_order')->where("id = " . $review_info['order_id'])->find();
            $info['review']  =  $review_info;
            $info['user']    =  $user_info;
            $info['order']   =  $order_info;

            $this->review_info=$info;

        }

    }
}