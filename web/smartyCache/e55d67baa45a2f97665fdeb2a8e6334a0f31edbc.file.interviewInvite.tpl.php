<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-10 19:03:59
         compiled from "/private/var/www/html/employer_tool/Public/html//tip/interviewInvite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11423277485731c01fe15b33-35393424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55d67baa45a2f97665fdeb2a8e6334a0f31edbc' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//tip/interviewInvite.tpl',
      1 => 1459570138,
    ),
  ),
  'nocache_hash' => '11423277485731c01fe15b33-35393424',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/private/var/www/config/Smarty/libs/plugins/modifier.date_format.php';
?>

<style type="text/css">
    .mask_warp_div{
        position: fixed;top: 0;right: 0;bottom: 0;left: 0;height: 99999px;
        display: none;
    }
    .mask_warp_talent_div{
        position: fixed;top: 0;right: 0;bottom: 0;left: 0;height: 99999px;display: none;
    }
    .mask_bg_div{
        position: fixed;top: 0;right: 0;bottom: 0;left: 0;height: 99999px;z-index: 10;background-color: #000;opacity: 0.5;
    }
    .mask_content_div{
        position: relative;z-index: 9999; width:700px;height:570px;background-color: #fff;border:solid 1px clear;margin: 0 auto;margin-top: 60px;-moz-box-shadow:0px 0px 20px #333333;-webkit-box-shadow:0px 0px 20px #333333;box-shadow:0px 0px 20px #333333;overflow-y:scroll;
    }
    .title_div{
        height: 50px;line-height: 50px;text-indent: 15px;border-bottom: solid 1px #ccc;font-weight: bold;text-align: center;
    }
    .content_div{
        border: solid 1px clear;/*min-height: 120px;*//* width: 80%;*/margin: 0 auto;color: #777;text-align: center;
    }
    .button_area_div{
        text-align: center;height: 60px;border-top: solid 1px #ccc;line-height: 60px;margin-top: 20px;
    }
    .button_area_button{
        width: 90px;border: none;border-radius: 3px;color: #fff;background-color: #999;font-size: 14px;height: 35px;margin-left: 20px;
    }
    .button_area_button:hover{
        background-color: #333;cursor: pointer;
    }

    /*内容style 开始*/

    .content_title_div{
        border:solid 1px clear;height: 40px;text-align: left;padding-left: 30px;font-size: 16px;color: #333;line-height: 40px;font-weight: bold;color: #555;margin-top: 10px;
    }
    .content_select_div{
        height: 50px;text-align: left;padding-left: 30px;line-height: 50px;
    }
    .interview_position_title_span{
        text-align: right;border: solid 1px clear;height: 45px;line-height: 45px;margin-right: 20px;font-size: 14px;
    }
    .position_fill_select{
        width: 110px;height: 40px;font-size: 14px;background-color: #fff;border: solid 1px #ddd;color: #999;
    }

    .position_fill_select{
        background: url("<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/xial_01.png") no-repeat right center;padding-left: 10px;
    }
    select{
        -moz-appearance: none;-webkit-appearance:none;appearance:none;
    }
    .position_fill_input{
        width: 200px;height: 40px;font-size: 14px;border: solid 1px #ccc;border-radius: 3px;-moz-border-radius: 3px;    /* Firefox */-webkit-border-radius: 3px;    /* Safari 和 Chrome */-o-border-radius: 3px;text-indent: 5px;
    }

    .interview_demand_div{
        border: solid 1px none;margin: 0 auto;width: 91%;
    }

    .labelCheck {
        padding-left: 20px;cursor: pointer;background: url("<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/check_04.png") no-repeat left top;
    }
    .labelCheck span{
        margin-left: 10px;
    }
    .checkbox_table{
        width: 58%;
        text-align: left;
    }
    .checkbox_table tr{
        height: 36px;line-height: 24px;
    }
    .checkbox_table tr td{
        width: 135px;
    }
    .close-interview-img{
        float: right;padding-top: 18px;padding-right: 18px; cursor: pointer;
    }

    /*  内容style 结束*/

