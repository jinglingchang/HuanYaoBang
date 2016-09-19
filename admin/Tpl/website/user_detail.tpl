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

    <img src="{$data.headimgurl}" height="80" width="80" style="float:right;    margin-right: 50%;" />
 
    <dt>id ：</dt>
    <dd>{$data.id}</dd>
    
    <dt>微信昵称 ：</dt>
    <dd>{$data.nickname}</dd>     
    <dt>性别 ：</dt>
    <dd>{$data.sex}</dd>
    <dt>城市 ：</dt>
    <dd>{$data.province}{$datas.city}</dd>
    <dt>手机 ：</dt>
    <dd>{$data.phone}</dd>
    <dt>创建时间 ：</dt>
    <dd>{$data.create_time|date_format:"%Y-%m-%d %H:%M:%S"}</dd>
    <dt>更新时间 ：</dt>
    <dd>{$data.update_time|date_format:"%Y-%m-%d %H:%M:%S"}</dd>
    <dt>首次下单 ：</dt>
    <dd>{$data.first_create_time}</dd>

    <div style='height:30px;'>&nbsp;</div>

</dl>

<table style="width:100%;margin-left:86px"> 
    <tr> 
        <td>
            <a href="pageredirst.php?action=order&functionname=detail&id={$data.order.id}">最新预约信息>></a>
        </td>
    </tr> 
    <tr> 
        <td><strong>上门时间：</strong>{$data.order.service_time|date_format:"%Y-%m-%d"}</td>
        <td><strong>共计金额： &nbsp;&nbsp;&nbsp; </strong>&nbsp;&nbsp;{$data.order.total_money}元</td>
    </tr> 
    <tr> 
        <td><strong>手术部位：</strong>{$data.order.operation_info}</td>
        <td><strong>已支付金额： &nbsp; </strong>{$data.order.total_money-$data.order.remain_money}元</td>
    </tr>

    <tr> 
        <td><strong>服务项目：</strong>{$data.order.operation_info}</td>
        <td><strong>剩余支付金额：</strong>{$data.order.remain_money}元</td>
    </tr>
</teble>


</body>
</html>
