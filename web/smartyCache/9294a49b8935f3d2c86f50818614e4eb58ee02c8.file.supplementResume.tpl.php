<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-20 17:19:56
         compiled from "/private/var/www/html/employer_tool/Public/html//resume/supplementResume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1475140069573ed6bc5275d7-10368839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9294a49b8935f3d2c86f50818614e4eb58ee02c8' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//resume/supplementResume.tpl',
      1 => 1463735280,
    ),
  ),
  'nocache_hash' => '1475140069573ed6bc5275d7-10368839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/lianjia.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/new_open_account.css">

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/citys.css"> 

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/datepicker.css">

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.datepicker.js"></script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/citys/Popt.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/citys/cityJson.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/citys/citySet.js"></script>

<style type="text/css">
    .errorTip{
        margin-top: -20px;
        color: red;
        margin-bottom: 10px;
        font-size: 14px;
        width: 320px;
        visibility: hidden;
    }

    .selectWrap .resumeActive:before {
        position: absolute;
        display: block;
        right: 1px;
        top: 8px;
        content: "\e201";
        font-family: 'dashboard';
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        vertical-align: middle;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
        -o-transition: all 0.2s;
}


</style>
<script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

<div class="loninContainer supplementResumeDg" style="display:none;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 500px; padding-left: 50px;"> <i class="close" style="background: none;position: relative;">
            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" />
        </i>
        <div class="panel_info">
            <div class="panel_tab">
                <div class="title">
                    <div class="fl feedbackTitle">验证前请完善以下信息</div>

                </div>
                <div class="clear"></div>
                <div id="con_login_user">

                    <div style=" margin-top: 20px;" class="replaceText">
                        <div>
                            Ta的姓名是：&nbsp;&nbsp;&nbsp;

                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['name']!=''){?>

                            <input type="hidden" id='perfect_resume_name' value="<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['name'];?>
">

                            <input type="text" value="<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['name'];?>
" placeholder="请输入此简历的姓名" style="font-size: 14px;border: solid 1px #999;border-radius: 2px;padding-left: 10px;height: 30px; background:#eee;" disabled="disabled">

                            <?php }else{ ?>

                            <input type="text" id='perfect_resume_name' name="name" value="<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['name'];?>
" placeholder="请输入此简历的姓名" style="font-size: 14px;border: solid 1px #999;border-radius: 2px;padding-left: 10px;">

                            <?php }?>

                        </div>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['sex']!=''){?>

                        <input type='hidden' name='sex' value='<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['sex'];?>
' id='sex'>

                        <input type='hidden' name='sex_value' id='sex_value' value='0'>

                        <?php }else{ ?>

                            <div style=" margin-top:15px;">
                                Ta的性别是：
                                <input type="radio"  name="sex" value='男' > 
                                <label for="nan" style="cursor: pointer;">男</label>

                                <input type="radio"  name="sex" value='女' style="margin-left: 15px;"> 
                                <label for="nv" style="cursor: pointer;">女</label>
                            </div>

                            <input type='hidden' name='sex_value' id='sex_value' value='1'>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['old_birth']!=''&&$_smarty_tpl->getVariable('resume_info')->value->birth_status==1){?>

                        <input type='hidden' name='birth_value' id='birth_value' value='<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['old_birth'];?>
'>

                        <input type='hidden' name='birth_status' id='birth_status' value='1'>

                        <?php }elseif($_smarty_tpl->getVariable('resume_info')->value->resume_info['old_birth']==''){?>

                        <div style=" margin-top:15px;">

                        Ta的出生日期：
<!--                              <input type="date" name="birth_value" id='birth_value' value=""style="font-size: 14px;border: solid 1px #999;border-radius: 2px;padding-left: 10px;"> -->

                             <input id="birth_value" type="text" placeholder="请输入日期"  style="font-size: 14px;border: solid 1px #999;border-radius: 2px;padding-left: 10px;"/>

                        </div>

                        <script>

                            $('#birth_value').datePicker();

                        </script>

                        <input type='hidden' name='birth_status' id='birth_status' value='2'>

                        <?php }else{ ?>

                        <div style=" margin-top:15px;">
                            Ta的出生日期：
                            <samp><?php echo $_smarty_tpl->getVariable('resume_info')->value->birth_one;?>
</samp>
                            
                            <div class='selectWrap' style=''  id='selectProvince'>
     
                                <div class='selectBtn resumeActive' style='width: 70px;
                                         height: 30px;border: solid 1px #e1e1e1;border-radius: 3px;line-height: 9px;
                                         background: #fff;text-align: left;font-size: 14px;'>
             
                                    <a val style="white-space: nowrap;display: block;height: 28px;margin-top: -10px;width: 70px;margin-left:-20px;line-height: 30px;padding-left: 17px;">请选择</a>
                                   
                                </div>

                                <ul style="display: none;text-align:left;min-width:70px;" class="select_ul">
  

                                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['name'] = "sn";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total']);
?>


                                     <li val="0" onclick='javascript:$("#birth_month").val("<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
")'><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</li>

              
                                    <?php endfor; endif; ?>

                                </ul>
                            </div>
                            <samp style="margin-left: 5px;">月</samp>
                        </div>

                        <input type='hidden' name='birth_month' id='birth_month' value='0'>

                        <input type='hidden' id='birth_value' name='birth_value' value='<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['birth'];?>
'>

                        <input type='hidden' name='birth_status' id='birth_status' value='3'>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['city']!=''){?>

                            <input type='hidden' name='city' id='city' value='<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['city'];?>
'>

                        <?php }else{ ?>

                        <div style=" margin-top:15px;">
                            Ta的现居城市：
                             <input id="city" type="text" id='city' name="" value=""style="font-size: 14px;border: solid 1px #999;border-radius: 2px;padding-left: 10px;">
                        </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['work_stauts']>0){?>

                        <input type='hidden' name='work_stauts' id='work_stauts' value='<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['work_stauts'];?>
'>

                        <?php }else{ ?>
                        
                        <div style=" margin-top:15px;">
                            Ta现在的工作状态：<br />

                            <label for="havejob" style="cursor: pointer;margin-left: -11px;">
                            <input type="radio" id="havejob"  name="work_stauts" value='2' style="margin-left: 15px;"> 
                            有求职意向</label>

                            
                            <label for="nojob" style="cursor: pointer;">
                                <input type="radio" id="nojob"  name="work_stauts" value='3' style="margin-left: 15px;"> 暂无意向
                            </label>

                        </div>
                        <?php }?>

                    </div>

                    <button type="submit" style='height:48px; margin-top:25px;    margin-left: 46px;' id="submitFreebackBtn" class="new-open-account-button" onclick="submitResumeInfo()">确定</button> 
                </div>

            </div>

        </div>
                <div style="font-size: 12px;margin-top: 12px;">
                    <div style="font-size: 14px;">提交说明：</div> 
                    <div>1、完成问题时，请确保已电话联系过候选人</div> 
                    <div>2、点击确定按钮后系统将发短信给候选人</div> 
                    <div>3、请确保信息填写准确，若填写错误，将会扣除您的奖励</div> 
                </div>
        <div style="height: 20px;"></div>
    </div>
