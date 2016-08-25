<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-21 18:31:55
         compiled from "/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_reset_new_pwd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19993980575740391bd69b61-85502978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7833314f73cacb09b5f8973ca78c7d71a4287ff5' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_reset_new_pwd.tpl',
      1 => 1463825709,
    ),
  ),
  'nocache_hash' => '19993980575740391bd69b61-85502978',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>众人识才</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/login.css">

    <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.form.js"></script>


    <script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>
<body>
    <header>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        <div class="nav">
            <div class="nav_bar clearfix">
                <a href="" class=""></a>
            </div>
        </div>
    </header>
    <style type="text/css">

    body{

        font-family: 'Hiragino Sans GB', 'Microsoft Yahei UI', 'Microsoft Yahei', 微软雅黑, 'Segoe UI', Arial,Tahoma, 宋体b8b体, SimSun, sans-serif;
        
    }

    .form-group{
        margin-top: 15px;
    }
    .form-control{
        width: 100%;
    }
    .btnStandard:hover{
        opacity: 0.8;
    }
</style>
        
    

    <div id="p-body">
        <div class="retrieveOuter wrapper">
            <div class="retrieveInner">
                <h2>重置密码</h2>
                <p class="info"></p>
                <div class="form-horizontal">

                    <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/resetNewPassword' method='get' id='form' name='form'>

                        <input type='hidden' name='code' id='code' value='<?php echo $_smarty_tpl->getVariable('code')->value;?>
'>

                        <div class="form-group">
                            <label class="sr-only">重新设置新密码</label>
                            <input type="password" name='pwd_1' id="pwd_1" class="form-control" placeholder="创建新密码" onkeydown='if(event.keyCode==13) return false;' ></div>
                        <div class="form-group">
                            <label class="sr-only">重新输入新密码</label>
                            <input type="password" name='pwd_2' id="pwd_2" class="form-control" placeholder="重新输入密码" onkeydown='if(event.keyCode==13) return false;' ></div>
                        <div class="form-group" style="width: 100%; margin-left: 13px;">

                             <input id="resetBtn" type="button" 
                             class="btn btnStandard" value='发送' style="margin-top: 30px; width: 320px; color: #fff; background: #3398ff; height: 40px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>


            $('#resetBtn').click(function () {

                var pwd_1 = $("#pwd_1").val();
                var pwd_2 = $("#pwd_2").val();

                if (pwd_1.length<6) { 
                     setErrorTip("您输入的密码长度过短<br />密码长度必须大于6位");
                      return;
                };

                if(pwd_1 != pwd_2){
                    setErrorTip("您两次输入的密码不一致");
                      return;
                }


                var email = $('#email').val();

                var options = {
                    success: function (data) {

                        if(data == 1){

                            window.location.href = url
                        } else{

                            setErrorTip(data);
                        }
                    }
                };

                $('#form').ajaxForm(options);

                $("#form").ajaxSubmit(options);

            })
                
</script>
    
</body>
</html>

    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/ieBetter-min.js"></script>