</style>
<!-- 浮框结束 -->

<!-- 常用地点 常用联系人 -->
<style type="text/css">
    .interview-common-bg{
        width: 500px;position: absolute;margin-left: 110px;background: #fff;
        box-shadow: 6 10px none;box-shadow: 0 0 10px rgba(0, 0, 0, .5);
    }
    .interview-common-place-table{
        border: solid 1px none;width: 85%;margin-left:20px;margin-top: 20px;text-align: left;
    }
    .interview-common-place-table tr td{
        border: solid 1px none;
    }
    .interview-common-place-table tr td label{
        cursor: pointer; margin-left: 5px;
    }
    .interview-commom-place-text{
        width:98%;margin-left: 5px;border-color: #999;border-top: none;border-left: none;
        border-right: none;padding-left: 10px; display: none;
    }
    .interview-common-place-button{
        cursor: pointer; display: none;
    }
    .interview-common-place-button:hover{
        color: #3398ff;
    }
    .interview-save-or-edit{
        width: 98%;text-align: right;font-size: 14px;color: #3398ff;cursor: pointer;
    }
    .close-interview-common-place-bg{
        border: solid 1px none; float: right;font-size: 25px;padding-right: 10px;margin-top: -10px;  cursor: pointer;
    }
</style>

<!-- 浮框开始 面试邀约 -->
<div class="mask_warp_div" style='margin-top:3%;'>

    <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
interview/createInterview' method='post' id='interview_form' name='interview_form'>
        <input type='hidden' name='position_id' id='position_id' value='<?php echo $_smarty_tpl->getVariable('position_id')->value;?>
'>
        <input type='hidden' name='user_id' id='user_id' value='<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'>
        <input type='hidden' name='resume_id' id='resume_id' value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

        <div class="mask_bg_div"></div>
        <div class="mask_content_div" style='margin-top:70px;'>
            <div class="title_div">
                面试邀约
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/email/cha.png" class="close-interview-img" />
            </div>
            <div class="content_div">
                <div class="content_title_div">面试时间:</div>
                <div class="content_select_div">

                    <!-- 年 -->
                    <div id="selectProvince" style="width: 14%;" class="selectWrap">
                        <input type='hidden' name='interview_year' id='interview_year' value='<?php echo smarty_modifier_date_format(time(),"%Y");?>
'>

                        <div class="selectBtn">
                            <span val><?php echo smarty_modifier_date_format(time()+86400,"%Y");?>
</span>
                        </div>
                        <ul style="display: none;" class="select_ul">
                            <li onclick="selectDictValue(this)" rel='interview_year' value="<?php echo smarty_modifier_date_format(time(),"%Y");?>
"><?php echo smarty_modifier_date_format(time()+86400,"%Y");?>
</li>

                            <li  onclick="selectDictValue(this)" rel='interview_year' value="<?php echo smarty_modifier_date_format(time(),"%Y")+1;?>
"><?php echo smarty_modifier_date_format(time(),"%Y")+1;?>
</li>
                        </ul>
                    </div>

                    <span class="interview_position_title_span interview_year_span">年</span>
                    <!-- 月 -->
                    <div id="selectProvince" style="width: 14%;" class="selectWrap">
                        <input type='hidden' name='interview_month' id='interview_month' value='<?php echo smarty_modifier_date_format(time()+86400,"%m");?>
'>

                        <div class="selectBtn">
                            <span val><?php echo smarty_modifier_date_format(time()+86400,"%m");?>
</span>
                        </div>
                        <ul style="display: none;" class="select_ul">
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
                                <li onclick="selectDictValue(this)" rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</li>
                                <?php endfor; endif; ?>
                        </ul>
                    </div>

                    <span class="interview_position_title_span interview_month_span">月</span>

                    <!-- 日 -->
                    <div id="selectProvince" style="width: 14%;" class="selectWrap">
                        <input type='hidden' name='interview_day' id='interview_day' value='<?php echo smarty_modifier_date_format(time()+86400,"%d");?>
