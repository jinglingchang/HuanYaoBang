<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-23 15:27:52
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10693573645742b0f81f8958-76338180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93f6e5376de8da2908bcea757109bafd72ba086c' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_upload.tpl',
      1 => 1463824949,
    ),
  ),
  'nocache_hash' => '10693573645742b0f81f8958-76338180',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style type="text/css">
    .cycle-search-table{
        border:solid 1px #e1e1e1;
        width: 900px;
        height: 85px;
        margin:0 auto;
        margin-top: 10px;
    }
    .cycle-search-table:hover{
        border:solid 1px #3398ff;
    }
    .cycle-search-table tr td{
        border:solid 1px none;
        font-size: 14px;
            text-align: left;
    }
    .reward-btn{
        color: red;
        padding: 0px 9px;
        border-radius: 2px;
        border: solid 1px red;
        background: rgba(255,0,0,0.1);
        cursor: pointer;
        margin-bottom: 10px;
    }
    .reward-btn:hover{
        background: red;
        color: #fff;
    }
    .reward-btn samp{
        color: red;
    }

    .new-area1-td{

        width: 98px;

        padding-left: 26px;

        padding-top: 15px;

        cursor: pointer;

        vertical-align: top;
    }

    .new-area1-td-div2{

        padding-top: 18px;
    }

    .new-area2-td{

        width: 232px;

        vertical-align: top;

        cursor: pointer;

        padding-top: 15px;
    }

    .new-area2-td-div2{

        padding-top: 18px;

        float: left;
    }

    .new-area2-td-div2-city{

        padding-left: 30px;
    }

    .new-area2-td-div1{

        overflow: hidden;

        text-overflow: ellipsis;

        white-space: nowrap;

        cursor: pointer;
    }

    .new-area3-td{

        width: 440px;

        padding-top: 11px;

        vertical-align: top;
    }

    .new-area3-td-div-1{

        margin:0;

        padding: 0;

       margin-left: 10px;
    }

    .new-area3-td-div1{

        padding-top: 18px;
    }

    .new-area3-td-div1-1{

       padding-left: 25px;
    }

    .new-area4-td{

        padding-top: 10px;

        vertical-align: top;
    }

    .new-area4-div2{

        padding-top: 8px;

        vertical-align: top;
    }

    .new-area5-td{

        padding-left: 26px;

        vertical-align: top;
    }

    .new-area5-area6-public{

        padding-top: 15px;

        vertical-align: top;
    }

    .new-area5-td-div{

        padding-top: 8px;

        vertical-align: top;
    }

    .clear-margin-padding{

        margin: 0;

        padding: 0;
    }

</style>

<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
?>

<table class="cycle-search-table">

    <tr style="height: 85px;">
        <td class='new-area1-td' onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'>
            <div>
                <?php echo $_smarty_tpl->getVariable('list')->value->name;?>

            </div>
            <div class='new-area1-td-div2'>
                <?php if ($_smarty_tpl->getVariable('list')->value->education!=''){?>
                <span><?php echo $_smarty_tpl->getVariable('list')->value->education;?>

                &nbsp;&nbsp;&nbsp;&nbsp;
                
                <?php }?>
                </span>
            </div>
        </td>
        <td class='new-area2-td' onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'>
            <div class='new-area2-td-div1'>

                <?php if ($_smarty_tpl->getVariable('list')->value->work_info['job_title']!=''){?>
                    <?php echo mb_substr($_smarty_tpl->getVariable('list')->value->work_info['job_title'],0,15,'utf8');?>


                <?php }else{ ?>

                    <div >&nbsp;&nbsp;</div>
                <?php }?>

            </div>
            <div class='new-area2-td-div2'>
                <?php if ($_smarty_tpl->getVariable('list')->value->workexperience){?>

                <?php echo $_smarty_tpl->getVariable('list')->value->workexperience;?>


                <?php }else{ ?>

                    工作经验保密

                <?php }?>
            </div>
            <div class='new-area2-td-div2 new-area2-td-div2-city'>现居<?php echo $_smarty_tpl->getVariable('list')->value->workplace;?>
</div>
        </td>
 <!--        <td>
            <div>&nbsp;</div>
            <div style=" padding-top: 7px;">现居<?php echo $_smarty_tpl->getVariable('list')->value->workplace;?>
