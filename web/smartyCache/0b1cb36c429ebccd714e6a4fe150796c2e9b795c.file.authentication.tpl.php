<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-19 10:23:23
         compiled from "/private/var/www/html/employer_tool/Public/html//resume/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1737678369573d239b859521-73028248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b1cb36c429ebccd714e6a4fe150796c2e9b795c' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//resume/authentication.tpl',
      1 => 1463573914,
    ),
  ),
  'nocache_hash' => '1737678369573d239b859521-73028248',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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

<div class="loninContainer authenticationDg" style="display:none;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 418px; padding-left: 50px;"> <i class="close" style="background: none">
            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" />
        </i>
        <div class="panel_info">
            <div class="panel_tab">
                <div class="title">
                    <div class="fl">身份验证</div>
                    <!--                    <label class="fr">
                                                                    还没有众人识才账号？
                                                                    <a href="#">马上注册</a>
                                                            </label> -->
                </div>
                <div class="clear"></div>
                <div id="con_login_user">
                    <input class="new-open-account-input" id="real_name" autofocus="autofocus" type="email" placeholder="请输入姓名">
                    <input class="new-open-account-input" id="identification_card" type="text" placeholder="身份证号码" style="margin-top:10px; margin-bottom:20px;">


                    <div style="width: 320px; height: 120px;">
                        <a href="javascript:;" class="file" style='width:60px; height:60px;line-height:60px;padding-left: 15px;'>

                            <input type="file" name="employer_user_logo" id="identification_card_file" accept="image/gif, image/jpeg, image/png" style="visibility:hidden;">
                            <samp id="startUploadCard" style="width: 320px;height: 120px;position: absolute;margin-left: -328px;margin-left: -328px;
                            margin-left: -240px \9\0;background: #fff;margin-top: -7px;border: solid 1px #ccc; z-index: 99; padding-left: 15px;color: #999; border-radius: 3px">上传身份证正面照</samp>
                            <img id="blahUserPhoto" src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/white.png' style="width: 320px;height: 120px;position: absolute;margin-left: -328px;margin-left: -240px \9\0;margin-top: -7px;border: solid 1px #e1e1e1;">

                        </a>
                    </div>

                    <div class="errorTip">sadas</div>
                    <button type="submit" style='height:48px;' id="authoBtn" class="new-open-account-button" onclick="submitAuth()">验证</button> 
                </div>
            </div>
        </div>
        <div style="height: 20px;"></div>
    </div>
</div>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>
<script type="text/javascript">

                        $(function () {
// body...
                            $(".close-mask").click(function () {

                                $(".loninContainer").fadeOut();

                            })

                            $('#username,#password').bind('input propertychange', function () {
                                $(".errorTip").css('visibility', 'hidden');
                            });
                        })

                        //上传头像
                        function readURLUserPhoto(input) {
                            $("#blahUserPhoto").show();
                            $("#startUploadCard").css('z-index', '0');
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('#blahUserPhoto').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }

                        $("#identification_card_file").change(function () {
                            readURLUserPhoto(this);
                        });

                        $("#blahUserPhoto,#startUploadCard").click(function (event) {
                            /* Act on the event */
                            $("#identification_card_file").click();
                        });

                        function submitAuth() {

                            var real_name = $('#real_name').val()

                            var identification_card = $('#identification_card').val()

                            var close_resume_reason = url + 'resumeajax/submitUserAuth'

                            var identification_card_file = document.getElementById('identification_card_file').files[0]

                            if (real_name && identification_card && identification_card_file) {

                                var params = new FormData();

                                params.append('identification_card_file', identification_card_file)

                                params.append('real_name', real_name);

                                params.append('identification_card', identification_card);

                                hirelibEngine.ajaxNative(close_resume_reason, 'post', params, function success(data) {

                                    var dataObj = hirelibEngine.parseJson(data);

                                    switch (dataObj['res']) {

                                        case 0:

                                            $(".loninContainer").fadeOut();

                                            location.reload();

                                            break;

                                        case 1:

                                            setErrorTip('实名验证成功,你现在可以提现了');

                                            getResumeDetailLeft();

                                            $(".loninContainer").fadeOut();

                                            break;

                                    }

                                }, function error(data) {


                                }, 1);

                            }


                        }


</script>