'>

                        <div class="selectBtn">
                            <span val><?php echo smarty_modifier_date_format(time()+86400,"%d");?>
</span>
                        </div>
                        <ul style="display: none;" class="select_ul">
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['name'] = "sn";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <li onclick="selectDictValue(this)" rel='interview_day' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</li>
                                <?php endfor; endif; ?>
                        </ul>
                    </div>

                    <span class="interview_position_title_span interview_day_span">日</span>
                    <!-- 时 -->
                    <div id="selectProvince" style="width: 14%;" class="selectWrap">

                        <input type='hidden' name='interview_hour' id='interview_hour' value='14'>

                        <div class="selectBtn">
                            <span val>14</span>
                        </div>
                        <ul style="display: none;" class="select_ul">
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['name'] = "sn";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <li onclick="selectDictValue(this)" rel='interview_hour' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+8;?>
</li>
                                <?php endfor; endif; ?>
                        </ul>
                    </div>

                    <span class="interview_position_title_span interview_hour_span">时</span>
                </div>

                <div class="content_div">
                    <div class="content_title_div">备选时间:</div>
                    <div class="content_select_div">

                        <!-- 年 -->
                        <div id="selectProvince" style="width: 14%;" class="selectWrap">
                            <input type='hidden' name='interview_year_two' id='interview_year_two' value='<?php echo smarty_modifier_date_format(time()+2*86400,"%Y");?>
'>

                            <div class="selectBtn">
                                <span val><?php echo smarty_modifier_date_format(time()+2*86400,"%Y");?>
</span>
                            </div>
                            <ul style="display: none;" class="select_ul">
                                <li onclick="selectDictValue(this)" rel='interview_year_two' value="<?php echo smarty_modifier_date_format(time(),"%Y");?>
"><?php echo smarty_modifier_date_format(time(),"%Y");?>
</li>

                                <li  onclick="selectDictValue(this)" rel='interview_year_two' value="<?php echo smarty_modifier_date_format(time(),"%Y")+1;?>
"><?php echo smarty_modifier_date_format(time(),"%Y")+1;?>
</li>
                            </ul>
                        </div>

                        <span class="interview_position_title_span interview_year_two_span">年</span>
                        <!-- 月 -->
                        <div id="selectProvince" style="width: 14%;" class="selectWrap">
                            <input type='hidden' name='interview_month_two' id='interview_month_two' value='<?php echo smarty_modifier_date_format(time()+2*86400,"%m");?>
'>

                            <div class="selectBtn">
                                <span val><?php echo smarty_modifier_date_format(time()+2*86400,"%m");?>
</span>
                            </div>
                            <ul style="display: none;" class="select_ul">
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
                                    <li onclick="selectDictValue(this)" rel='interview_month_two' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</li>
                                    <?php endfor; endif; ?>
                            </ul>
                        </div>

                        <span class="interview_position_title_span interview_month_two_span">月</span>

                        <!-- 日 -->
                        <div id="selectProvince" style="width: 14%;" class="selectWrap">
                            <input type='hidden' name='interview_day_two' id='interview_day_two' value='<?php echo smarty_modifier_date_format(time()+2*86400,"%d");?>
'>

                            <div class="selectBtn">
                                <span val><?php echo smarty_modifier_date_format(time()+2*86400,"%d");?>
