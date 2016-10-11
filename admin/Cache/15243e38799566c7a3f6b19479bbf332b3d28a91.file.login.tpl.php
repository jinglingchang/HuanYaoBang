<?php /* Smarty version Smarty-3.0-RC2, created on 2016-09-21 13:40:51
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2257957e21d63210054-21207971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15243e38799566c7a3f6b19479bbf332b3d28a91' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/default/login.tpl',
      1 => 1473786538,
    ),
  ),
  'nocache_hash' => '2257957e21d63210054-21207971',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>

        <link href="<?php echo $_smarty_tpl->getVariable('WEBSITEPUBLIC')->value;?>
/css/login.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript">
            function enterIn(evt) {
                var evt = evt ? evt : (window.event ? window.event : null);//兼容IE和FF
                if (evt.keyCode == 13) {
                    mysub();
                }
            }
            function mysub() {
                if (document.getElementById('myuser').value == '' || document.getElementById('mypassword').value == '') {
                    alert('请输入用户名或密码');
                }
                else {
                    document.getElementById('myform').submit();
                }
            }
        </script>
    </head>
    <body class='loginBack'>

        <form action="<?php echo $_smarty_tpl->getVariable('WEBSITEURL')->value;?>
/pageredirst.php?action=login&functionname=loginAjax&source=<?php echo $_smarty_tpl->getVariable('SOURCE')->value;?>
" method="post" id="myform">
            <div id="login">
                <div class="login_name"><span>医疗帮后台</span></div>
                <div class="login_frame">
                    <div id="user">
                        <div>用户名</div>
                        <input type="text" id="myuser" name="user" onkeydown="enterIn(event);" />
                    </div>
                    <div id="password">
                        <div>密码</div>
                        <input type="password" id="mypassword" name="password" onkeydown="enterIn(event);" />
                    </div>
                    <div id="btn">
                      
                        <input class="login_reset" type="reset" value="清空" />
                        

                        <a href="javascript:void(0)" onclick="mysub()">登录</a>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
