<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 11:40:09
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resumeajax/Tpl/Resumeajax/_resume_label.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10010545955732a9998c6be8-14230705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab886c5a5ce9b08220a90a96eb3edf2aac0ad26' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resumeajax/Tpl/Resumeajax/_resume_label.tpl',
      1 => 1462523677,
    ),
  ),
  'nocache_hash' => '10010545955732a9998c6be8-14230705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<style type="text/css">
	.review-table{
		border:none;
	}
	.review-table tr td{
		padding: 0px;
		font-size: 14px;
	}

</style>


<?php if ($_smarty_tpl->getVariable('label_data')->value!=null){?>

<table class="review-table">

    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('label_data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>

     <tr>
        <td style="width: 13%;vertical-align: sub; padding-left: 20px;padding-top: 10px;">
        	<?php echo $_smarty_tpl->tpl_vars['data']->value['nickname'];?>

        </td>
        <td style="width: 72%; padding-left: 15px;line-height: 22px;text-align: left;">
        	<div style="height: 35px;padding-top: 10px;">
        		<span>
        			<?php echo $_smarty_tpl->tpl_vars['data']->value['create_time'];?>

        		</span>
        		<span>
        			<img style="margin-left: 5px; width: 110px;" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/star/star<?php echo $_smarty_tpl->tpl_vars['data']->value['new_start'];?>
.png" />
        		</span>
        	</div>
        	 <div style="height: 35px;">
        	 	<?php echo $_smarty_tpl->tpl_vars['data']->value['label_content'];?>

        	 </div>
        </td>
    </tr>

    <?php }} ?>

</table>

<?php }else{ ?>

暂无点评信息

<?php }?>
