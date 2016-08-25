<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/15
 * Time: 下午2:33
 */
class OrderModel extends baseModel
{

    private $field_array;

    public function dealOrderData($data)
    {

        switch ($data['buy_number']) {

            case '2':

                $money = 0.95;

                break;

            case '3':

                $money = 0.9;

                break;

            default:

                $money = 1;
        }

        $this->field_array = array(

            'order_sn' => date('YmdHis') . rand(10000, 99999),

            'hospital_name' => $data['hospital_name'],

            'open_id' => $data['open_id'],

            'name' => $data['name'],

            'operation_info' => $data['operation_info'],

            'service_time' => strtotime($data['service_time']),

            'sex_id' => $data['sex'] == '男' ? 1 : 2,

            'operation_time' => strtotime($data['operation_time']),

            'buy_number' => $data['buy_number'],

            'province' => $data['province'],

            'city' => $data['city'],

            'area' => $data['area'],

            'address' => $data['address'],

            'pay_status' => 1,

            'order_status' => 1,

            'phone' => $data['phone'],

            'create_time' => time(),

            'update_time' => time(),

            'total_money' => $data['buy_number'] * 200 * $money,
        );
    }

    //创建订单信息

    public function createOrderInfo($data)
    {

        $this->dealOrderData($data);

        import('dal.Order');

        $orderDal = new OrderDal();

        $id = $orderDal->createOrder($this->field_array);

        if (!empty($id)) {

            $this->res = 1;

        } else {

            $this->res = 0;
        }
    }

    //根据OPENID获取订单列表

    public function getOrderListByOpenId($data)
    {

        import('dal.Order');

        $last_id = !empty($data['last_id']) ? $data['last_id'] : 0;

        $size = !empty($data['size']) ? $data['size'] : 10;

        $orderDal = new OrderDal();

        $userOrderList = $orderDal->getOrderListByOpenId($data['open_id'], $last_id, $size);

        if ($userOrderList != NULL) {

            $userOrderListNumber = count($userOrderList);

            foreach ($userOrderList as $key => $value) {

                $orderModel = new OrderModel();

                $orderModel->getOrderListInfo($value);

                $this->orders[] = $orderModel;

                if ($key + 1 == $userOrderListNumber) {

                    $this->last_id = $value['id'];
                }
            }
        }
    }

    //根据ID获取订单详情

    public function getOrderDetailInfoById($id){

        if(!empty($id)){

            import('dal.Order');

            $orderDal = new OrderDal();

            $order_info = $orderDal->getOrderInfoById($id);

            if($order_info != NULL){

                import('model.Order');

                $orderModel = new OrderModel();

                $orderModel->createObjectAttr($order_info);

                $orderModel->getOrderListInfo($order_info);

                $this->detail = $orderModel;
            }
        }
    }

    //设置订单信息对象

    public function getOrderListInfo($data)
    {

        $pay_status_array = array('1' => '未支付', '2' => '已付订金', '3' => '已付全款');

        $service_current_hour = date('H',$data['service_time']);

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

        $this->operation_info = $data['operation_info'];

        $this->pay_status = $pay_status_array[$data['pay_status']];

        $this->name = $data['name'];

        $this->buy_number = $data['buy_number'];

        $this->service_time = date('Y-m-d').' '.$string;

        $this->order_total_money = $data['total_money'];

        $this->order_remain_money = $data['remain_money'];
    }

}