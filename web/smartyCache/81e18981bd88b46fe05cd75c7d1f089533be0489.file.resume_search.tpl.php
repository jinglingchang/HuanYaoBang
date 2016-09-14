<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 17:24:33
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resume/Tpl/Resume/resume_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2109987477573991d14d1fa7-89402993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81e18981bd88b46fe05cd75c7d1f089533be0489' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resume/Tpl/Resume/resume_search.tpl',
      1 => 1463390178,
    ),
  ),
  'nocache_hash' => '2109987477573991d14d1fa7-89402993',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style type="text/css">
    .cycle-search-table{
        border:solid 1px #e1e1e1;
        width: 900px;
        height: 170px;
        margin:0 auto;
    }
    .cycle-search-table:hover{
        border:solid 1px #3398ff;
    }
    .cycle-search-table tr td{
        border:solid 1px none;
        font-size: 14px;
    }
    .cycle-search-table tr td div{
        cursor: pointer;
    }
    .reward-btn{
        color: red;
        padding: 0px 9px;
        border-radius: 2px;
        border: solid 1px red;
        background: rgba(255,0,0,0.1);
        cursor: pointer;
        margin-bottom: 10px;
        width: 82px;
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
</style>

<?php if (count($_smarty_tpl->getVariable('resume_list')->value)>0){?>

<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
?>

<table class="cycle-search-table">

    <tr style="height: 85px;">
        <td style="width: 80px; padding-left: 15px; cursor: pointer;" onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'>
            <div>
                <span><?php echo $_smarty_tpl->getVariable('list')->value->name;?>
</span>
            </div>
            <div style=" padding-top: 7px;">
                <?php if ($_smarty_tpl->getVariable('list')->value->education!=''){?>
                <span><?php echo $_smarty_tpl->getVariable('list')->value->education;?>

                &nbsp;&nbsp;&nbsp;&nbsp;
                
                <?php }?>
                </span>
            </div>
        </td>
        <td style="width: 230px; cursor: pointer;" onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'>
            <div style="width: 230px;overflow: hidden; text-overflow: ellipsis;white-space: nowrap;cursor: pointer;">

                <?php if ($_smarty_tpl->getVariable('list')->value->work_info['job_title']!=''){?>
                    <?php echo $_smarty_tpl->getVariable('list')->value->work_info['job_title'];?>


                <?php }else{ ?>

                    <div style="width: 230px;cursor: pointer;">&nbsp;&nbsp;</div>
                <?php }?>

            </div>
            <div style=" padding-top: 11px; float: left; border:solid 1px none; width: 120px;">
                <?php if ($_smarty_tpl->getVariable('list')->value->workexperience){?>

                <?php echo $_smarty_tpl->getVariable('list')->value->workexperience;?>


                <?php }else{ ?>

                    工作经验保密

                <?php }?>
            </div>
            <div style="height: 39px;line-height: 49px; cursor: pointer;">现居<?php echo $_smarty_tpl->getVariable('list')->value->workplace;?>
</div>
        </td>
 <!--        <td>
            <div>&nbsp;</div>
            <div style=" padding-top: 7px;">现居<?php echo $_smarty_tpl->getVariable('list')->value->workplace;?>
</div>
        </td> -->
        <td style="width: 150px;cursor: pointer;"onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'colspan="2">

            <div>

                <?php if ($_smarty_tpl->getVariable('list')->value->resume_status==1){?>

                <div class="resume-status">已激活</div>

                <?php }else{ ?>

                <div class="resume-status resume-status-not">未激活</div>

                <?php }?>

                <?php if ($_smarty_tpl->getVariable('list')->value->resume_auth==1){?>

                <div class="resume-status">已验证</div>

                <?php }else{ ?>

                <div class="resume-status resume-status-not">未验证</div>

                <?php }?>

                <?php if ($_smarty_tpl->getVariable('list')->value->resume_status==1){?>

                    <?php if ($_smarty_tpl->getVariable('list')->value->resume_work_status==1){?>

                    <div class="resume-status">有意向</div>

                    <?php }else{ ?>

                    <div class="resume-status resume-status-not">暂无意向</div>

                    <?php }?>

                <?php }?>
            </div>
            <div style="clear: both;"></div>
            <div style="font-size: 13px; color: #888; margin-top: 10px;">
                <span><?php echo $_smarty_tpl->getVariable('list')->value->buy_number;?>
人打赏</span>
                &nbsp;&nbsp;&nbsp;
                <span><?php echo $_smarty_tpl->getVariable('list')->value->resume_auth_count;?>
条评价</span>

                <sapm style="font-size: 13px; color: #888; margin-top: 8px; margin-left: 30px;">
                更新时间：<?php echo $_smarty_tpl->getVariable('list')->value->apply_time;?>

            </sapm>
            </div>
        </td>

        <td style="width: 120px; text-align: center;">
            <div style="font-size: 18px; color: #3398ff;" onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'>
                <span>
                    匹配值
                </span> 
                <span><?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
</span>
            </div> 

            <?php if ($_smarty_tpl->getVariable('list')->value->buy_status==0){?>

            <div onclick='checkLogin();buy_resume(<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
)'>
                <button class="reward-btn">打赏<samp><?php echo $_smarty_tpl->getVariable('list')->value->money;?>
</samp>元</button>
            </div>

            <?php }else{ ?>
            <div>
                <button class="reward-btn" style="visibility: hidden;">打赏<samp><?php echo $_smarty_tpl->getVariable('list')->value->money;?>
</samp>元</button>
            </div>

            <?php }?>

        </td>
    </tr>
    <tr style="background: rgb(248,249,250)">
        <td colspan ="2" style="padding-left: 15px; vertical-align: -webkit-baseline-middle; padding-top: 10px;cursor: pointer;" onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'>
            <div style="color: #444;font-size: 12px;width: 330px;height: 32px;overflow: hidden; margin-top: -5px;">
                最近公司：<?php echo $_smarty_tpl->getVariable('list')->value->work_info['company'];?>


                <?php if ($_smarty_tpl->getVariable('list')->value->work_info['begin_time']!=''&&$_smarty_tpl->getVariable('list')->value->work_info['end_time']!=''){?>
                 | 
                <?php echo $_smarty_tpl->getVariable('list')->value->work_info['begin_time'];?>
-<?php echo $_smarty_tpl->getVariable('list')->value->work_info['end_time'];?>


                <?php }?>

            </div>

            <div style="color: #444;font-size: 12px;width: 330px;height: 32px;overflow: hidden;">
                毕业学校：<?php echo $_smarty_tpl->getVariable('list')->value->education_info['school_name'];?>


                <?php if ($_smarty_tpl->getVariable('list')->value->education_info['begin_time']!=''&&$_smarty_tpl->getVariable('list')->value->work_info['end_time']!=''){?>
                 |
                <?php echo $_smarty_tpl->getVariable('list')->value->education_info['begin_time'];?>
-<?php echo $_smarty_tpl->getVariable('list')->value->education_info['end_time'];?>


                <?php }?>
            </div>
        </td>
        <td colspan = 2 style="padding-top: 10px;cursor: pointer;" onclick='goToResumeDetail("<?php echo $_smarty_tpl->getVariable('list')->value->id;?>
","<?php echo $_smarty_tpl->getVariable('list')->value->searchScore;?>
")'>
            <div class="keywords" style="color: #333;font-size: 12px;width:400px;height: 78px;overflow: hidden;">
            <?php echo $_smarty_tpl->getVariable('list')->value->keyword;?>


            </div>
        </td>
        <td></td>
    </tr>        
</table>

<div style="height: 5px;"></div>

<?php }} ?>

