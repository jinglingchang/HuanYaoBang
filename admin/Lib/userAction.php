<?php

class userAction {

    public function user_list() {

        $userModel = new userModel();

        $userModel->getUserList();

        $_ENV['smarty']->assign('user_list', $userModel->user_list);

        $_ENV['smarty']->assign('fenye', $userModel->fenye);

        $_ENV['smarty']->display('user_list');
    }

    public function reply(){

        $id = $_REQUEST['id'];

        $reply_content = $_REQUEST['reply_content'];

    }

    public function reviewDetail(){

        $id = $_REQUEST['id'];

        if(!empty($id)){

            $url = APIURL.'/review/detail?id='.$id;

            $result = file_get_contents($url);

            $array = json_decode($result,true);

            $_ENV['smarty']->assign('datas',$array);

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