<?php /* Smarty version Smarty-3.0-RC2, created on 2016-10-11 09:23:28
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/website/user_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1323057fc3f10154aa4-37168416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f7815dbd905ef01ad3d41544d9dcee63a3b710c' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/website/user_detail.tpl',
      1 => 1474277388,
    ),
  ),
  'nocache_hash' => '1323057fc3f10154aa4-37168416',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\hybbbb\admin\Smarty\libs\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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

<input type='hidden' id='order_id' name='order_id' value='<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
'>

<span class="glyphicon glyphicon-arrow-left" aria-hidden="true" style="margin-left: 20px;width: 50px;cursor: pointer"
      onclick="history.go(-1)"></span>

<dl class="dl-horizontal">

    <img src="<?php echo $_smarty_tpl->getVariable('data')->value['headimgurl'];?>
" height="80" width="80" style="float:right;    margin-right: 50%;" />
 
    <dt>id ：</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
</dd>
    
    <dt>微信昵称 ：</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['nickname'];?>
</dd>     
    <dt>性别 ：</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['sex'];?>
</dd>
    <dt>城市 ：</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['province'];?>
<?php echo $_smarty_tpl->getVariable('datas')->value['city'];?>
</dd>
    <dt>手机 ：</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['phone'];?>
</dd>
    <dt>创建时间 ：</dt>
    <dd><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('data')->value['create_time'],"%Y-%m-%d %H:%M:%S");?>
</dd>
    <dt>更新时间 ：</dt>
    <dd><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('data')->value['update_time'],"%Y-%m-%d %H:%M:%S");?>
</dd>
    <dt>首次下单 ：</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['first_create_time'];?>
</dd>

    <div style='height:30px;'>&nbsp;</div>

</dl>

<table style="width:100%;margin-left:86px"> 
    <tr> 
        <td>
            <a href="pageredirst.php?action=order&functionname=detail&id=<?php echo $_smarty_tpl->getVariable('data')->value['order']['id'];?>
">最新预约信息>></a>
        </td>
    </tr> 
    <tr> 
        <td><strong>上门时间：</strong><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('data')->value['order']['service_time'],"%Y-%m-%d");?>
</td>
        <td><strong>共计金额： &nbsp;&nbsp;&nbsp; </strong>&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('data')->value['order']['total_money'];?>
元</td>
    </tr> 
    <tr> 
        <td><strong>手术部位：</strong><?php echo $_smarty_tpl->getVariable('data')->value['order']['operation_info'];?>
</td>
        <td><strong>已支付金额： &nbsp; </strong><?php echo $_smarty_tpl->getVariable('data')->value['order']['total_money']-$_smarty_tpl->getVariable('data')->value['order']['remain_money'];?>
元</td>
    </tr>

    <tr> 
        <td><strong>服务项目：</strong><?php echo $_smarty_tpl->getVariable('data')->value['order']['operation_info'];?>
</td>
        <td><strong>剩余支付金额：</strong><?php echo $_smarty_tpl->getVariable('data')->value['order']['remain_money'];?>
元</td>
    </tr>
</teble>


</body>
</html>
