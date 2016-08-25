<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/15
 * Time: 下午2:48
 */
class OrderDal extends ActiveRecord
{
    public $table_name = 'hyb_order';

    public function createOrder($data){

        if(is_array($data)){

            $id = $this->add($data);

            return $id;
        }
    }

    public function getOrderInfoById($id){

        if(!empty($id) && $id > 0){

            $userOrderDetail = $this->where('id = '.$id)->field('id,order_sn,name,hospital_name,operation_info,total_money,remain_money,service_time,sex_id,operation_time,buy_number,province,city,area,address,pay_status,order_status,create_time')->find();

            return $userOrderDetail;
        }
    }


    public function getOrderListByOpenId($open_id,$last_id = 0,$size = 10){

        if(!empty($open_id) && isset($last_id) && !empty($size)){

            if(!empty($last_id)){

                $where = 'open_id like "'.$open_id.'" and id < '.$last_id;

            } else{

                $where = 'open_id like "'.$open_id.'"';
            }

            $userOrderList =  $this->where($where)->limit($size)->order('create_time DESC')->select();

            return $userOrderList;
        }
    }

}