<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-12 18:19:45
         compiled from "/private/var/www/html/employer_tool/Lib/Account/Tpl/Account/pay_success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1240936822573458c1073a23-55833481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c29461d68bc49525d5f70eb1e3386ef6a56ed3' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Account/Tpl/Account/pay_success.tpl',
      1 => 1462869873,
    ),
  ),
  'nocache_hash' => '1240936822573458c1073a23-55833481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="hl-warp_div">
	<div class="wap-div-warp">
		<div style="text-align: center;font-size: 22px;padding-top: 100px;">
		<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon.png" style="width: 50px;margin-right: 10px;">
			充值成功，充值金额
			<span style="color:#3398ff;font-weight: bold;font-family:Arial;"><?php echo $_smarty_tpl->getVariable('money')->value;?>
元</span>
		</div>
		<div style="text-align: center;cursor: pointer;width: 100px;margin: 0 auto;margin-top: 100px;"onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
"'>返回首页</div>
	</div>
</div>

