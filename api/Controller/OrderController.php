<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/15
 * Time: 下午2:01
 */
class OrderController
{

    //创建订单

    public function create(){

        import('viewModule.Order');

        $orderViewModule = new OrderViewModule();

        $orderViewModule->dealOrderInfo();

        echoJson($orderViewModule->json_array);
    }

    //获取用户订单列表

    public function order_list(){

        import('viewModule.Order');

        $orderViewModule = new OrderViewModule();

        $orderViewModule->getUserOrderInfo();

        echoJson($orderViewModule->json_array);
    }

    //获取订单详情

    public function detail(){

        import('viewModule.order');

        $orderViewModule = new OrderViewModule();

        $orderViewModule->getUserOrderDetail();

        echoJson($orderViewModule->json_array);

    }

}