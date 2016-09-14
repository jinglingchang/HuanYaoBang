<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 11:19:54
         compiled from "/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/_ab_add_project_experience.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203810301457393c5adcf823-06098786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e4ad51edde19bab070a3e979a5cb48ed5b7e6e' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/_ab_add_project_experience.tpl',
      1 => 1463311142,
    ),
  ),
  'nocache_hash' => '203810301457393c5adcf823-06098786',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/private/var/www/config/Smarty/libs/plugins/modifier.date_format.php';
?>    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
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

                            $('#pmonthto').hide();

                            //$("#" + string + '_').text('至今')

                        } else {


                            $('#pmonthto').css('visibility','visible');

                            //$("#" + string + '_').text(values)
                        }
                    }
                }
            </script>

        


    <style type="text/css">
    .ab-add-project-exp-warp-div{
        padding-top: 1em;
    }
    .ab-add-project-exp-table{
        border: solid 1px none;
        width: 100%;
        margin: 0 auto;
        color: #555;
        font-size: 1.4em;
    }
    .ab-add-project-exp-table tr td{
        border: solid 1px none;
        height: 2em;
        text-align: left;
    }
    .ab-add-project-exp-table tr td select{
        font-size: 0.7em;
        color: #777;
        height: 2.4em;
        border: solid 1px #e1e1e1;
        background: #fff;
        width: 92%;
        text-indent: 1em;
        /*在选择框的最右侧中间显示小箭头图片*/
    background: url("http://ourjs.github.io/static/2015/arrow.png") no-repeat scroll right center transparent;
    background-color: #fff;
    }
    .ab-add-project-exp-title-td{
        padding-left: 10%;
        white-space: nowrap;
        font-size: 0.7em;
    }
    .ab-add-project-exp-input-text{
        font-size: 0.7em;
        width: 86%;
        height: 2.5em;
        color: #888;
        text-indent: 1em;
        padding-left: 0em;
        border-radius: 0.3em;
        border: solid 1px #e1e1e1;
    }
    .ab-add-project-exp-sure-btn{
        font-size: 0.9em;
        text-align: center;
        width: 55%;
        height: 2.6em;
        line-height: 2.8em;
        border: none;
        border-radius: 0.3em;
        color: #fff;
        background: #3398ff;
        float: right;
        margin-right: -18%;
    }
    .ab-add-project-exp-cancel-btn{
        font-size: 0.9em;
        text-align: center;
        width: 50%;
        height: 2.6em;
        line-height: 2.6em;
        border: solid 1px #3398ff;
        border-radius: 0.3em;
        color: #3398ff;
        background: #fff;
        margin-left: 25%;
    }
    .btn-row-table{
        width: 100%;
    }


</style>

<body>

    <input type='hidden' name='user_id' id='user_id' value='<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'>
    <input type='hidden' id='resume_info' name='resume_info' value='<?php echo $_smarty_tpl->getVariable('resume_info')->value;?>
'>

    <div class="page1 resumes" id='resume_1' style="width:98%; margin:0 auto;">
        <div class="ab-add-project-exp-warp-div">
            <div class="lut" style='border:none;' id='project_content'></div>

            <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resumeajax/submitProject' method='post' id='formProject'>

             <input type='hidden' name='resume_id' id='resume_id' value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

             <input type='hidden' name='key' id='key' value='<?php echo $_smarty_tpl->getVariable('key')->value;?>
'>

             <input type='hidden' name='user_id' id='user_id' value='<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'>

             <input type='hidden' name='operations' id='operations' value=''>

            <table class="ab-add-project-exp-table">
                <tr>
                    <td class="ab-add-project-exp-title-td" style="width: 30%;">项目名称</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['project'];?>
"  placeholder="请输入项目名称" class="ab-add-project-exp-input-text" id="project" name='project'></td>
                </tr>
                <tr>
                    <td class="ab-add-project-exp-title-td">开始时间</td>
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
                    <td class="ab-add-project-exp-title-td">结束时间</td>
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


                            <select id="pmonthto"  name="monthto" style='width:35%' onchange='selectMonthVal("pmonthto", this)'>
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

                            <select id="pmonthto"  name="monthto" style='visibility: hidden; width:35%' onchange='selectMonthVal("pmonthto", this)'>
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



                            <select id="pmonthto"  name="monthto" style='visibility: hidden;width:35%' onchange='selectMonthVal("pmonthto", this)'>
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
<!--                 <tr>
                    <td class="ab-add-project-exp-title-td">团队规模</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['team_size'];?>
"  placeholder="请输入团队规模" class="ab-add-project-exp-input-text" id="guimo" name='guimo'></td>
                </tr> -->
