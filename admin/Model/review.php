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
}