<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-13 19:16:42
         compiled from "/private/var/www/html/employer_tool/Lib/Public/Tpl/Public/sendResetPasswordEmail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:819367364575e961a2eddc3-61925979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38285ce9a037fe184eead9614e4ebb37645ad838' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Public/Tpl/Public/sendResetPasswordEmail.tpl',
      1 => 1465816582,
    ),
  ),
  'nocache_hash' => '819367364575e961a2eddc3-61925979',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
</head>
<meta charset="UTF-8">
<title>忘记密码</title>

<style type="text/css">

  .hl-warp_div{
    border: solid 1px #e1e1e1;width: 640px; min-height: 300px; margin: 0 auto;
  }
 
</style>

<body>

  <div class="hl-warp_div">

    <div style="height:65px;">
      <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/email/email_head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 
    </div>
    <div style="font-size: 20px;padding-left: 46px;padding-top: 40px; color:#202020">
      尊敬的用户，您好:
    </div>
    <div style="font-size: 20px;color: #202020;text-align: center;padding-top: 36px;">
      众人识才已收到你的找回密码请求，请点击以下按钮重置密码。
    </div>

     <div style="text-align: center;margin-top: 38px;border: solid 1px none;">
          <a style="width: 192px;height: 50px;border: none;font-size: 15px;
    border-radius: 3px;color: #fff;margin: 0 auto;line-height: 50px;display: block;text-decoration: none;background: #333;" href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/resetEmailPassword?code=<?php echo $_smarty_tpl->getVariable('code')->value;?>
'>重置密码</a></div>


    <div style="border-top: solid 1px #e1e1e1;width: 90%;margin: 0 auto;
    margin-top: 46px;"></div>

    <div style=" margin-top: 40px;font-size: 14px;color: #999;text-align: center;">
      如果按钮无效，请点击以下连接(连接将在xx小时候后失效)
    </div>

    <div style=" font-size: 16px;color: #020202;text-align: center;width: 78%;margin: 0 auto; margin-top:26px;line-height: 24px;">
      <?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/resetEmailPassword?code=<?php echo $_smarty_tpl->getVariable('code')->value;?>

    </div>

    <div style="margin-top:2em">
      <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/email/email_bottom.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 
    </div>

  </div>

</body>

</html>