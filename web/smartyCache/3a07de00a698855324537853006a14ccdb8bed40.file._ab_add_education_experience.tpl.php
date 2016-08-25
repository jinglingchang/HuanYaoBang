<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 11:21:03
         compiled from "/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/_ab_add_education_experience.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167980142257393c9f1f4620-22569722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a07de00a698855324537853006a14ccdb8bed40' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/_ab_add_education_experience.tpl',
      1 => 1463368545,
    ),
  ),
  'nocache_hash' => '167980142257393c9f1f4620-22569722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/private/var/www/config/Smarty/libs/plugins/modifier.date_format.php';
?>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.form.js"></script>
    
            <script>

               function selectVal(obj, id) {
                    var name = $(obj).val()
                    //$('#' + id).text(name)
                }

                function selectMonthVal(string, obj) {
                    var values = $(obj).val()


                    if (string != 'yearto') {
                        //$("#" + string + '_').text(values)
                    } else {

                        if (values == '至今') {

                            $('#educationmonthto').hide();

                            //$("#" + string + '_').text('至今')

                        } else {


                            $('#educationmonthto').css('visibility','visible');

                            //$("#" + string + '_').text(values)
                        }
                    }
                }
            </script>

        

    <style type="text/css">

    .ab-add-education-exp-warp-div{
        padding-top: 1em;
    }
    .ab-add-education-exp-table{
        border: solid 1px none;
        width: 100%;
        margin: 0 auto;
        color: #555;
        font-size: 1.4em;
    }
    .ab-add-education-exp-table tr td{
        white-space: nowrap;
        font-size: 0.7em;
        height: 2.8em;
    }
    .ab-add-education-exp-table tr td select{
        font-size: 1em;
        color: #777;
        height: 2.4em;
        border: solid 1px #e1e1e1;
        width: 92%;
        text-indent: 1em;
                    /*在选择框的最右侧中间显示小箭头图片*/
        background: url("http://ourjs.github.io/static/2015/arrow.png") no-repeat scroll right center transparent;
        background-color: #fff;
    }
    .ab-add-education-exp-title-td{
        text-align: center;
        padding-left: 3%;
        white-space:nowrap;
    }
    .ab-add-education-exp-input-text{
        font-size: 1em;
        width: 86%;
        height: 2.4em;
        color: #888;
        padding-left: 0em;
        text-indent: 1em;
        border-radius: 0.3em;
        border: solid 1px #e1e1e1;
    }
    .ab-add-education-exp-sure-btn{
     font-size: 0.9em;
    text-align: center;
    width: 55%;
    height: 2.6em;
    line-height: 2.6em;
    border: none;
    border-radius: 0.3em;
    color: #fff;
    background: #3398ff;
    float: right;
    margin-right: -22%;
    }
    .ab-add-education-exp-cancel-btn{
        font-size: 0.9em;
        width: 50%;
        height: 2.6em;
        line-height: 2.6em;
        border: solid 1px #3398ff;
        border-radius: 0.3em;
        color: #3398ff;
        background: #fff;
        margin-left: 25%;
        text-align: center;
    }
    .btn-row-table{
        width: 100%;
    }

</style>
    <div class="page1 resumes" id='resume_1'>
        <div class="ab-add-education-exp-warp-div">

            <div class="lut" style='border:none;' id='education_content'></div>

                <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resumeajax/submitEducation' method='post' id='formEducation'>

             <input type='hidden' name='resume_id' id='resume_id' value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

             <input type='hidden' name='key' id='key' value='<?php echo $_smarty_tpl->getVariable('key')->value;?>
'>

             <input type='hidden' name='user_id' id='user_id' value='<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'>

              <input type='hidden' name='operations' id='operations' value=''>

                <table class="ab-add-education-exp-table">
                    <tr>
                        <td class="ab-add-education-exp-title-td">学校名称</td>
                        <td>
                            <input type="text" class="ab-add-education-exp-input-text" value="<?php echo $_smarty_tpl->getVariable('info')->value['school'];?>
