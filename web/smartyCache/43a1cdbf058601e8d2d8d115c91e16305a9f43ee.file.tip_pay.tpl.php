<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-26 20:54:48
         compiled from "/private/var/www/html/employer_tool/Lib/Tip/Tpl/Tip/tip_pay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6659524915746f218f0c8f0-29742999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a1cdbf058601e8d2d8d115c91e16305a9f43ee' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Tip/Tpl/Tip/tip_pay.tpl',
      1 => 1463825106,
    ),
  ),
  'nocache_hash' => '6659524915746f218f0c8f0-29742999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class='tip_div'>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/lianjia.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/new_open_account.css"> 

<style type="text/css">
    .errorTip{
        margin-top: -20px;
        color: red;
        margin-bottom: 10px;
        font-size: 14px;
        width: 320px;

        visibility: hidden;
    }

</style>
<script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

<div class="loninContainer payTips" style="display:block;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 418px; padding-left: 50px;"> 
        <div class="panel_info">
            <div class="panel_tab">
                <div class="title">
                    <div class="fl feedbackTitle">支付操作</div>
                </div>
                <div class="clear"></div>
                <div id="con_login_user">

              <!--   <input type="text" id='filter_name' name="filter_name" value="" placeholder="请填写筛选器的名称" style="font-size: 14px;border: solid 1px #999;border-radius: 2px;padding-left: 10px;    width: 320px;height: 42px;">

                <br /> -->

                <div id='error_tip_s'></div>

                <button type="button" style='height:40px; margin-top:25px;'  class="new-open-account-button" onclick="completePay('<?php echo $_smarty_tpl->getVariable('pingpp_account_id')->value;?>
')">完成支付</button> 

                <button type="button" style='height:40px; margin-top:25px;background-color: gray;'  class="new-open-account-button" onclick="payQuestion()">支付发生问题?</button> 


                </div>
            </div>
        </div>
        <div style="height: 20px;"></div>
    </div>
</div>


</div>
