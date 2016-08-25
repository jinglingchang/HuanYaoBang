<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/15
 * Time: 下午2:01
 */
class OrderViewModule extends basicViewModule
{


    public function dealOrderInfo()
    {

        $this->field_array = array('hospital_name', 'name', 'operation_info', 'service_time', 'sex', 'operation_time', 'buy_number',

            'province', 'city', 'area', 'address', 'phone', 'open_id');

        $this->checkFieldEmpty();

        $this->checkBaseInfo();

        if ($this->check_operation_info_stauts == 1 && $this->check_field_empty == 1) {

            import('model.Order');

            $orderModel = new OrderModel();

            $orderModel->createOrderInfo($_REQUEST);

            $this->json_array = $orderModel;

        } elseif ($this->check_field_empty == 0) {

            $this->json_array = array('code' => '101', 'tip' => '参数错误');

        } elseif ($this->check_operation_info_stauts == 0) {

            $this->json_array = array('code' => 102, 'tip' => '手术信息异常');
        }
    }

    public function getUserOrderDetail()
    {

        $this->field_array = array('id');

        $this->checkFieldEmpty();

        if ($this->check_field_empty == 1) {

            import('model.Order');

            $orderModel = new OrderModel();

            $orderModel->getOrderDetailInfoById($_REQUEST['id']);

            if($orderModel != NULL){

                $this->json_array = $orderModel->detail;

            } else{

                $this->json_array = array('code' => '201','tip' => '无该订单详情');
            }

        } else {

            $this->json_array = array('code' => '101', 'tip' => '参数错误');
        }

    }

    public function getUserOrderInfo()
    {

        $this->field_array = array('open_id');

        $this->checkFieldEmpty();

        if ($this->check_field_empty == 1) {

            import('model.Order');

            $orderModel = new OrderModel();

            $orderModel->getOrderListByOpenId($_REQUEST);

            $this->json_array = $orderModel;
        } else {

            $this->json_array = array('code' => '101', 'tip' => '参数错误');
        }

    }
}