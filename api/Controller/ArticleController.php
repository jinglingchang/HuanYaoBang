<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 下午1:40
 */
class ArticleController
{

    public function lists()
    {

        $last_id = !empty($data['last_id']) ? $data['last_id'] : 0;

        $size = !empty($data['size']) ? $data['size'] : 10;

        import('model.Article');

        $articleModel = new ArticleModel();

        $articleModel->getArticleList($last_id, $size);

        echoJson($articleModel);
    }


    public function detail()
    {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            import('model.Article');

            $articleModel = new ArticleModel();

            $articleModel->getArticleById($id);

            echoJson($articleModel);

        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);
        }

    }

}