<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-13 19:15:07
         compiled from "/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_forget_pwd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67935805575e95bb8955e6-66938064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5057061e9fb7b333e3196974bdaf4fa5dc805bfd' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_forget_pwd.tpl',
      1 => 1465816331,
    ),
  ),
  'nocache_hash' => '67935805575e95bb8955e6-66938064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html lang="en"><head>
        <meta charset="utf-8">
        <title>忘记密码</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/login.css">

        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.min.js"></script>

        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/hirelibEngine.js"></script>

    </head>

    <style type="text/css">

        body{
            background: rgb(240,240,240);

            font-family: 'Hiragino Sans GB', 'Microsoft Yahei UI', 'Microsoft Yahei', 微软雅黑, 'Segoe UI', Arial,Tahoma, 宋体b8b体, SimSun, sans-serif;
        }
    </style>
    <body>

        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>  

        <header>
            <div class="nav">
                <div class="nav_bar clearfix">
                    <!-- <a href="https://pingxx.com" class="logo"></a> -->
                </div>
            </div>
        </header>
        <div id="p-body" style="width: 1000px; background: #fff; height: 550px; margin: 0 auto; margin-top: 40px;">  
            <div class="retrieveOuter wrapper" style='padding-top:-1%;'>
                <div class="retrieveInner">
                    <h2 style="margin-bottom: 15px;margin-top: -30px;">重 置 密 码</h2>
                    <div style="color: #444;font-size: 15px;">
                        请填写登录邮箱，我们将发送一封验证邮件
                    </div>
                    <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/sendUserEmailResetPassword' method='get' id='form' name='form'>

                        <div class="form-group">
                            <input data-toggle="tooltip" data-placement="top" data-html="true" id="email" name="email" value="" class="new-open-account-input" placeholder="输入你的邮箱" style="width:285px;height: 40px;" />
                        </div>
                    </form>

                    <input  id="registerBtn" type="button" class="new-open-account-button" value='发送' style="margin-top: 30px; width: 285px; height: 40px;line-height:44px;">

                </div>
            </div>

        </div>

        <script>


            $('#registerBtn').click(function () {

                var ajaxurl = url + 'user/sendUserEmailResetPassword'

                var params = new FormData();

                var email = $('#email').val();

                params.append('email', email);

                hirelibEngine.ajaxNative(ajaxurl, 'post', params, function success(data) {

                    var data = data.replace(/(^\s+)|(\s+$)/g, "");

                    if (data == 1) {

                        $('#email_0').html(email)

                        $('#default_tip').css('display', 'none');

                        $('#success_tip').css('display', 'block');

                        setErrorTip('发送成功，请去邮箱中查看');

                    } else {

                        setErrorTip(data);
                    }

                }, function error(data) {


                }, 0);

            })

        </script>
    </body>


</html>