<div class="page_div">
    <?php echo $_smarty_tpl->getVariable('fenye')->value;?>

</div>

<?php }else{ ?>

    <?php if ($_smarty_tpl->getVariable('resume_hidden_status')->value!=0){?>

    <div style='margin-top: 100px;font-size: 16px;text-align: center;min-height: 300px;'>很抱歉，根据您的筛选条件，没有搜索到简历 <br /> 请您更换筛选条件，重新搜索</div>

    <?php }?>

<?php }?>

<div class='mask_warp_div'>

    <input type='hidden' name='resume_id' id='resume_id' >

</div>


<?php if ($_smarty_tpl->getVariable('resume_list')->value!=''){?>

<input type='hidden' id='resume_list_sort' value='<?php echo $_smarty_tpl->getVariable('soft')->value;?>
'>

<?php }else{ ?>

<input type='hidden' id='resume_list_sort' value='-1'>

<?php }?>



<script type="text/javascript">


    $(function(){

        $(".reward-btn").hover(function(){

             $(this).find('samp').css('color','#fff');

             
        },function(){
            $(".reward-btn samp").css('color','red');
        })
    })

     replace();
     function replace() {
     // body...
        var searchKeyword = $("#search").val().split(' ')[0].toLowerCase();

        $('.keywords').each(function(){

            var reg=new RegExp(searchKeyword,"g"); //创建正则RegExp对象 

            var keyword_text = $(this).text().toLowerCase();
            

             var string = keyword_text;
             var reg1=new RegExp(searchKeyword);
              var b = string.match(reg1);
            
            string = string.substr(b.index-5,string.length)

            string = string.replace(reg,"<span style='color:red'>"+searchKeyword+"</span>");   

             $(this).html(string)

        })
 }

 function buy_resume(resume_id) {

         

            if (resume_id > 0) {

                $('.loading').show()

                $('#resume_id').val(resume_id)

                $.ajax({
                    url: url + 'company/buy_contact', // 跳转到 action
                    data: {
                        resume_id: resume_id,
                    },
                    type: 'post',
                    cache: false,
                    success: function (data) {

                        $('.order_div').remove()

                        $('.loading').hide()

                        if (data == 0) {

                            
                            

                            $(".mask_warp_div").fadeIn();

                        } else {

                            $('body').prepend(data)

                            $('.hl-order-div-mask').fadeIn(300);

                        }

                    },
                    error: function () {

                    }
                });


            }

        }

        function successBuyResume(){

            resumeSearch(1);
        }

        function getResumePhoneAndEmail(){

            
        }

</script>