</span>
                            </div>
                            <ul style="display: none;" class="select_ul">
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['name'] = "sn";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li onclick="selectDictValue(this)" rel='interview_day_two' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</li>
                                    <?php endfor; endif; ?>
                            </ul>
                        </div>

                        <span class="interview_position_title_span interview_day_two_span">日</span>
                        <!-- 时 -->
                        <div id="selectProvince" style="width: 14%;" class="selectWrap">

                            <input type='hidden' name='interview_hour_two' id='interview_hour_two' value='14'>

                            <div class="selectBtn">
                                <span val>14</span>
                            </div>
                            <ul style="display: none;" class="select_ul">
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['name'] = "sn";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li onclick="selectDictValue(this)" rel='interview_hour_two' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+8;?>
</li>
                                    <?php endfor; endif; ?>
                            </ul>
                        </div>

                        <span class="interview_position_title_span interview_hour_two_span">时</span>
                    </div>

                    <div class="content_title_div">
                        面试地点:
                        <span class="common-address-span" style="color:#3398ff; font-size:14px; margin-left:10px;cursor: pointer;">常用地点</span>
                    </div>
                    <!-- 常用地点 开始-->
                    <div class="interview-common-address-bg interview-common-bg" style="display:none;">
                        <div class="close-interview-common-place-bg">×</div>
                        <table class="interview-common-place-table interview-common-address-table">
                            <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('coommon_address')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
?>
                                <tr id='address_<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
'>
                                    <td>
                                        <input type="radio" onclick='displayCommonAddress(this)'  id="commom_place_<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
" name="commom_address" value=""  rel='<?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
'/>
                                        <label for="commom_address"><?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
</label>
                                    </td>
                                    <td>
                                        <span class="interview-common-place-button" onclick='deleteCommonAdress("<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
