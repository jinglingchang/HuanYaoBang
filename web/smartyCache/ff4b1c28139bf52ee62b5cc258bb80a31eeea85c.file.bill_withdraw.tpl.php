<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-21 18:14:48
         compiled from "/private/var/www/html/employer_tool/Lib/Accountajax/Tpl/Accountajax/bill_withdraw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131780877257403518103795-19548092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4b1c28139bf52ee62b5cc258bb80a31eeea85c' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Accountajax/Tpl/Accountajax/bill_withdraw.tpl',
      1 => 1463825583,
    ),
  ),
  'nocache_hash' => '131780877257403518103795-19548092',
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
        <th class="table-row-four">提现金额(元)</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
        <tr>

            <td class="table-row-one"><?php echo $_smarty_tpl->tpl_vars['data']->value['order_id'];?>
</td>
            <td class="table-row-two">
                <div class="hl-detail-td-title-div"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%Y-%m-%d ");?>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%H:%M");?>
</div>

            </td>
            <td class="table-row-three">
                <div class="hl-detail-td-title-div">
                    
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['deal']==0){?>

                    提现处理中

                    <?php }elseif($_smarty_tpl->tpl_vars['data']->value['deal']==1){?>

                    提现成功

                    <?php }else{ ?>

                    提现失败

                    <?php }?>

                </div>

            </td>
            <td class="table-row-four">
                
                <?php echo $_smarty_tpl->tpl_vars['data']->value['money'];?>


            </td>

        </tr>
    <?php }} ?>


</table>


<div style="height: 100px;background: #fff;line-height: 28px;padding-top: 37px; border: solid 1px #e1e1e1;text-align: right;" class='page_div'>
    <?php echo $_smarty_tpl->getVariable('fenye')->value;?>

</div>

<?php }else{ ?>

<div style='text-align: center;height:400px;background-color: white;'>

    <div style='height:180px;'>&nbsp;</div>

    <div style='height:18px;'>暂无提现信息</div>

</div>

<?php }?>


<style>

.page_div {
    height: 50px;
    text-align: right;
    margin-right: 0px;

    padding-right: 20px;

    width: 100%;
}
</style>