<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-12 15:56:17
         compiled from "/private/var/www/html/employer_tool/Lib/User/Tpl/User/task.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2128492225575d15a12bc5f6-34906005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb33a34c97916c033025ccdfa30e98151dba172' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/User/Tpl/User/task.tpl',
      1 => 1464368941,
    ),
  ),
  'nocache_hash' => '2128492225575d15a12bc5f6-34906005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<div class ="rex_task_wrap" style="margin-top: 30px; padding-top: 30px; height: 110vh">
    <div style='font-size: 18px;'>任务奖励200元</div>
    <div style="margin: 20px 0;">
        <div class="rex_progress">
            <div class="rex_progress_bar" style="width:<?php echo $_smarty_tpl->getVariable('money')->value;?>
%">&nbsp;</div>
        </div>

        <div class="rex_accept_money" style='font-size: 18px;'>&nbsp;&nbsp;已领取<?php echo $_smarty_tpl->getVariable('task_money')->value;?>
</div>         
    </div>

    <?php  $_smarty_tpl->tpl_vars['infos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('task_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['infos']->key => $_smarty_tpl->tpl_vars['infos']->value){
?>

    <div class="rex_task_list">
        <div class = "rex_task_item">
            <div class="tt_td">
                   <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/task/<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
.png" style="width: 50px;float: left">
                   <div class="title" ><?php echo $_smarty_tpl->tpl_vars['infos']->value['name'];?>
</div>
                   <div class="desc"><?php echo $_smarty_tpl->tpl_vars['infos']->value['describe'];?>
</div>
            </div>                    
            <!-- <div>任务奖励</div> -->
            <div class="tt_func" style='top:5px;'>

                <?php if ($_smarty_tpl->tpl_vars['infos']->value['id']==1){?>
                
                <div style="float: left; color: #3398ff;font-size: 18px;line-height: 30px;">已奖励<?php echo $_smarty_tpl->tpl_vars['infos']->value['reward'];?>
元</div>

                <?php }else{ ?>

                <div style="float: left; color: #3398ff;font-size: 18px;line-height: 30px;">奖励<?php echo $_smarty_tpl->tpl_vars['infos']->value['reward'];?>
元</div>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['infos']->value['user_task_info']['id']>0){?>

                    <?php if ($_smarty_tpl->tpl_vars['infos']->value['user_task_info']['is_receive_reward']==0){?>

                    <button style='height:30px;font-size: 14px;' class="rex_btn rex_btn_blue"  onclick='task.receiveTaskAward(<?php echo $_smarty_tpl->tpl_vars['infos']->value['id'];?>
)'>领取</button>

                    <?php }else{ ?>

                    <button class="rex_btn rex_btn_gray rex_btn_task" style='height:30px'>已领取</button>
                    <?php }?>

                <?php }else{ ?>

                    <?php if ($_smarty_tpl->tpl_vars['infos']->value['id']==1){?>

                    <button class="rex_btn rex_btn_blue " id='invite-friend-btn' style='height:30px;font-size: 14px;'>邀请好友</button>

                    <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['id']==2){?>

                    <button class="rex_btn rex_btn_blue " onclick='javascript:window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management")' style='height:30px;font-size: 14px;'>上传简历</button>

                    <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['id']==3){?>

                    <button class="rex_btn rex_btn_blue " onclick='javascript:window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/newSearchResume")' style='height:30px;font-size: 14px;'>打赏简历</button>

                    <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['id']==4){?>

                    <button class="rex_btn rex_btn_blue " onclick='javascript:window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management")' style='height:30px;font-size: 14px;'>激活简历</button>

                    <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['id']==5){?>

                    <button class="rex_btn rex_btn_blue " onclick='javascript:window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management")' style='height:30px;font-size: 14px;'>验证简历</button>

                    <?php }elseif($_smarty_tpl->tpl_vars['infos']->value['id']==6){?>

                    <button class="rex_btn rex_btn_blue " onclick='javascript:window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management")' style='height:30px;font-size: 14px;'>评价简历</button>

                    <?php }?>

                <?php }?>
            </div>
        </div>
    </div>

    <div style='height: 20px;'>&nbsp;</div>

    <?php }} ?>

</div>

<!-- 邀请好友 -->
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/invite.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<script type="text/javascript">
    
$(function(){
    $("#invite-friend-btn").click(function(){
        $(".inviteDg").fadeIn();
    })
})

</script>