</div>

<script type="text/javascript">
$("#city").click(function (e) {
    SelCity(this,e);
});
</script>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>
<script type="text/javascript">

    var resumes_status = 0

    $(function () {
        // body...
        $(".close-mask").click(function () {

             $(".loninContainer").fadeOut();

        })

        $('#username,#password').bind('input propertychange', function () {
            $(".errorTip").css('visibility', 'hidden');
        });
    })

    function submitResumeInfo() {

        var work_stauts_value = $('input[name="work_stauts"]:checked ').val();

        var city_value = $('#city').val()

        var sex_values = $('#sex_value').val();

        if(sex_values == 1){

            var sex_value = $('input[name="sex"]:checked ').val();
        } else{

            var sex_value = $("#sex").val();
        }

        var name = $('#perfect_resume_name').val()

        var birth_status = $('#birth_status').val()

        var birth = $('#birth_value').val()

        var check = 0

        if(birth_status == '3'){

            var birth_month = $('#birth_month').val()

            if(birth_month > 0){

                birth = birth+'-'+birth_month

            } else{

                check = 1;
            }
            
        } else{

            if(birth == ''){

                check = 1
            }
        }

        if(work_stauts_value != undefined && city_value != '' && sex_value != undefined && name != ''){



        } else{

            check = 1
        }

        if(check == 1){

            setErrorTip('请完善信息');

            return false;
        }


        var ajaxurl = url + 'resumeajax/perfectResumeInfoAjax'


        if (parseInt(check) == 0 && parseInt(resumes_status) == 0) {

            var resume_id = $("#resume_id").val()

            var params = new FormData();

            params.append('name', name);

            params.append('resume_id', resume_id);

            params.append('sex', sex_value);

            params.append('city', city_value);

            params.append('birth', birth);

            params.append('work_status', work_stauts_value);

            hirelibEngine.ajaxNative(ajaxurl, 'post', params, function success(data) {

                        var dataObj=eval("("+data+")");

                        var res = dataObj['res']

                        getResumeDetailLeft(); 

                        iKnow();

                        switch(res){

                            case 2:

                                checkTruthClick();

                                break;

                            default:

                                

                        } 

                        



                    }, function error(data) {


                    }, 1);

        }
      }

                                                // $(".replaceText").text('若此封简历的联系方式存在问题， 我们将会修正联系方式或退还您购买简历的费用。');
                                                // $(".replaceText").css('text-align','center');
                                                // $(".replaceText").css('padding-top','20px');
                                                // $('#submitFreebackBtn').text('好的');
                                                // $('#submitFreebackBtn').attr('onclick','iKnow()');


        function iKnow() {
                $(".loninContainer").fadeOut();
        }


</script>

