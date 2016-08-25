<?php

/**
 * Created by PhpStorm.
 * User: zxp
 * Date: 16/8/22
 * Time: 下午4:01
 */
class WeixinModel extends baseModel
{

    private $appid = '';

    private $secret = '';

    public function getWeixinInfoByCode($code)
    {
        if (!empty($code)) {

            $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=' . $this->appid . '&secret=' . $this->secret . '&code=' . $code . '&grant_type=authorization_code';

            $result = json_decode(file_get_contents($url), true);

            if ($result != NULL && !empty($result['access_token'])) {

                $this->setObjectValue('weixin_access_token',$result['access_token']);

                $this->setObjectValue('weixin_open_id',$result['openid']);
            }
        }

    }

    //调用微信公众平台的网页授权获取基本用户信息接口,插入数据库

    public function getWxInfoByApi(){

        if(!empty($this->weixin_access_token) && !empty($this->weixin_open_id)){

            $url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$this->weixin_access_token.'&openid='.$this->weixin_open_id.'&lang=zh_CN';

            $result = json_decode(file_get_contents($url),true);

            if($result != NULL && !empty($result['openid'])){

                $result['privilege'] = json_encode($result['privilege']);

                $result['create_time'] = time();

                $result['update_time'] = time();

                M('hyb_weixin_info')->add($result);
            }
        }
    }

    public function getWeixinInfoByOpenId($openId){

        if(!empty($openId)){

            $weixin_info = M('hyb_weixin_info')->where('openid like "'.$openId.'" ')->find();

            if($weixin_info != NULL){

                $this->createObjectAttr($weixin_info);
            }
        }
    }
}