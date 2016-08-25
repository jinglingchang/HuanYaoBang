<?php

class orderAction
{

    public function order_list()
    {

        $orderModel = new orderModel();

        $orderModel->getList();

        $_ENV['smarty']->assign('list', $orderModel->list);

        $_ENV['smarty']->assign('fenye', $orderModel->fenye);

        $_ENV['smarty']->display('order_list');

    }

    public function confimOrder()
    {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $update = array(

                'order_status' => 4,
            );

            M('hyb_order')->where('id = ' . $id)->save($update);

        }

        header('Location:pageredirst.php?action=order&functionname=order_list&page='.$_REQUEST['current_page'].'');
    }

    public function detail(){

        $id = $_REQUEST['id'];

        if(!empty($id)){

            $orderModel = new orderModel($id);

            $_ENV['smarty']->assign('data', $orderModel->order_info);

            $_ENV['smarty']->assign('operation_type', 1);

            $_ENV['smarty']->display('order_detail');
        }
    }

    public function operate_order(){

        if(!empty($_POST['id']) && !empty($_POST['type'])){

            $update = array();

            switch($_POST['type']){

                case 'close':

                    $update['order_status'] = 5;

                    break;

                case 'sure':

                    $update['order_status'] = 4;

                    break;

                case 'complete':

                    $update['order_status'] = 2;

                    break;

                case 'TK':

                    $update['pay_status'] = 4;

                    $refund_record_info = M('hyb_refund_record')->where('order_id = '.$_POST['id'])->find();

                    $createRefund = array(

                        'order_id' => $_POST['id'],

                        'refund_content' => $_POST['tk_reason']
                    );

                    if($refund_record_info == NULL){

                        M('hyb_refund_record')->add($createRefund);

                    } else{

                        unset($createRefund['order_id']);

                        M('hyb_refund_record')->where("order_id = ".$_POST['id'])->save($createRefund);
                    }

                    break;
            }

            M('hyb_order')->where("id = ".$_POST['id'])->save($update);
        }

    }

}

?>