<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-26 21:42:13
         compiled from "/private/var/www/html/employer_tool/Lib/Accountajax/Tpl/Accountajax/getBill.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5973198855746fd35ed3c33-09231216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04edb259e74837271de074d78b53a6a4e92b9c43' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Accountajax/Tpl/Accountajax/getBill.tpl',
      1 => 1464270104,
    ),
  ),
  'nocache_hash' => '5973198855746fd35ed3c33-09231216',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/private/var/www/config/Smarty/libs/plugins/modifier.date_format.php';
?>
<?php if (count($_smarty_tpl->getVariable('list')->value)>0){?>

<table class="hl-detail-table">
    <tr style="border:none;">
        <th class="table-row-one">交易号</th>
        <th class="table-row-two">日期</th>
        <th class="table-row-three">信息</th>
        <th class="table-row-four">金额(元)</th>
        <th class="table-row-five">交易状态</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
        <tr>

            <td class="table-row-one"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
            <td class="table-row-two">
                <div class="hl-detail-td-title-div"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['transaction_time'],"%Y-%m-%d ");?>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['transaction_time'],"%H:%M");?>
</div>

            </td>
            <td class="table-row-three">
                <div class="hl-detail-td-title-div">
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['trans_type']==0){?>

                        <?php if ($_smarty_tpl->tpl_vars['data']->value['item_id']==22){?>

                        系统赠送

                        <?php }else{ ?>

                        充值

                        <?php }?>

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['trans_type']==1){?>

                        <?php if ($_smarty_tpl->tpl_vars['data']->value['approval_status']==1){?>

                            冻结

                        <?php }elseif($_smarty_tpl->tpl_vars['data']->value['approval_status']==2){?>

                            解冻

                        <?php }elseif($_smarty_tpl->tpl_vars['data']->value['approval_status']==3){?>

                            扣费

                        <?php }?>

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['trans_type']==2&&$_smarty_tpl->tpl_vars['data']->value['item_id']==2){?>

                        购买社交报告


                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['trans_type']==9&&$_smarty_tpl->tpl_vars['data']->value['item_id']==9){?>

                        打赏简历

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['item_id']==11){?>

                        简历被打赏

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['item_id']==17){?>

                    提现

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['item_id']==18){?>

                        投诉退款

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['item_id']==19){?>

                        新手任务

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['item_id']==20){?>

                        注册活动赠送

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['item_id']==21){?>

                        简历被购买

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['item_id']==22){?>

                        系统赠送

                    <?php }?>

                </div>

            </td>
            <td class="table-row-four">
                <?php if ($_smarty_tpl->tpl_vars['data']->value['trans_direction']==0){?>

                    +<?php echo $_smarty_tpl->tpl_vars['data']->value['trans_amount'];?>


                <?php }else{ ?>

                    <?php if ($_smarty_tpl->tpl_vars['data']->value['item_id']==11){?>

                        +<?php echo $_smarty_tpl->tpl_vars['data']->value['trans_amount'];?>


                    <?php }else{ ?>

                        -<?php echo $_smarty_tpl->tpl_vars['data']->value['trans_amount'];?>


                    <?php }?>



                <?php }?>
            </td>
            <td class="table-row-five">成功</td>
        </tr>
    <?php }} ?>


</table>


<div style="height: 100px;background: #fff;line-height: 28px;padding-top: 37px; border: solid 1px #e1e1e1; border-top: none;" class='page_div'>
    <?php echo $_smarty_tpl->getVariable('fenye')->value;?>

</div>

<?php }else{ ?>

<div style='text-align: center;height:400px;background-color: white;'>


    <div style='height:180px;'>&nbsp;</div>

    <div style='height:18px;'><?php echo $_smarty_tpl->getVariable('name')->value;?>
</div>

</div>

<?php }?>


<style>

.page_div {
    height: 50px;
    text-align: right;
    margin-right: 0px;

    width: 100%;

    padding-right: 20px;
}

</style>