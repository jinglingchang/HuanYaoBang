<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 上午11:09
 */
class ReviewModel extends baseModel
{

    public function reviewOperate($id, $type, $parmas)
    {
        if (!empty($type) && !empty($id)) {

            $update = array();

            $review_info = M('hyb_user_review')->where("id = " . $id)->find();

            switch ($type) {

                case 1:

                    //阅读数

                    $update['read_number'] = $review_info['read_number'] + 1;

                    break;

                case 2:

                    //点赞

                    $up_array = $review_info['up_list'];

                    if (is_array($up_array) && count($up_array) > 0) {

                        $up_list = json_decode($up_array, true);

                    } else {

                        $up_list = array();
                    }

                    $key = array_search($parmas, $up_list);

                    if ($key !== false) {

                        $up_list[] = $parmas;

                        $update['up_list'] = json_encode($up_list);

                    }
                    break;
            }

            if (count($update) > 0) {

                M('hyb_user_review')->where("id = " . $id)->save($update);

                $this->res = 1;

            } else {

                $this->res = 0;
            }
        }

    }

    public function getReviewDetailById($id)
    {

        if (!empty($id)) {

            $review_info = M('hyb_user_review')->where("id = " . $id)->find();

            $this->setReivewObject($review_info, 1);

        }
    }


    public function setReivewObject($info, $type)
    {

        $this->createObjectAttr($info);

        if (!empty($info['open_id'])) {

            $this->user_info = M('hyb_weixin_info')->where('openid like "' . $info['open_id'] . '" ')->find();
        }

        //获取回复数量

        $reply_review_info = M('hyb_user_review')->where("reply_id = " . $info['id'] . ' and review_type = 2')->select();

        if ($type == 1) {

            if (count($reply_review_info) > 0) {

                $reply_review_info_array = array();

                foreach ($reply_review_info as $key => $value) {

                    import('model.Review');

                    $reviewModel = new ReviewModel();

                    $reviewModel->setReivewObject($value, 1);

                    $reply_review_info_array[] = $reviewModel;
                }
            }

            $this->reply_array = $reply_review_info_array;
        }

        $this->up_number = count(json_decode($info['up_list'], true));

        $this->reply_number = count($reply_review_info);

        $this->read_number = $info['read_number'] + 1;

        $this->create_time = date('Y-m-d H:i:s', $info['create_time']);

        $this->update_time = date('Y-m-d H:i:s', $info['update_time']);

        //添加阅读数

        $this->reviewOperate($info['id'], 1, '');

    }


    public function replyReivew($review_id, $open_id, $review_content)
    {

        if (!empty($review_id) && !empty($open_id) && !empty($review_content)) {

            $review_info = M('hyb_user_review')->where('id = ' . $review_id)->find();

            if ($review_info != NULL) {

                unset($review_info['id']);

                $review_info['open_id'] = $open_id;

                $review_info['review_content'] = $review_content;

                $review_info['review_type'] = 2;

                $review_info['reply_id'] = $review_id;

                $review_info['create_time'] = time();

                $review_info['update_time'] = time();

                M('hyb_user_review')->add($review_info);

                $this->res = 1;
            }
        }
    }

    public function createReview($order_id, $on_time_score, $major_score, $service_score, $review_content, $open_id)
    {

        if (!empty($open_id) && !empty($order_id) && !empty($on_time_score) && !empty($major_score) && !empty($service_score) && !empty($review_content)) {

            $total_score = number_format(($on_time_score + $major_score + $service_score) / 3, 1);

            $array = array(

                'open_id' => $open_id,

                'review_type' => 1,

                'order_id' => $order_id,

                'on_time_score' => $on_time_score,

                'major_score' => $major_score,

                'service_score' => $service_score,

                'review_content' => $review_content,

                'total_score' => $total_score,

                'create_time' => time(),

                'update_time' => time(),

                'reply_id' => 0,

                'review_object_type' => 1,
            );

            M('hyb_user_review')->add($array);

            $this->res = 1;
        }

    }

}