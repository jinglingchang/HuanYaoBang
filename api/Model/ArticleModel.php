<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 下午1:41
 */
class ArticleModel extends baseModel
{
    public function getArticleList($last_id, $size)
    {

        if (isset($last_id) && !empty($size)) {

            if (!empty($last_id)) {

                $where = 'id < ' . $last_id;

            } else {

                $where = '';
            }

            $article_info = M('hyb_article')->where($where)->limit($size)->order('create_time')->select();

            $this->article_list = array();

            if (count($article_info) > 0) {

                foreach ($article_info as $key => $value) {

                    import('model.Article');

                    $articleModel = new ArticleModel();

                    $articleModel->setArticleObject($value);

                    $this->article_list[] = $articleModel;

                    if (count($article_info) - 1 == $key) {

                        $this->last_id = $value['id'];
                    }
                }
            }
        }
    }

    public function addArticleReadNumber($id)
    {

        if (!empty($id)) {

            $article_info = M('hyb_article')->where('id = ' . $id)->find();

            if ($article_info != NULL) {

                $update = array(

                    'read_number' => $article_info['read_number'] + 1,
                );

                M('hyb_article')->where('id = ' . $id)->save($update);
            }
        }
    }

    public function getArticleById($id)
    {

        if (!empty($id)) {

            $article_info = M('hyb_article')->where('id = ' . $id)->find();

            if ($article_info != NULL) {

                $this->setArticleObject($article_info, 1);
            }
        }

    }

    public function setArticleObject($value, $type = 0)
    {

        $this->createObjectAttr($value);

        $this->create_time = date('Y-m-d H:i:s', $value['create_time']);

        $this->update_time = date('Y-m-d H:i:s', $value['update_time']);

        if ($type == 1) {

            $this->addArticleReadNumber($value['id']);

            $this->read_number = $value['read_number'] + 1;
        }

    }
}