<!--                 <tr>
                    <td class="ab-add-project-exp-title-td">项目客户</td>
                    <td>
                        <select class="" name='kehu_span' id="kehu_span" >

                            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dict')->value['customer_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>

                            <?php if ($_smarty_tpl->getVariable('info')->value['project_customer']==$_smarty_tpl->tpl_vars['data']->value['name']){?>

                            <option value='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
' selected><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</option>

                            <?php }else{ ?>

                            <option value='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
'><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</option>


                            <?php }?>

                            
                            <?php }} ?>
                        </select>
                    </td>
                </tr> -->
<!--                 <tr>
                    <td class="ab-add-project-exp-title-td">担任角色</td>
                    <td>
                        <select class="" name='jiaose_span' id="jiaose_span">

                            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dict')->value['role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>

                            <?php if ($_smarty_tpl->getVariable('info')->value['hold_role']==$_smarty_tpl->tpl_vars['data']->value['name']){?>

                            <option value='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
' selected><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</option>

                            <?php }else{ ?>

                            <option value='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
'><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</option>

                            <?php }?>

                            
                            <?php }} ?>
                        </select>
                    </td>
                </tr> -->
               <!--  <tr>
                    <td class="ab-add-project-exp-title-td">项目工具</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['tool'];?>
"  placeholder="请填写项目工具" class="ab-add-project-exp-input-text" id="tool" name='tool'></td>
                </tr> -->
                <!-- <tr>
                    <td class="ab-add-project-exp-title-td">软件环境</td>
                    <td> -->
                        <!-- <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['responsibility'];?>
" placeholder="请填写责任描述" class="ab-add-project-exp-input-text" id="miaoshu" name='miaoshu'> -->

                        <!-- <textarea id="software_environment" name='software_environment' class="ab-add-project-exp-input-text"><?php echo $_smarty_tpl->getVariable('info')->value['software_environment'];?>
</textarea>

                    </td>
                </tr> -->

                 <tr>
                    <td class="ab-add-project-exp-title-td">项目描述</td>
                    <td>
                        <!-- <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['responsibility'];?>
" placeholder="请填写责任描述" class="ab-add-project-exp-input-text" id="miaoshu" name='miaoshu'> -->

                        <textarea id="description" name='description' class="ab-add-project-exp-input-text"><?php echo $_smarty_tpl->getVariable('info')->value['description'];?>
</textarea>

                    </td>
                </tr>

                <!--  <tr>
                    <td class="ab-add-project-exp-title-td">责任描述</td>
                    <td> -->
                        <!-- <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['responsibility'];?>
" placeholder="请填写责任描述" class="ab-add-project-exp-input-text" id="miaoshu" name='miaoshu'> -->

                      <!--   <textarea id="responsibility" name='responsibility' class="ab-add-project-exp-input-text"><?php echo $_smarty_tpl->getVariable('info')->value['responsibility'];?>
</textarea>

                    </td>
                </tr> -->

            </table>

            <div style="text-align: center; margin-top:2em;">
                <table class="btn-row-table">
                    <tr>
                        <td>
                            <div class="ab-add-project-exp-sure-btn" onclick='submitResumeProject()'>保存
                            </div>
                        </td>

                        <?php if ($_smarty_tpl->getVariable('key')->value){?>

                        <td>
                            <input onclick='deleteResumeProject()' type='button' class="ab-add-project-exp-cancel-btn" value='删除' style="margin-left: 53%;" />
                        </td>

                        <?php }?>

                        <td>
                            <input type='button' class="ab-add-project-exp-cancel-btn" value='取消' />
                        </td>
                    </tr>
                </table>

                <div style="height:2em;"></div>
            </div>

        </form>

        </div>
    </div>


  <script>

    function deleteResumeProject(){

        $('#operations').val('delete')

        submitResumeProject();

    }

    function submitResumeProject() {
        $(".loading").show();
        var options = {
            success: function (data) {

                $(".loading").hide();

                var data = data.replace(/(^\s+)|(\s+$)/g, "");

                if(data == 1){

                    getEditResumebyAjax($('#baseinfo_resume_id').val());

                    
                    var resume_id = $('#resume_id').val()

                    getResumeScore(resume_id);

                } else{

                    alert('请填写完整');

                    return false;

                }

            }
        };
        $('#formProject').ajaxForm(options);

        $("#formProject").ajaxSubmit(options);

    }

    $('.ab-add-project-exp-cancel-btn').click(function(){

        getEditResumebyAjax($('#baseinfo_resume_id').val());
    })

</script>