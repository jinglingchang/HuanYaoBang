<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-10 19:04:00
         compiled from "/private/var/www/html/employer_tool/Public/html//multPage/_header_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3735634285731c020251e80-42313765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aeba6fd57dfca04d93eb5329a339d0e8d980225' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//multPage/_header_2.tpl',
      1 => 1462536062,
    ),
  ),
  'nocache_hash' => '3735634285731c020251e80-42313765',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!-- 黑色背景 蓝色logo -->

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/style1.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/new_open_account.css">
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.form.js"></script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/message.js"></script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/hirelibEngine.js"></script>

<div style="width:100%;background-color:black;height: 70px;">
	<div style="width:100%; max-width: 1200px; height:70px;margin: 0 auto;text-align: left; ">

		<?php if ($_smarty_tpl->getVariable('user_id')->value>0){?>

		<img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/logo.png' style="width: 144px;margin-top: 12px;cursor: pointer;" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
"' />
		
		<?php }else{ ?>

		<img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/logo.png' style="width: 144px;margin-top: 12px;cursor: pointer;" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/login"' />

		<?php }?>

		
	</div>
</div>
<style type="text/css">
    .loading{
        position: fixed; width: 100%; background: rgba(0,0,0,0.5); height: 100%; padding-top: 16%;vertical-align:middle;display: none; z-index: 999999;
    }
</style>
<div class="loading"><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/_loading.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 