")'>删除</span>
                                    </td>
                                </tr>
                            <?php }} ?>
                            <tr>
                                <td>
                                    <input class="interview-commom-place-text" type="text" id='common_address' name="common_address" value="" placeholder="请输入面试地址" />
                                </td>
                                <td>
                                    <span class="interview-common-place-button" onclick='addCommonAdress()'>添加</span>
                                </td>
                            </tr>
                        </table>

                        <div class="interview-save-or-edit interview-edit">编辑</div>
                        <div class="interview-save-or-edit interview-save" style="display:none;">保存</div>
                    </div>
                    <!-- 常用地点 结束-->

                    <div class="content_select_div">
                        <!--                         <input type="text" style="width: 62%;" class="position_fill_input" placeholder="请输面试地点" name="interview_address" id='interview_address' />
                        -->
                        <input type="text" class="form-control" style="width:75%;float:left" placeholder="请输面试地点" name="interview_address" id='interview_address' />
                    </div>

                    <div class="content_title_div">
                        联系人:
                        <span class="common-people-span" style="color:#3398ff; font-size:14px; margin-left:10px;cursor: pointer;">常用联系人</span>
                    </div>

                    <!-- 常用联系人 开始-->
                    <div class=" interview-common-bg  interview-common-people-bg"style="display:none;">
                        <div class="close-interview-common-place-bg">×</div>
                        <table class="interview-common-place-table interview-common-info-table">
                            <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('common_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
?>
                                <tr id='info_<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
' >
                                    <td >
                                        <input type="radio" id="commom_place1" name="commom_place2" value="" onclick='displayCommonInfo(this)' rel='<?php echo $_smarty_tpl->tpl_vars['address']->value['common_contack'];?>
' phone='<?php echo $_smarty_tpl->tpl_vars['address']->value['common_cellphone'];?>
' />
                                        <label for="commom_place1"><?php echo $_smarty_tpl->tpl_vars['address']->value['common_contack'];?>
</label>
                                    </td>
                                    <td>
                                        <label for="commom_place1"><?php echo $_smarty_tpl->tpl_vars['address']->value['common_cellphone'];?>
</label>
                                    </td>
                                    <td>
                                        <span class="interview-common-place-button" onclick='deleteCommonInfo("<?php echo $_smarty_tpl->tpl_vars['address']->value['id'];?>
")'>删除</span>
                                    </td>
                                </tr>
                            <?php }} ?>
                            <tr>
                                <td>
                                    <input class="interview-commom-place-text" type="text" id='common_people' name="common_people" value="" placeholder="请输入联系人" />
                                </td>
                                <td>
                                    <input class="interview-commom-place-text" type="text" id='common_phone' name="common_phone" value="" placeholder="请输入联系电话" />
                                </td>
                                <td>
                                    <span class="interview-common-place-button" onclick='addCommonInfo()'>添加</span>
                                </td>
                            </tr>
                        </table>

                        <div class="interview-save-or-edit interview-edit">编辑</div>
                        <div class="interview-save-or-edit interview-save" style="display:none;">完成</div>
                    </div>
                    <!-- 常用联系人 结束-->

                    <div class="content_select_div">
                        <!--                         <input type="text" class="position_fill_input" placeholder="请填写" name="contact" id='contact' />
                        -->
                        <input type="text" class="form-control" style="width:35%;float:left" placeholder="联系人" name="contact" id='contact' />
                    </div>
                    <div style="width: 62%;float:right; margin-top: -100px;">
                        <div class="content_title_div" >联系电话:</div>
                        <div class="content_select_div">
                            <!--                             <input type="text" class="position_fill_input" placeholder="请输入手机号" name="phone" id='phone' />
                            -->
                            <input type="text" class="form-control" style="width:59%;float:left" placeholder="请输入手机号码" name="phone" id='phone' />
                        </div>
                    </div>

                    <div class="content_title_div">面试要求:</div>
                    <div class="interview_demand_div">
                        <table class="checkbox_table">
                            <tr>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)' rel="interview_request" value='1' name="interview_request[]" class="virtualCheckbox">带电脑</label>
                                </td>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_request" value='2' name="interview_request[]"class="virtualCheckbox">带作业</label>
                                </td>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_request" value='3' name="interview_request[]"class="virtualCheckbox">带一寸照</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_request" value='4' name="interview_request[]"class="virtualCheckbox">带简历</label>
                                </td>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_request" value='5' name="interview_request[]"class="virtualCheckbox">带学位证书</label>
                                </td>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_request" value='6' name="interview_request[]"class="virtualCheckbox">带身份证</label>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="content_title_div">面试提醒:</div>
                    <div class="interview_demand_div" style="height:auto;">
                        <table class="checkbox_table">
                            <tr>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_remind" value='1'  name="interview_remind[]"class="virtualCheckbox">有笔试</label>
                                </td>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_remind" value='2'  name="interview_remind[]"class="virtualCheckbox">有门禁</label>
                                </td>
                                <td>
                                    <label onclick='virtualCheckboxClick(this)'  rel="interview_remind" value='3' name="interview_remind[]"class="virtualCheckbox">车位自费</label>
                                </td>
                            </tr>

                        </table>
                    </div>

                    <div class="content_title_div">其他面试相关要求:</div>
                    <div class="content_select_div" style="height:auto;">
                        <div class="form-group">
                            <textarea maxlength="300" id="other_request" class="form-control" type="text" placeholder="请输入..." style="min-height: 9em; margin-bottom: 8px; margin-left: 0px; float: inherit; width: 95%;" name="other_request"></textarea>
                        </div>
                    </div>
                </div>
                <div class="button_area_div">
                    <input type="button" class="btn btnDashboard okButton button_interview" value="确定" onclick='submitInterview();'>
                    <input type="button" class="btn btnDashboard button_interview" value="取消"></div>
            </div>
        </div>
    </form>
</div>

<div style="height:30px;"></div>

