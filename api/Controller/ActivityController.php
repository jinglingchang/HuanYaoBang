<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 下午3:58
 */
class ActivityController
{

    //绑定好友关系

    public function add()
    {

        $invite_open_id = $_REQUEST['invite_open_id'];

        $by_invite_open_id = $_REQUEST['by_invite_open_id'];

        if (!empty($invite_open_id) && !empty($by_invite_open_id)) {

            import('model.Activity');

            $activityModel = new ActivityModel();

            $activityModel->bindRelation($invite_open_id, $by_invite_open_id);

            echoJson($activityModel);

        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);
        }

    }



    public function show()
    {

        $openid = $_REQUEST['open_id'];

        $activity_id = $_REQUEST['activity_id'];

        if (!empty($openid) && !empty($activity_id)) {

            import('model.Activity');

            $activityModel = new ActivityModel();

            $activityModel->getActivityRecord($openid, $activity_id);

            echoJson($activityModel);

        } else {

            $array = array('code' => 101, 'status' => "参数不全");

            echoJson($array);
        }

    }

    public function receive(){

        $openid = $_REQUEST['openid'];

        $by_open_id = $_REQUEST['by_openid'];

        $activity_id = $_REQUEST['activity_id'];

        if(!empty($openid) && !empty($by_open_id) && !empty($activity_id)){


        }

    }


}