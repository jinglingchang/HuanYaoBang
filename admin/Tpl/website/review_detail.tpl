<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {include file="../public/_default.tpl"}

    <style>

        dd {

            margin-top: 10px;

            height: 20px;

            padding-top: 10px;
        }

        dt {

            margin-top: 10px;

            height: 20px;

            margin-right: 10px;

        }

        strong {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            font-weight:bold;
            margin-right: 25px;
            width: 80px;

        }
    </style>

</head>
<body>

<div style="height: 10px;">&nbsp;</div>

<input type='hidden' id='order_id' name='order_id' value='{$data.id}'>

<span class="glyphicon glyphicon-arrow-left" aria-hidden="true" style="margin-left: 20px;width: 50px;cursor: pointer"
      onclick="history.go(-1)"></span>

<dl class="dl-horizontal">

    <img src="{$data.user.headimgurl}" height="80" width="80" style="float:right;    margin-right: 50%;" />
 
    <dt>id ：</dt>
    <dd>{$data.review.id}</dd>
    
    <dt>微信昵称 ：</dt>
    <dd>{$data.user.nickname}</dd>     
    <dt>性别 ：</dt>
    <dd>{$data.user.sex}</dd>
    <dt>城市 ：</dt>
    <dd>{$data.user.province}{$data.user.city}</dd>
    <dt>手机 ：</dt>
    <dd>{$data.user.phone}</dd>
    <dt>评论时间 ：</dt>
    <dd>{$data.review.create_time|date_format:"%Y-%m-%d %H:%M:%S"}</dd>
    <dt>准时分 ：</dt>
    <dd>{$data.review.on_time_score}</dd>
    <dt>专业分 ：</dt>
    <dd>{$data.review.major_score}</dd>
    <dt>服务分 ：</dt>
    <dd>{$data.review.service_score}</dd>
    <dt>平均分 ：</dt>
    <dd>{$data.review.total_score}</dd>
    <dt>评论内容 ：</dt>
    <dd></dd>
    <div><textarea rows="3" cols="20">
      {$data.review.review_content}
    </textarea></dt>


    <div style='height:30px;'>&nbsp;</div>

</dl>

</body>
</html>
