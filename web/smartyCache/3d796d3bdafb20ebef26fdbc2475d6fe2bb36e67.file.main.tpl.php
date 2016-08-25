<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-30 12:02:23
         compiled from "/private/var/www/html/employer_tool/Lib/Homepage/Tpl/Homepage/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1712111994574bbb4f6402a4-12840597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d796d3bdafb20ebef26fdbc2475d6fe2bb36e67' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Homepage/Tpl/Homepage/main.tpl',
      1 => 1464426490,
    ),
  ),
  'nocache_hash' => '1712111994574bbb4f6402a4-12840597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<!-- <?php if ($_smarty_tpl->getVariable('is_meum')->value==1){?>

	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php }else{ ?>

	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/menu_title.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php }?>
 -->

 <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/_header_".($_smarty_tpl->getVariable('header_type')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/js/sea/3.0.1/sea.js"></script>
<script type="text/javascript">
var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'

	seajs.config({
  	  	 base: "<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
assets/js/",
 		 alias: {
        	"jquery": "jquery/2.1.4/jquery.js"
         }
	 })

  $(function(){

    hirelibEngine.checkVersion();

  })
</script>

<div style="min-hight:480px" class="homePage">

<?php echo $_smarty_tpl->getVariable('content')->value;?>

</div>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4ed3404849a03c3b8fd865b3c5ae17c3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>



<script type='text/javascript'>window.BWEUM||(BWEUM={});BWEUM.info = {"stand":true,"agentType":"browser","agent":"bi-collector.oneapm.com/static/js/bw-send-411.4.5.js","beaconUrl":"bi-collector.oneapm.com/beacon","licenseKey":"bqzzR~M6MFurJnva","applicationID":2282830};</script><script type="text/javascript" src="//bi-collector.oneapm.com/static/js/bw-loader-411.4.5.js"></script>