<div id='clone'></div>
<script>

    var a = 0

    $(function () {


        $(".close-interview-img").click(function (argument) {
            // body...
            $(".mask_warp_div").fadeOut();
        })

        // 常用地点 的编辑和 保存
        $(".interview-edit").click(function (event) {
            /* Act on the event */
            $(".interview-common-place-button").fadeIn();
            $(".interview-commom-place-text").fadeIn();
            $(".interview-edit").hide();
            $(".interview-save").show();

        });
        $(".interview-save").click(function (event) {
            /* Act on the event */
            $(".interview-common-place-button").hide();
            $(".interview-commom-place-text").hide();
            $(".interview-edit").show();
            $(".interview-save").hide();

        });

        $(".close-interview-common-place-bg").click(function (event) {
            /* Act on the event */
            $('.interview-common-address-bg').fadeOut();
            $('.interview-common-people-bg').fadeOut();
        });

        //点击常用联系人出现弹框
        $(".common-people-span").click(function (event) {
            /* Act on the event */
            $('.interview-common-people-bg').show();
        });
        //点击常用联系人出现弹框
        $(".common-address-span").click(function (event) {
            /* Act on the event */
            $('.interview-common-address-bg').show();
        });
        //点击常用地点出现弹框
        $(".common-place-span").click(function (event) {
            /* Act on the event */
            $('.interview-common-place-bg').show();

        });



        // 关闭 提示性 浮框
        $("#alert_btn").click(function (event) {
            /* Act on the event */
            $(".show_alert").fadeOut();
        });

        $(".okButton").click(function (event) {
            /* Act on the event */

            var interviewTimeYearOne = $("#interview_year").val();
            var interviewTimeMonthOne = $("#interview_month").val();
            var interviewTimeDayOne = $("#interview_day").val();

            var interviewTimeYearTwo = $("#interview_year_two").val();
            var interviewTimeMonthTwo = $("#interview_month_two").val();
            var interviewTimeDayTwo = $("#interview_day_two").val();

            var DateOne = interviewTimeYearOne + '-' + interviewTimeMonthOne + '-' + interviewTimeDayOne;
            var DateTwo = interviewTimeYearTwo + '-' + interviewTimeMonthTwo + '-' + interviewTimeDayTwo;

            var date = new Date();
            var DateNow = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();

            if (!compareDate(DateOne, DateNow)) {
                // $(".alertPopTip").fadeIn();
                // $(".alertTip").text('面试时间不能小于当前时间');
                alert('面试时间不能小于当前时间');
                return false;
            }
            if (!compareDate(DateTwo, DateNow)) {
                // $(".alertPopTip").fadeIn();
                // $(".alertTip").text('面试时间不能小于当前时间');
                alert('面试时间不能小于当前时间');
                return false;
            }
        });

        //判断 年-月-日，大小
        function compareDate(DateOne, DateTwo)
        {
            var str = "-";

            var OneMonth = DateOne.substring(5, DateOne.lastIndexOf(str));
            var OneDay = DateOne.substring(DateOne.length, DateOne.lastIndexOf(str) + 1);
            var OneYear = DateOne.substring(0, DateOne.indexOf(str));

            var TwoMonth = DateTwo.substring(5, DateTwo.lastIndexOf(str));
            var TwoDay = DateTwo.substring(DateTwo.length, DateTwo.lastIndexOf(str) + 1);
            var TwoYear = DateTwo.substring(0, DateTwo.indexOf(str));

            if (Date.parse(OneMonth + "/" + OneDay + "/" + OneYear) >
                    Date.parse(TwoMonth + "/" + TwoDay + "/" + TwoYear))
            {
                return true;
            }
            else
            {
                return false;
            }

        }

    })


    function submitInterview() {

        if (a == 0) {

            a++;

            var options = {
                success: function (data) {

                    var data = data.replace(/(^\s*)|(\s*$)/g, '');

                    if (data == '邀请成功') {

                        buy_interview_order();

                    } else {

                        setErrorTip(data)

                        a = 0;
                    }


                }
            };

            $('#interview_form').ajaxForm(options);

            $("#interview_form").ajaxSubmit(options);

        }

    }


    function displayInterview() {

        $(".mask_warp_div").fadeIn();
    }

    function displayCommonInfo(obj) {

        var interview_people = $(obj).attr('rel')

        var interview_phone = $(obj).attr('phone')

        if (interview_people && interview_phone) {

            $('#contact').val(interview_people)

            $('#phone').val(interview_phone)
        }
    }


    function deleteCommonInfo(id) {

        if (id) {

            var address_id = id

            $.ajax({
                url: url + 'user/deleteHrCommonInfo', // 跳转到 action
                data: {
                    id: id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var data = data.replace(/(^\s*)|(\s*$)/g, '');

                    if (data == 1) {

                        $('#info_' + address_id).remove()

                    }
                },
                error: function () {

                }
            });
        }
    }

    function addCommonInfo() {

        var common_people = $('#common_people').val()

        var common_phone = $('#common_phone').val()

        if (common_people && common_phone) {

            $.ajax({
                url: url + 'user/addHrCommonInfo', // 跳转到 action
                data: {
                    people: common_people,
                    phone: common_phone
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var data = data.replace(/(^\s*)|(\s*$)/g, '');

                    if (data > 0) {

                        var html = '<tr id="info_' + data + '" ><td><input type="radio" id="commom_place1" name="commom_place2" value="" onclick="displayCommonInfo(this)" rel="' + common_people + '" phone="' + common_phone + '" /><label for="commom_place1">' + common_people + '</label></td><td><label for="commom_place1">' + common_phone + '</label></td><td><span class="interview-common-place-button" onclick="deleteCommonInfo(' + data + ')" style="display: inline;">删除</span></td></tr>';

                        $('.interview-common-info-table').prepend(html)

                        $('#common_people').val('')

                        $('#common_phone').val('')

                    }

                },
                error: function () {

                }
            });


        } else {

            setErrorTip('请填写联系人或联系电话');
        }

    }





    function displayCommonAddress(obj) {

        var interview_address_selected = $(obj).attr('rel')

        if (interview_address_selected) {

            $('#interview_address').val(interview_address_selected)
        }

    }

    function addCommonAdress() {

        var common_address = $('#common_address').val()

        if (common_address) {

            $.ajax({
                url: url + 'user/addHrCommonAdress', // 跳转到 action
                data: {
                    address: common_address,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var data = data.replace(/(^\s*)|(\s*$)/g, '');

                    if (data > 0) {

                        var html = '<tr id="address_' + data + '"><td><input type="radio" onclick="displayCommonAddress(this)"  id="commom_place_' + data + '" name="commom_place1" value=""  rel="' + common_address + '"/><label for="commom_place1">' + common_address + '</label></td><td><span class="interview-common-place-button" onclick="deleteCommonAdress(' + data + ')" style="display: inline;">删除</span></td></tr>';

                        $('.interview-common-address-table').prepend(html)

                        $('#common_address').val('')

                    }

                },
                error: function () {

                }
            });


        } else {

            setErrorTip('请输入常用地址');
        }

    }

    function deleteCommonAdress(id) {

        if (id) {

            var address_id = id

            $.ajax({
                url: url + 'user/deleteHrCommonAdress', // 跳转到 action
                data: {
                    id: id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var data = data.replace(/(^\s*)|(\s*$)/g, '');

                    if (data == 1) {

                        $('#address_' + address_id).remove()

                    }

                },
                error: function () {

                }
            });
        }
    }


    function buy_interview_order() {

        var resume_id = $('#interview_form #resume_id').val()

        var position_id = $('#interview_form #position_id').val()

        $.ajax({
            url: url + 'company/buy_interview', // 跳转到 action
            data: {
                resume_id: resume_id,
                position_id: position_id
            },
            type: 'post',
            cache: false,
            success: function (data) {

                $('.order_div').remove()

                if (data == 0) {

                    successInterview();

                    //$(".mask_warp_div").fadeIn();

                } else {

                    $('body').prepend(data)

                    $('.hl-order-div-mask').fadeIn(300);

                }
            },
            error: function () {

            }
        });
    }
</script>