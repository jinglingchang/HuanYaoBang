<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-08 11:27:43
         compiled from "/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/_ab_add_work_experience.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1151174044575790af9ed129-88442177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5451e19ee4abdbd8a5280b96253d7b38c3584e' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/_ab_add_work_experience.tpl',
      1 => 1463369669,
    ),
  ),
  'nocache_hash' => '1151174044575790af9ed129-88442177',
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

                            $('#monthto').hide();

                            //$("#" + string + '_').text('至今')

                        } else {

                            $('#monthto').css('visibility','visible');

                            //$("#" + string + '_').text(values)
                        }
                    }
                }
            </script>

        

    <style type="text/css">
    .ab-add-work-exp-warp-div{
        padding-top: 1em;
    }
    .ab-add-work-exp-table{
        border: solid 1px none;
        width: 100%;
        margin: 0 auto;
        color: #555;
        font-size: 1.4em;
    }
    .ab-add-work-exp-table tr td{
        border: solid 1px none;
        height: 2em;
        text-align: left;
    }
    .ab-add-work-exp-table tr td select{
        font-size: 0.7em;
        color: #777;
        width: 92%; 
        height: 2.2em;
        border: solid 1px #e1e1e1;
        background: #fff;
        text-indent: 1em;
            /*在选择框的最右侧中间显示小箭头图片*/
    background: url("http://ourjs.github.io/static/2015/arrow.png") no-repeat scroll right center transparent;
    background-color: #fff;
    }
    .ab-add-work-exp-title-td{
        padding-left: 2em;
        white-space: nowrap;
        font-size: 0.7em;
    }

    .ab-add-work-exp-input-text{
    font-size: 0.7em;
    width: 80%;
    height: 2.2em;
    color: #555;
    padding-left: 0em;
    text-indent: 1em;
    border-radius: 0.3em;
    border: solid 1px #e1e1e1;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    }
    .ab-add-work-exp-sure-btn{
        font-size: 0.9em;
        width: 64%;
        height: 2.8em;
        line-height: 2.8em;
        border: none;
        border-radius: 0.3em;
        color: #fff;
        background: #3398ff;
        float: right;
        margin-right: -14%;
        text-align: center;
    }
    .ab-add-work-exp-cancel-btn{
        font-size: 0.9em;
        text-align: center;
        width: 55%;
        height: 2.8em;
        line-height: 2.8em;
        border: solid 1px #3398ff;
        border-radius: 0.3em;
        color: #3398ff;
        background: #fff;
        margin-left: 27%;
    }
    .btn-row-table{
        width: 100%;
    }
    </style>



    <div class="page1 resumes" id='resume_1' style="width:98%; margin:0 auto;">
        <div class="ab-add-work-exp-warp-div">

            <!-- 已添加的 开始-->
            <!-- 已添加的 结束-->

            <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resumeajax/submitWork' method='post' id='formSkill'>

             <input type='hidden' name='resume_id' id='resume_id' value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

             <input type='hidden' name='key' id='key' value='<?php echo $_smarty_tpl->getVariable('key')->value;?>
'>

             <input type='hidden' name='operations' id='operations' value=''>

             <input type='hidden' name='user_id' id='user_id' value='<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'>


            <table class="ab-add-work-exp-table">
                <tr>
                    <td class="ab-add-work-exp-title-td" style="width: 23%;">公司名称</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['company'];?>
"  placeholder="请输入公司名称" class="ab-add-work-exp-input-text" id="company" name='company'></td>
                </tr>
                <tr>
                    <td class="ab-add-work-exp-title-td">开始时间</td>
                    <td>
                        <select id="yearfrom"  name='yearfrom' class="" style="width: 52%" onchange='selectMonthVal("yearfrom", this)'>
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
                    <td class="ab-add-work-exp-title-td">结束时间</td>
                    <td>
                        <select id="yearto" name='yearto' style="width:52%" onchange='selectMonthVal("yearto", this)'>


                            <?php if ($_smarty_tpl->getVariable('info')->value['end_time_'][0]=='至今'){?>

                            <option value="至今">至今</option>

                            <?php }else{ ?>

                            <option value="至今" selected>至今</option>

                            <?php }?>

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


                            <select id="monthto"  name="monthto" style='width:35%' onchange='selectMonthVal("monthto", this)'>
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

                            <select id="monthto"  name="monthto" style='visibility: hidden; width:35%' onchange='selectMonthVal("monthto", this)'>
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



                            <select id="monthto"  name="monthto" style='visibility:hidden;width:35%' onchange='selectMonthVal("monthto", this)'>
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
                    <td class="ab-add-work-exp-title-td">职位名称</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['job_title'];?>
" placeholder="请输入职位名称" class="ab-add-work-exp-input-text" id="job_title" name='job_title'></td>
                </tr>
<!-- 
                <tr>
                    <td class="ab-add-work-exp-title-td">公司类型</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['job_comptype'];?>
" placeholder="请输入公司类型" class="ab-add-work-exp-input-text" id="job_comptype" name='job_comptype'></td>
                </tr> -->


                <tr>
                    <td class="ab-add-work-exp-title-td">描述</td>
                    <td>
                        <input type="text" value="<?php echo $_smarty_tpl->getVariable('info')->value['job_text'];?>
" placeholder="请输入公司名称" class="ab-add-work-exp-input-text" id="job_text" name='job_text'></td>
                </tr>


            </table>
            <div style="text-align: center; margin-top:2em;">
                <table class="btn-row-table">
                    <tr>
                        <td>
                            <div class="ab-add-work-exp-sure-btn" onclick='submitResumeWork()'>保存
                            </div>
                        </td>

                        <?php if ($_smarty_tpl->getVariable('key')->value){?>

                         <td>
                            <input type='button' onclick='deleteResumeWork()' class="ab-add-work-exp-cancel-btn" value='删除' style="margin-left: 53%;" />
                        </td>

                        <?php }?>

                        <td>
                            <input type='button' class="ab-add-work-exp-cancel-btn" value='取消' />
                            
                        </td>
                    </tr>
                </table>

                <div style="height:2em;"></div>
            </div>

        </form>
        </div>
    </div>

</html>

  <script>

    function deleteResumeWork(){

        $('#operations').val('delete')

        submitResumeWork();

    }

    function submitResumeWork() {
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
        $('#formSkill').ajaxForm(options);

        $("#formSkill").ajaxSubmit(options);

    }

    $('.ab-add-work-exp-cancel-btn').click(function(){

        getEditResumebyAjax($('#baseinfo_resume_id').val());
    })

</script>