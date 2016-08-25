<?php

class hospitalAction
{

    public function edit()
    {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            $hospitalModel = new hospitalModel($id);

            $_ENV['smarty']->assign('data', $hospitalModel->article_info);

            $_ENV['smarty']->assign('operation_type', 1);

            $_ENV['smarty']->display('add_hospital_info');

        }
    }


    public function hospital_list()
    {

        $hospitalModel = new hospitalModel();

        $hospitalModel->getList();

        $_ENV['smarty']->assign('list', $hospitalModel->list);

        $_ENV['smarty']->assign('fenye', $hospitalModel->fenye);

        $_ENV['smarty']->display('hospital_list');

    }

    public function add_hospital_info()
    {

        $_ENV['smarty']->assign('operation_type', 0);

        $_ENV['smarty']->display('add_hospital_info');

    }

    public function add_hospital_ajax()
    {

        $hospitalModel = new hospitalModel($_REQUEST['id']);

        $hospitalModel->setArrayValue();

        $hospitalModel->uploadFile();

        $hospitalModel->createAndUpdateData($_REQUEST['operation_type']);
    }

}


?>