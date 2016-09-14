<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-10 16:50:38
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//multPage/menu_title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19783380925731a0de773768-38601749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0994758ae28fd4e07793b60b39f8ef4a642dde48' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//multPage/menu_title.tpl',
      1 => 1459133972,
    ),
  ),
  'nocache_hash' => '19783380925731a0de773768-38601749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

    <div style="height: 70px;background: rgb(26,24,28);color: #fff;
             line-height: 70px;text-align: center; padding-left:40px;">
             <span><?php echo $_smarty_tpl->getVariable('title')->value;?>
</span>
         <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/home/222.png" onclick="history.go(-1)" style="width: 20px;cursor: pointer;float: right;margin-top: 28px;margin-right: 40px;" />
     </div>
<style type="text/css">
.loading{
        position: fixed; width: 100%; background: rgba(0,0,0,0.5); height: 100%; padding-top: 16%;vertical-align:middle;display: none; z-index:999999;margin-top: -70px;
        }
</style>
<div class="loading"><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/_loading.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div>