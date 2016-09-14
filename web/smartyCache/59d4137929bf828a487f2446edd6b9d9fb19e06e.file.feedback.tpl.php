<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 11:40:08
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13616643535732a998753cb2-08895278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d4137929bf828a487f2446edd6b9d9fb19e06e' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/feedback.tpl',
      1 => 1461917286,
    ),
  ),
  'nocache_hash' => '13616643535732a998753cb2-08895278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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

<div class="loninContainer feedbackDg" style="display:none;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 418px; padding-left: 50px;"> <i class="close" style="background: none">
            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" />
        </i>
        <div class="panel_info">
            <div class="panel_tab">
                <div class="title">
                    <div class="fl feedbackTitle">我要反馈“<?php echo $_smarty_tpl->getVariable('resume_info')->value->name;?>
”的简历：</div>
                    <!-- 					<label class="fr">
                                                                    还没有众人识才账号？
                                                                    <a href="#">马上注册</a>
                                                            </label> -->
                </div>
                <div class="clear"></div>
                <div id="con_login_user">

                    <div style="height: 120px;" class="replaceText">
                        <div>
                            <input type="radio" id="one-tip" name="reason" value='1' > 
                            <label for="one-tip">电话是空号</label>
                        </div>
                        <div style=" margin-top:15px;">
                            <input type="radio" id="two-tip" name="reason" value='2' > 
                            <label for="two-tip">号码不是本人</label>
                        </div>
                        <div style=" margin-top:15px;">
                            <input type="radio" id="three-tip" name="reason" value='3' > 
                            <label for="three-tip">电话一直无法接通(没人接/占线/关机)</label>
                        </div>
                    </div>


                    <button type="submit" style='height:48px; margin-top:25px;' id="submitFreebackBtn" class="new-open-account-button" onclick="submitFreeback()">提交</button> 


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
                                                $("#submitFreebackBtn").click(function(){
                                                    $(".loninContainer").hide();
                                                })

                                                $('#username,#password').bind('input propertychange', function () {
                                                    $(".errorTip").css('visibility', 'hidden');
                                                });
                                            })

                                            function submitFreeback() {


                                                var close_reason_value = $('input[name="reason"]:checked ').val();

                                                var close_resume_reason = url + 'resumeajax/submitResumeComplaint'

                                                if (close_reason_value) {

                                                    var params = new FormData();

                                                    params.append('complaint_type', close_reason_value);

                                                    params.append('resume_id', '<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
');

                                                    params.append('complaint', '投诉12345');

                                                    hirelibEngine.ajaxNative(close_resume_reason, 'post', params, function success(data) {

                                                        setErrorTip('投诉成功');

                                                        getResumeDetailLeft(); 

                                                    }, function error(data) {


                                                    }, 0);

                                                }

                                                // $(".replaceText").text('若此封简历的联系方式存在问题， 我们将会修正联系方式或退还您购买简历的费用。');
                                                // $(".replaceText").css('text-align','center');
                                                // $(".replaceText").css('padding-top','20px');
                                                // $('#submitFreebackBtn').text('好的');
                                                // $('#submitFreebackBtn').attr('onclick','iKnow()');

                                            }

                                            function iKnow() {
                                                $(".loninContainer").fadeOut();
                                            }


</script>

