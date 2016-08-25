<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 上午11:03
 */
class ReviewController
{

    //点评医生

    public function review_hospital()
    {

        $order_id = $_REQUEST['id'];

        $on_time_score = $_REQUEST['on_time_score'];

        $major_score = $_REQUEST['major_score'];

        $service_score = $_REQUEST['service_score'];

        $review_content = $_REQUEST['review_content'];

        $open_id = $_REQUEST['open_id'];

        if (!empty($open_id) && !empty($order_id) && !empty($on_time_score) && !empty($major_score) && !empty($service_score) && !empty($review_content)) {

            import('model.Review');

            $reviewModel = new ReviewModel();

            $reviewModel->createReview($order_id, $on_time_score, $major_score, $service_score, $review_content, $open_id);

            echoJson($reviewModel);

        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);
        }
    }

    //详情

    public function detail()
    {

        $id = $_REQUEST['id'];

        if (!empty($id)) {

            import('model.Review');

            $reviewModel = new ReviewModel();

            $reviewModel->getReviewDetailById($id);

            echoJson($reviewModel);

        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);
        }

    }

    //点赞

    public function up()
    {

        $id = $_REQUEST['id'];

        $open_id = $_REQUEST['open_id'];

        if (!empty($id) && !empty($open_id)) {

            import('model.Review');

            $reviewModel = new ReviewModel();

            $reviewModel->reviewOperate($id, 2, $open_id);

            echoJson($reviewModel);

        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);

        }
    }

    //回复

    public function reply()
    {

        $review_id = $_REQUEST['id'];

        $open_id = $_REQUEST['open_id'];

        $review_content = $_REQUEST['review_content'];

        if (!empty($review_id) && !empty($open_id) && !empty($review_content)) {

            import('model.Review');

            $reviewModel = new ReviewModel();

            $reviewModel->replyReivew($review_id, $open_id, $review_content);

            echoJson($reviewModel);

        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);

        }
    }

}