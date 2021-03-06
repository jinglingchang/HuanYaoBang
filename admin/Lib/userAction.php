<?php

class userAction {

    public function user_list() {

        $userModel = new userModel();

        $userModel->getUserList();

        $_ENV['smarty']->assign('user_list', $userModel->list);

        $_ENV['smarty']->assign('fenye', $userModel->fenye);

        $_ENV['smarty']->display('user_list');
    }

    public function reply(){

        $id = $_REQUEST['id'];

        $reply_content = $_REQUEST['reply_content'];

    }


    public function detail(){

        $id = $_REQUEST['id'];

        if(!empty($id)){

            $userModel = new userModel();
            $userModel->user_info($id);

            $_ENV['smarty']->assign('data', $userModel->user_info);

            $_ENV['smarty']->assign('operation_type', 1);

            $_ENV['smarty']->display('user_detail');
        }
    }

    public function reviewDetail(){

        $id = $_REQUEST['id'];

        if(!empty($id)){

            // $url = APIURL.'/review/detail?id='.$id;
            // // $result = file_get_contents( $url);
            // $curl = curl_init();
            // curl_setopt($curl, CURLOPT_URL,  $url);
            // curl_setopt($curl, CURLOPT_HEADER, 0);
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            // $data = curl_exec($curl);
            // curl_close($curl);
            // // 显示获得的数据

            // var_dump(json_decode($data, false)); 

            //$array = json_decode($data,true);

            $reviewModel = new reviewModel();

            $reviewModel->reviewDetail($id);

            $_ENV['smarty']->assign('data', $reviewModel->review_info);

            $_ENV['smarty']->display('review_detail');

        }

    }

    public function review() {

        $reviewModel = new reviewModel();

        $reviewModel->getList();

        $_ENV['smarty']->assign('list', $reviewModel->list);

        $_ENV['smarty']->assign('fenye', $reviewModel->fenye);

        $_ENV['smarty']->display('review_list');
    }

}

?>