"  placeholder="请填写学校名称" id="school" name='school'></td>
                    </tr>
                    <tr>
                        <td class="ab-add-education-exp-title-td">开始时间</td>
                        <td>
                        <select id="yearfrom"  name='yearfrom' class="" style="width:54%" onchange='selectMonthVal("yearfrom", this)'>
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['name'] = "sn";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'] = is_array($_loop=30) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

                            <?php if ($_smarty_tpl->getVariable('info')->value['begin_time_'][0]==smarty_modifier_date_format(time(),"%Y")-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']){?>

                            <option value="<?php echo smarty_modifier_date_format(time(),'%Y')-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
" selected><?php echo smarty_modifier_date_format(time(),"%Y")-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
</option>

                            <?php }else{ ?>

                            <option value="<?php echo smarty_modifier_date_format(time(),'%Y')-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
"><?php echo smarty_modifier_date_format(time(),"%Y")-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
</option>

                            <?php }?>
                            
                            <?php endfor; endif; ?>
                        </select>

                        <select id="monthfrom" name='monthfrom' class="" style="width:35%" onchange='selectMonthVal("monthfrom", this)'>
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

                            <?php if ($_smarty_tpl->getVariable('info')->value['begin_time_'][1]==$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1){?>

                            <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
" selected><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }else{ ?>

                            <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }?>

                            
                            <?php endfor; endif; ?>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td class="ab-add-education-exp-title-td">结束时间</td>
                       <td>
                        <select id="yearto" name='yearto' style="width:54%" onchange='selectMonthVal("yearto", this)'>


                            <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][0]=='至今'){?>

                            <option value="至今">至今</option>

                            <?php }else{ ?>

                            <option value="至今" selected>至今</option>

                            <?php }?>

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

                            <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][0]==smarty_modifier_date_format(time(),'%Y')-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']){?>

                            <option value="<?php echo smarty_modifier_date_format(time(),'%Y')-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
" selected><?php echo smarty_modifier_date_format(time(),"%Y")-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
</option>
                            

                            <?php }else{ ?>

                            <option value="<?php echo smarty_modifier_date_format(time(),'%Y')-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
"><?php echo smarty_modifier_date_format(time(),"%Y")-$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index'];?>
</option>

                             <?php }?>
                            <?php endfor; endif; ?>

                           
                        </select>

                        <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][0]!=''){?>

                        <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][0]!='至今'){?>


                            <select id="educationmonthto"  name="monthto" style='width:35%' onchange='selectMonthVal("educationmonthto", this)'>
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

                            <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][1]==$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1){?>

                                <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
" selected><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }else{ ?>

                                <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }?>

                            
                            <?php endfor; endif; ?>
                        </select>


                        <?php }else{ ?>

                            <select id="educationmonthto"  name="monthto" style='visibility: hidden;width:35%' onchange='selectMonthVal("educationmonthto", this)'>
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

                            <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][1]==$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1){?>

                                <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
" selected><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }else{ ?>

                                <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }?>

                            
                            <?php endfor; endif; ?>
                        </select>


                        <?php }?>

                        <?php }else{ ?>



                            <select id="educationmonthto"  name="monthto" style='visibility: hidden;width:35%' onchange='selectMonthVal("educationmonthto", this)'>
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

                            <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][1]==$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1){?>

                                <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
" selected><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }else{ ?>

                                <option rel='interview_month' value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</option>

                            <?php }?>

                            
                            <?php endfor; endif; ?>
                        </select>

                        <?php }?>
                    </td>
                    </tr>
                    <tr>
                        <td class="ab-add-education-exp-title-td">专业名称</td>
                        <td>
                            <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['major'];?>
"  placeholder="请输入专业名称" class="ab-add-education-exp-input-text" id="major" name='major'></td>
                    </tr>
        
                    <tr>
                        <td class="ab-add-education-exp-title-td">学历</td>
                        <td>
                            <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['degree_level'];?>
"  placeholder="请输入学历" class="ab-add-education-exp-input-text" id="degree_level" name='degree_level'></td>
                    </tr>
                </table>

            <div style="text-align: center; margin-top:2em;">
                <table class="btn-row-table">
                    <tr>
                        <td>
                            <div class="ab-add-education-exp-sure-btn" onclick='submitResumeEducation()'>保存
                            </div>
                        </td>

                        <?php if ($_smarty_tpl->getVariable('key')->value){?>

                        <td>
                            <input type='button' onclick='deleteResumeEducation()' class="ab-add-education-exp-cancel-btn" value='删除' style="margin-left: 50%;" />
                        </td>

                        <?php }?>

                        <td>
                            <input type='button' class="ab-add-education-exp-cancel-btn" value='取消'>
                           
                        </td>
                    </tr>
                </table>

                <div style="height:2em;"></div>
            </div>

         </form>
        </div>
    </div>

 <script>

    function deleteResumeEducation(){

        $('#operations').val('delete')

        submitResumeEducation();

    }

    function submitResumeEducation() {
        $(".loading").show();
        var options = {
            success: function (data) {

                var data = data.replace(/(^\s+)|(\s+$)/g, "");

                $(".loading").hide();

                if(data == '1'){

                    getEditResumebyAjax($('#baseinfo_resume_id').val());

                    
                    var resume_id = $('#resume_id').val()

                    getResumeScore(resume_id);

                } else{

                    alert('请填写完整');

                    return false;

                }

            }
        };
        $('#formEducation').ajaxForm(options);

        $("#formEducation").ajaxSubmit(options);

    }


    $('.ab-add-education-exp-cancel-btn').click(function(){

       getEditResumebyAjax($('#baseinfo_resume_id').val());
    })

</script>