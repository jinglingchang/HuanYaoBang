<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/23
 * Time: 上午9:21
 */
class ActivityModel extends  baseModel
{

    //绑定用户关系

    public function bindRelation($invite_open_id,$by_invite_open_id){

        if(!empty($invite_open_id) && !empty($by_invite_open_id)){

            $create = array(

                'weixin_info_id' => $invite_open_id,

                'friend_info_id' => $by_invite_open_id,

                'create_time' => time(),

                'update_time' => time(),
            );

            $id = M('hyb_relation')->add($create);

            if(!empty($id)){

                $this->res = 1;
            }
        }
    }

    //根据openid以及活动ID 获取用户活动收取记录

    public function getActivityRecord($openid,$activity_id,$by_openid){

        if(!empty($openid) && !empty($activity_id)){

            $receive_record = M('hyb_activity_receive_record')->where('receive_open_id like "'.$openid.'" and activity_id = '.$activity_id.' and by_receive_open_id like "'.$by_openid.'" ')->find();

            if($receive_record != NULL){

                $this->createObjectAttr($receive_record);
            }
        }
    }

    //修改或者创建活动收取记录信息 insert 当被邀请的好友下了订单后  update:当邀请的用户进入活动页面点击领取按钮时

    public function operateActivityRecord($openid,$activity_id,$status,$operate_status,$by_openid){

        if(!empty($openid) && !empty($activity_id) && !empty($status) && !empty($operate_status) && !empty($by_openid)){

            switch($operate_status){

                case 'insert':

                    $create = array(

                        'receive_open_id' => $openid,

                        'activity_id' => $activity_id,

                        'by_receive_open_id' => $by_openid,

                        'status' => 1,

                        'create_time' => time(),

                        'update_time' => time(),
                    );

                    $this->getActivityRecord($openid,$activity_id,$by_openid);

                    if(empty($this->id)){

                        $id = M('hyb_activity_receive_record')->add($create);

                        if(!empty($id)){

                            $this->res = 1;
                        }
                    }

                    break;

                case 'update':

                    $update = array(

                        'status' => 2
                    );

                    M('hyb_activity_receive_record')->where('receive_open_id like "'.$openid.'" and activity_id = '.$activity_id.' and by_receive_open_id like "'.$by_openid.'" ')->save($update);

                    $this->res = 1;

                    break;
            }
        }

    }

}