<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/25
 * Time: 下午1:47
 */
class articleAction
{

    public function edit()
    {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $articleModel = new articleModel($id);

            $_ENV['smarty']->assign('data', $articleModel->article_info);

            $_ENV['smarty']->assign('operation_type', 1);

            $type_list = M('hyb_type')->where('belong_type = 2')->select();

            $_ENV['smarty']->assign('type_list', $type_list);

            $_ENV['smarty']->display('add_article_info');

        }
    }


    public function article_list()
    {

        $articleModel = new articleModel();

        $articleModel->getList();

        $_ENV['smarty']->assign('list', $articleModel->list);

        $_ENV['smarty']->assign('fenye', $articleModel->fenye);

        $_ENV['smarty']->display('article_list');

    }

    public function add_article_info()
    {

        $type_list = M('hyb_type')->where('belong_type = 2')->select();

        $_ENV['smarty']->assign('type_list', $type_list);

        $_ENV['smarty']->assign('operation_type', 0);

        $_ENV['smarty']->display('add_article_info');

    }

    public function add_article_ajax()
    {

        $articleModel = new articleModel($_REQUEST['id']);

        $articleModel->setArrayValue();

        $articleModel->uploadFile();

        $articleModel->createAndUpdateData($_REQUEST['operation_type']);
    }
    //删除 评论 
    public function delete_article_ajax(){

        $articleModel = new articleModel();

        $articleModel->deleteArticle($_REQUEST['id']);

    }

}