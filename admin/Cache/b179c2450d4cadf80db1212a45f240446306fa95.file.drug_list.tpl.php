<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-23 20:50:02
         compiled from "/web/www/medhelper_admin/Tpl/website/drug_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116747067257bc467a322816-55450336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b179c2450d4cadf80db1212a45f240446306fa95' => 
    array (
      0 => '/web/www/medhelper_admin/Tpl/website/drug_list.tpl',
      1 => 1471956566,
    ),
  ),
  'nocache_hash' => '116747067257bc467a322816-55450336',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/web/www/medhelper_admin/Smarty/libs/plugins/modifier.date_format.php';
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
    body {
        overflow-x: hidden;
    }

    .userMangerTitle {
        color: rgb(91, 91, 91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }

    .sortBar {
        width: auto;
        margin-left: 25px;
        height: 25px;
        line-height: 0px;
        margin-right: 45px;
        /*        margin: 0 auto;*/
    }

    table tr > th {
        text-align: center;
        background-color: #eee;
    }

    table tr > td {
        text-align: center;
        vertical-align: middle !important;
        border-bottom-color: #D5E3E7 !important;
    }

    table tr:nth-of-type(even) {
        background-color: #F9FCFD;
    }

    .selectText {
        height: 32px;
        border-radius: 0px;
        border: #c5c5c5 solid 1px;
        box-shadow: 0px 2px 2px #888 inset;
        padding-left: 10px;
        width: 224px;
    }

    .selectBar {
        padding-left: 25px;
    }
</style>
<script>
</script>
<div style="height: 20px;"></div>
<button type="submit" class="btn btn-default"
        onclick='javascript:window.location.href="pageredirst.php?action=drug&functionname=add_drug_info"'
        style='margin-left: 2px;margin-top: 12px;'>添加药品
</button>
<div style="height: 10px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th style="width: 30px;">id</th>
            <th style="width: 30px;">订单号</th>
            <th style="width: 30px;">姓名</th>
            <th style="width: 30px;">医院</th>
            <th style="width: 30px;">手术信息</th>
            <th style="width: 30px;">支付状态</th>
            <th style="width: 35px;">订单状态</th>
            <th style="width: 30px;">创建时间</th>
            <th>操作</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
</td>

                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['order_sn'];?>
</td>

                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['name'];?>
</td>

                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['hospital_name'];?>
</td>

                <td><?php echo $_smarty_tpl->tpl_vars['datas']->value['operation_info'];?>
</td>
                <td>

                    <?php if ($_smarty_tpl->tpl_vars['datas']->value['pay_status']==1){?>
                        <span class="label label-default">未支付</span>
                    <?php }elseif($_smarty_tpl->tpl_vars['datas']->value['pay_status']==2){?>
                        <span class="label label-primary">已支付订金</span>
                    <?php }else{ ?>
                        <span class="label label-success">已付全款</span>
                    <?php }?>

                </td>
                <td>

                    <?php if ($_smarty_tpl->tpl_vars['datas']->value['order_status']==1){?>
                        <span class="label label-default">已创建</span>
                    <?php }elseif($_smarty_tpl->tpl_vars['datas']->value['order_status']==2){?>
                        <span class="label label-success">已完成</span>
                    <?php }elseif($_smarty_tpl->tpl_vars['datas']->value['order_status']==3){?>
                        <span class="label label-danger">订单失败</span>
                    <?php }else{ ?>
                        <span class="label label-primary">已确认</span>
                    <?php }?>


                </td>

                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value['create_time'],"%Y-%m-%d");?>
</td>
                <td>
                    <a href="pageredirst.php?action=drug&functionname=detail&id=<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
">查看详情</a>
                </td>
            </tr>
        <?php }} ?>
    </table>
</div>
<?php echo $_smarty_tpl->getVariable('fenye')->value;?>
