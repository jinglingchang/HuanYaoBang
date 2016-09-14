<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-12 15:40:33
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_buy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:943630102575d11f1447706-56242666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2a9fa5f3130a83d09c9becd12c30dc7a2842ec' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_buy.tpl',
      1 => 1463823406,
    ),
  ),
  'nocache_hash' => '943630102575d11f1447706-56242666',
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
    .page_div{
        padding-right: 50px;
        width: 100%;
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

<!-- <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
?>
    <table class="hl-resume-list-table">
        <tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_detail?id=<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
&type=upload"'>
            <td style="width:75%; color: #333;font-size:18px;padding-left: 10px;">
                <span><?php echo $_smarty_tpl->getVariable('list')->value->name;?>
</span>
                <span style="color:#777;font-size:13px;">[<?php echo $_smarty_tpl->getVariable('list')->value->position_name;?>
]</span>
            </td>
            <td style="width:14%;"></td>


            <td style="width:14%;">购买数：<?php echo $_smarty_tpl->getVariable('list')->value->buy_number;?>
</td>

            <td style="width:14%;">钱：<?php echo $_smarty_tpl->getVariable('list')->value->money;?>
</td>

            <td style="width:14%;">

                <?php if ($_smarty_tpl->getVariable('list')->value->resume_status==0){?>

                未激活

                <?php }elseif($_smarty_tpl->getVariable('list')->value->resume_status==1){?>

                已激活

                <?php }elseif($_smarty_tpl->getVariable('list')->value->resume_status==2){?>

                已验证

                <?php }else{ ?>

                被投诉

                <?php }?>

            </td>

            
          
            <td rowspan = 2>

                <div style="height: 80px;float: left;border-left: solid 1px #e1e1e1;"></div>
                <div class="hl-resume-list-match-div" style="margin-left: 20px;">
                    <div style="margin-top: 8px;">完善度</div>
                    <div><?php echo $_smarty_tpl->getVariable('list')->value->resume_complete_score;?>
</div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <span style="font-size:14px;color:#333;padding-left: 10px;">

                    <?php if ($_smarty_tpl->getVariable('list')->value->workexperience!=''){?>

                    <?php echo $_smarty_tpl->getVariable('list')->value->workexperience;?>
以上 / 

                    <?php }?>

                    <?php echo $_smarty_tpl->getVariable('list')->value->education;?>
 / <?php echo $_smarty_tpl->getVariable('list')->value->workplace;?>
 / <?php echo $_smarty_tpl->getVariable('list')->value->salary;?>
</span>
            </td>
            <td style="color:#888;font-size:14px;text-align: center;">
                <span><?php echo $_smarty_tpl->getVariable('list')->value->apply_time;?>
</span>
                <span>

                    上传

                </span>
            </td>
        </tr>
        <tr>
            <td colspan=3 style="border-bottom: solid 1px #e1e1e1;height: 2px;"></td>
        </tr>
    </table>

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


<style type="text/css">

    .hl-resume-list-table tr:hover{
        cursor: pointer;
    }
    .page_div{
        border: solid 1px clear;
    }

    .page_div{
        height:40px;
    }
    .page_div ul{
        list-style:none;
        text-align: right;
        width: 92%;
        float: left;
        margin-right: 25px;
    }
    .page_div li{
        display:inline;
        line-height:40px;
    }
    .page_div li span{
        margin-left: 10px;
    }
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

</script> -->