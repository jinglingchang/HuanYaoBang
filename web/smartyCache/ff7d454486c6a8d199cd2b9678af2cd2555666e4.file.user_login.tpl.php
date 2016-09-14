<?php /* Smarty version Smarty-3.0-RC2, created on 2016-07-08 19:55:18
         compiled from "/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:831735198577f94a6e2c8d5-85105105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff7d454486c6a8d199cd2b9678af2cd2555666e4' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_login.tpl',
      1 => 1467962183,
    ),
  ),
  'nocache_hash' => '831735198577f94a6e2c8d5-85105105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
    <meta charset="utf-8">
    <title>众人识才</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/login.css">
    <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.form.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/ieBetter-min.js"></script>

    <script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

</head>
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <style type="text/css">
    body{
        background: rgb(240,240,240);
    }
    </style>
    <!-- pop -->
    <div class="independentLogin" style='display:block;' >
        <div class="popmask"></div>
        <div class="popwrap popsm" style="width: 1000px;text-align: center; margin: 0 auto;">
            <div class="popbox" style=" margin-top: -100px; height: 550px;">
                <div class="popheader clearfix"></div>

                <form id="login_form">
                    <div class="popbody">

                        <h4>登录</h4>
                        <div class="form-group">
                            <label class="sr-only" for="username">登录</label>
                            <input class="new-open-account-input" id="username" autofocus="autofocus" type="email" placeholder="请输入邮箱"></div>
                        <div class="form-group">
                            <label class="sr-only" for="password"></label>
                            <input class="new-open-account-input" id="password" type="password" placeholder="密码" style="margin-top:10px; margin-bottom:20px;"></div>
                    </div>
                    <div class="popfooter">
                        <button type="submit" style='height:48px;' id="loginBtn" class="new-open-account-button" disabled="disabled">登录</button>
                    </div>
                    <div style="width: 33%;margin: 0 auto;">
                        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/newCreatAccount" class="" target="_blank" style="font-size: 14px;color: #3398ff; margin-top: 10px; float: left;">注册账户</a>

                        <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/resetpassword" class="" target="_blank" style="font-size: 14px;color: #3398ff; margin-top: 10px;float: right;">忘记密码</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
    // $(function(){
    //     var boxH = $('.popwrap').outerHeight();
    //     var windowH = $(window).height();
    //     var wrapperH = windowH - boxH;
    //     if(boxH < windowH) {
    //         $('.popwrap').css({
    //             'margin-top': wrapperH / 20
    //         });
    //     }
    // }); 

    (function(){
        var mod={};

        var cookie={
            get:function(name){
                var ret=document.cookie.match(new RegExp('(?:^|;\\s)'+name+'=(.*?)(?:;\\s|$)'));
                return ret?ret[1]:"";
            },
            set:function(name,value){
                var path='/';
                document.cookie=encodeURIComponent(name)+'='+encodeURIComponent(value)+'; path='+path;
            },
            del:function(name){
                document.cookie = name + '=; expires=Mon, 26 Jul 1997 05:00:00 GMT; path=/';
            },
            setWithExpire:function(name,value,days){
                var exp=new Date();
                exp.setTime(exp.getTime()+days*24*60*60*1000);
                document.cookie=encodeURIComponent(name)+'='+encodeURIComponent(value)+'; expires='+exp.toGMTString();
            }
        };

        mod.emailReg=/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;

        mod.init=function(){
            var _this=this;

            var lastLoginName=cookie.get('lastLoginName');
            if(lastLoginName!=''){
                $('#username').val(decodeURIComponent(lastLoginName));
            }

            _this.bind();
        };
        mod.bind=function(){
            var _this=this;

            $('#username').off('keyup').on('keyup change', function(e){
                var username=$('#username').val().trim();
                var password=$('#password').val().trim();
                $('#loginBtn').removeClass('error');
                $('#loginBtn').text('登录');
                if(_this.emailReg.test(username)&&password.length>=6){
                    $('#loginBtn').removeAttr('disabled');
                }else{
                    if(username.match(/[\uff00-\uffff]/g)){
                        $('#loginBtn').addClass('error').attr('disabled','disabled').html('邮箱地址包含全角字符');
                    }
                    $('#loginBtn').attr('disabled','disabled');
                }
            });

            $('#password').off('keyup').on('keyup change', function(e){
                var username=$('#username').val().trim();
                var password=$('#password').val().trim();
                $('#loginBtn').removeClass('error');
                $('#loginBtn').text('登录');
                if(_this.emailReg.test(username)&&password.length>=6){
                    $('#loginBtn').removeAttr('disabled');
                }else{
                    $('#loginBtn').attr('disabled','disabled');
                }
            });

            $('#login_form').on('submit',function(e){
                e.preventDefault();
                var username=$('#username').val().trim(),
                    password=$('#password').val().trim();

                if (username == '') {
                    $('#loginBtn').addClass('error').text('用户名必填');
                    return;
                } else if (!_this.emailReg.test(username)) {
                    $('#loginBtn').addClass('error').text('用户名格式不正确');
                    return;
                }

                if (password == '') {
                    $('#loginBtn').addClass('error').text('密码必填');
                    return;
                } else if (password.length < 6) {
                    $('#loginBtn').addClass('error').text('密码至少6位');
                    return;
                }

                $('#loginBtn').removeClass('error');

                var opt={
                    email:username,
                    password:password
                };

                $('#loginBtn').text('登录中...');

                _this.login(opt).done(function(data){
                    if(data.status){
                        cookie.setWithExpire('lastLoginName',username,100);
                        window.location.href = 'https://dashboard.pingxx.com/list';
                    }
                }).fail(function(err){
                    $('#loginBtn').addClass('error');
                    $('#loginBtn').text(err.data.message);
                });
            });
            /*$(document).on('keyup',function(e){
                if(e.keyCode==13){
                    $('#loginBtn').trigger('click');
                }
            });*/

            setTimeout(function () {
                if (_this.emailReg.test($('#username').val().trim())) {
                    $('#loginBtn').removeAttr('disabled');
                }
            }, 50);
        };

        mod.login=function(opt){
            var defer= $.Deferred();
            $.ajax({
                type:'post',
                url:url+'user/userLogin',
                data:opt,
                success:function(data){
                        
                    var data = data.replace(/(^\s+)|(\s+$)/g, "")
    
                        if(data == 1){

                            $('#loginBtn').text('登录成功！！');
                            
                            window.location.href = url+'resume/newSearchResume'

                        }else if(data == 2){

                            setErrorTip('您的账号被冻结，请联系超级管理员');

                        }else if(data == 3){

                            window.location.href = url+'user/success_user_info'

                        }else if(data == 4){

                            window.location.href = url+'company/compayInfoReviewing'

                        }else if(data == 5){

                            window.location.href = url+'user/updateUserInfo'

                        }else if(data == '-99'){

                            window.location.href = url+'company/create_company_info'

                        }else{

                            setErrorTip('你输入的密码和账户名不匹配');

                            $('#loginBtn').text('登录');
                            
                        }

                },
                error:function(err){
                   
                }
            });
            return defer;
        };

        mod.init();
    })();

</script></body>
</html>