</div>
        </td> -->
        <td  class='new-area3-td' onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'colspan="2">

            <div>

                <?php if ($_smarty_tpl->getVariable('list')->value->resume_status==1){?>

                <div class="resume-status clear-margin-padding ">已激活</div>

                <?php }else{ ?>

                <div class="resume-status resume-status-not clear-margin-padding ">未激活</div>

                <?php }?>

                <?php if ($_smarty_tpl->getVariable('list')->value->resume_auth==1){?>

                <div class="resume-status new-area3-td-div-1">已验证</div>

                <?php }else{ ?>

                <div class="resume-status resume-status-not new-area3-td-div-1">未验证</div>

                <?php }?>

                <?php if ($_smarty_tpl->getVariable('list')->value->resume_status==1){?>

                    <?php if ($_smarty_tpl->getVariable('list')->value->resume_work_status==1){?>

                    <div class="resume-status new-area3-td-div-1">有意向</div>

                    <?php }else{ ?>

                    <div class="resume-status resume-status-not new-area3-td-div-1">暂无意向</div>

                    <?php }?>

                <?php }?>
            </div>
            <div style="clear: both;"></div>
            <div style="font-size: 13px; color: #888; " class='new-area3-td-div1'>
                <span ><?php echo $_smarty_tpl->getVariable('list')->value->buy_number;?>
人打赏</span>
                &nbsp;&nbsp;&nbsp;
                <span class='new-area3-td-div1-1'><?php echo $_smarty_tpl->getVariable('list')->value->resume_auth_count;?>
条评价</span>

                <sapm class='new-area3-td-div1-1' style="font-size: 13px; color: #888;">
                更新时间：<?php echo $_smarty_tpl->getVariable('list')->value->apply_time;?>

            </sapm>
            </div>
        </td>

    </tr>
        
</table>

<div style="height: 5px;"></div>

<?php }} ?>

<div class="page_div">
    <?php echo $_smarty_tpl->getVariable('fenye')->value;?>

</div>


<input type='hidden' name='type' id='type' value='<?php echo $_smarty_tpl->getVariable('type')->value;?>
' />

<input type='hidden' name='soft' id='soft' value='<?php echo $_smarty_tpl->getVariable('soft')->value;?>
' />

<input type='hidden' name='page' id='page' value='<?php echo $_smarty_tpl->getVariable('page')->value;?>
'>


<script>
    
    $(function(){

        var count = '<?php echo $_smarty_tpl->getVariable('count')->value;?>
'

        var type = '<?php echo $_smarty_tpl->getVariable('type')->value;?>
'

        switch(type){

            case '1':

                $('#recommed_number').html(count)

                break;

            case '2':

                $('#apply_number').html(count)

                break;

            case '3':

                $('#collect_number').html(count)

                break;
        }

    })

    function goToResumeDetail(id,source) {
        // body...
        window.open('<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_detail?id='+id+'&source='+source+'')
    }

</script>


<input type='hidden' name='type' id='type' value='<?php echo $_smarty_tpl->getVariable('type')->value;?>
' />

<input type='hidden' name='soft' id='soft' value='<?php echo $_smarty_tpl->getVariable('soft')->value;?>
' />


<input type='hidden' name='page' id='page' value='<?php echo $_smarty_tpl->getVariable('page')->value;?>
'>


<style type="text/css">

    .hl-resume-list-table tr:hover{
        cursor: pointer;
    }
    .page_div{
        border: solid 1px clear;
    }

    .page_div{
        height:50px;
        text-align: right;
        margin-right: 0px;

    }
    .page_div ul{
        list-style:none;
        text-align: right;
/*        width: 92%;
        float: left;*/
        margin-right: 25px;
    }
    .page_div li{
        display:inline;
        line-height:40px;
    }
   /* .page_div li span{
        margin-left: 10px;
    }*/
    .page_div a{
        color:#999;
        text-decoration:none;
        padding-left: 10px;
    }
    .page_div a:hover{
        color:#333;
    }
    .count_page_span{
        margin-left: 20px;
        font-size: 14px;
        color: #999;
        border: solid 1px clear;
        margin-top: 5px;
        height: 40px;
        display: block;
        line-height: 40px;
    }

</style>

<script>
    
    $(function(){

        var count = '<?php echo $_smarty_tpl->getVariable('count')->value;?>
'

        var type = '<?php echo $_smarty_tpl->getVariable('type')->value;?>
'

        $('#upload_number').html(count)
        

    })

</script>