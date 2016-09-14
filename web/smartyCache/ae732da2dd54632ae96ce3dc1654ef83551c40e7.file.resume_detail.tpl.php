<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 19:34:24
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resume/Tpl/Resume/resume_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4259779885739b0403e07d4-80919447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae732da2dd54632ae96ce3dc1654ef83551c40e7' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resume/Tpl/Resume/resume_detail.tpl',
      1 => 1463398460,
    ),
  ),
  'nocache_hash' => '4259779885739b0403e07d4-80919447',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> 

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/order/order.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>  

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/back.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<style type="text/css">

    .hl-position-detail-row-table tr td{
        height: 40px;
        width: 170px;
        text-align:left;
        font-size: 14px;
        font-family: "Microsoft YaHei";
    }
    .hl-position-detail-tip-button {
        width: auto;
        height: auto;
        font-size: 12px;
        color: #333;
        background: #f3f3f3;
        border: none;
        border-radius: 3px;
        padding: 3px 15px;
        margin-bottom: 10px;
        margin-left: 10px;
    }

    .circle-text, .circle-info, .circle-text-half, .circle-info-half{
        width: 52%;
        position: absolute;
        text-align: center;
        display: inline-block;
    }

    .resume_detail_baseinfo_table tr td{
        border: solid 1px none;
        font-family: "Microsoft YaHei";
    }
    .resume_detail_baseinfo_table tr td div samp{
        font-family: "Microsoft YaHei";
    }
    .education_experience_row_warp_div{
        border-bottom: solid 1px #ccc;
        width: 98%;
        margin: 0 auto;
    }
    .resume_section_title_div span{
        font-size: 16px;
    }
    .resume_section_title_div img{
        margin-right: 10px;
        /*margin-top: 20px;*/
    }
    #myStat2 canvas{
        margin-left: 45px;
    }
    .education_table{
        width: 65%;
    }
    .education_table tr td{
        font-size: 14px;
        text-align: left;
    }
    .show-check-block{
        position: absolute;
        margin-left: 90px;
        width: 260px;
        background: rgb(145,187,255);
        color: #fff;
        padding: 5px;
        margin-top:30px;
        display: none;
    }

    .show-check-block1{

        position: absolute;
        margin-top: 31px;
        width: 260px;
        background: rgb(145,187,255);
        color: #fff;
        padding: 5px;
        display: none;
    }
    .show-check-block2{

        position: absolute;
        margin-top: 31px;
        width: 260px;
        background: rgb(145,187,255);
        color: #fff;
        padding: 5px;
        display: none;
        margin-left: 180px;
    }

    .language-hide{
        display: none;
    }
    .resume_detail_baseinfo_table{
        height: 165px;
    }
    .resume_detail_baseinfo_table tr td{
        border:solid 1px none;

        font-family: "Microsoft YaHei";
    }
    .resume-info-td-height{
        height: 21px;
    }

</style>

<script type="text/javascript">

    $(function(){


    })

</script>


<div class="resume_detail_warp_div" style="margin-top:15px;width: 1000px;">

    <!-- 简历基本信息 div row 开始-->

    <div class="resume_detail_content_div">

        <div style="margin-top: 5px;text-align: right;color: #888;padding-right: 20px;font-size: 12px;border-bottom: solid 1px #e1e1e1;height: 40px;line-height: 40px;">

            <span><?php echo $_smarty_tpl->getVariable('resume_info')->value->upload_time;?>
&nbsp;&nbsp;由<?php echo $_smarty_tpl->getVariable('resume_info')->value->upload_name;?>
上传</span>

            <?php if ($_smarty_tpl->getVariable('display_resume_edit')->value==1){?>

                <span class="set-resume-open" style="cursor: pointer; color: #3398ff" onclick="window.open('<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/edit?id=<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
')">编辑简历</span>

            <?php }?>

        </div>

        <div class="resume_detail_baseinfo_row_div">

            <table class="resume_detail_baseinfo_table" style='text-align:left;'>
                <tr>
                    <td rowspan="5" style="width: 0.1%;">
                        <div class="photo_img_div">
                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_photo!=''){?>
                                <img src="<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_photo;?>
"style="width: 123px;height: 153px;" />
                            <?php }else{ ?>

                                <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['sex']=='男'){?>
                                    <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png"/>
                                <?php }elseif($_smarty_tpl->getVariable('resume_info')->value->resume_info['sex']=='女'){?>
                                    <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_2.png"  />
                                <?php }else{ ?>
                                    <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png" />
                                <?php }?>

                            <?php }?>
                        </div>
                    </td>

                    <td class="resume-info-td-height">

                        <div>
                        <samp id='name'><?php echo $_smarty_tpl->getVariable('resume_info')->value->name;?>
</samp>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['sex']!=''){?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['sex'];?>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['birth']!=''){?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <samp id='birth'><?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['birth'];?>
</samp>&nbsp;（<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['age'];?>
岁）
                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['marriage']!=''){?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['marriage'];?>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->education!=''){?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->education;?>

                        <?php }?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="resume-info-td-height">
                    <div style="white-space: nowrap;">
                        <samp style="float: left;">
                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->workexperience!=''){?>
                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->workexperience;?>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['city']!=''){?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            现居：<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['city'];?>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->salary!=''){?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            预估薪资：<?php echo $_smarty_tpl->getVariable('resume_info')->value->salary;?>

                        <?php }else{ ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            预估薪资：保密
                        <?php }?>
                        </samp>
                             &nbsp;&nbsp;&nbsp;&nbsp;
                        <samp class="review-grade" style="position:absolute;">
                           
                        </samp>
                    </div>

                    </td>    
                </tr>
                <tr>
                    <td id='phone' class="resume-info-td-height">
                        <div>
                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->phone!=''){?>
                            手机号：<?php echo $_smarty_tpl->getVariable('resume_info')->value->phone;?>

                        <?php }?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id='email' class="resume-info-td-height"> 
                    <div>
                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->email!=''){?>
                            邮箱：<?php echo $_smarty_tpl->getVariable('resume_info')->value->email;?>

                        <?php }?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['status']==1){?>
                            <div class="resume-status resume-checked1" id='resume_status_1'>
                            已激活
                            </div>
                             
                                <div class="show-check-block1" >
                                    手机号码真实，求职意向已验证
                                </div>

                            <?php }else{ ?>

                            <div class="resume-status resume-status-not" >
                            未激活
                            </div>

                            <?php }?>

                        
                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_auth==1){?>
                             <div class="resume-status resume-checked" style="margin-left: 20px;" id='resume_status_2'>
                            已验证
                            </div>
                            
                                <div class="show-check-block">
                                    sdasda
                                </div>

                            <?php }else{ ?>

                            <div class="resume-status resume-status-not" style="margin-left: 20px;" id='resume_status_2'>
                             未验证
                            </div>
                           
                            <?php }?>

                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['work_status']==1){?>

                            <div class="resume-status resume-status-not resume-checked2" id='resume_status_1' style="margin-left: 20px;">
                                观望
                                </div>
                                
                             
                                <div class="show-check-block2" >
                                    候选人找工作处于观望中
                                </div>

                            <?php }elseif($_smarty_tpl->getVariable('resume_info')->value->resume_info['work_status']==2){?>

                            <div class="resume-status resume-checked2" id='resume_status_1' style="margin-left: 20px;">
                                有意向
                                </div>
                             
                                <div class="show-check-block2" >
                                    候选人最近正在找工作中
                                </div>

                            <?php }elseif($_smarty_tpl->getVariable('resume_info')->value->resume_info['work_status']==3){?>

                            <div class="resume-status resume-checked2" id='resume_status_1' style="margin-left: 20px;">
                                暂无意向
                                </div>
                             
                                <div class="show-check-block2" >
                                    候选人最近不找工作
                                </div>

                            <?php }?>


                                
                    </td>
                </tr>
            </table>

            <div class="review_contact_div">

                <div class="review_contact_score_div">


                    <?php if ($_smarty_tpl->getVariable('searchScore')->value>0){?>

                            <div id="myStat2" data-dimension="250" data-text="<?php echo $_smarty_tpl->getVariable('searchScore')->value;?>
%" data-info="" data-width="30" data-fontsize="24" data-percent="<?php echo $_smarty_tpl->getVariable('searchScore')->value;?>
" data-fgcolor="#3398ff" data-bgcolor="#e1e1e1">
                                    </div>

                            <span>搜索匹配度</span>

                            <script>$('#myStat2').circliful();</script>

                    <?php }?>


                </div>

            </div>
            <div></div>
        </div>

        <!-- 简历基本信息 div row 结束-->

        <OBJECT classid="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2" height="0" id="wb" name="wb" width="0"></OBJECT>

        <!-- 简历详情 社交评价 跟踪详情 众人识才服务 tab div row 开始-->
        <div class="tab_table_div" style='border-bottom: solid 1px #e1e1e1;margin-top:-38px;'>
           <!--  <table>
                <tr>
                    <td class="tab_tag_td tab_border_bottom" res="1"style="border-left:none;">简历详情</td>
                    <td id='review_tab_tag' class="tab_tag_td" res="2">人才估值</td>
                    <td class="tab_tag_td" res="4">承诺</td>
                   
                    <td class="tab_tag_nil" style="border-right:none;"></td>
                </tr> 
            </table> -->
        </div>

        <div class="resume_detail_tab_div">

                    <!-- 亮点 div row 开始-->
        <div class="professional_skill_row_warp_div">
            <div class="resume_section_title_div">
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png"style="width: 10px;" />
                亮点
            </div>
            <div class="resume_skill_div resume_sport"></div>
        </div>
        <!-- 亮点 div row 结束-->

            <!-- tab－bar 替换内容 简历详情 -->

            <!-- 工作经历 div row 开始-->
            <div class="work_experience_row_warp_div">
                <div class="resume_section_title_div">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png"style="width: 10px;" />
                    <span>工作经历</span>
                </div>

                    <div style="border:solid 1px none;">
                        <table class="hl-position-detail-row-table" style="width: 97%;">


                        <?php if (is_array($_smarty_tpl->getVariable('work_experience_array')->value)&&count($_smarty_tpl->getVariable('work_experience_array')->value)>0){?>

                            <input type="hidden" class="work_experience_empty" value="111" /> 

                            <?php }else{ ?>

                            <input type="hidden" class="work_experience_empty" value="" /> 

                        <?php }?>

                        
                            <?php  $_smarty_tpl->tpl_vars['work_experience_arrays'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('work_experience_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['work_experience_arrays']->key => $_smarty_tpl->tpl_vars['work_experience_arrays']->value){
?>
                                <tr style="font-size: 15px;">
                                    <td style=" width: 22%;text-align: left;vertical-align: -webkit-baseline-middle;padding-left: 58px;">
                                        <div><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['begin_times'];?>
--

                                            <?php if ($_smarty_tpl->tpl_vars['work_experience_arrays']->value['not_ended']==1){?>

                                            至今

                                            <?php }else{ ?>

                                            <?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['end_times'];?>


                                            <?php }?>

                                            
                                        </div>

                                        <?php if ($_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_months']!=''){?>
                                            <div>
                                                (<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_months'];?>
)
                                            </div>
                                        <?php }?>

                                    </td>
                                    <td style="padding-left: 25px;">
                                        <div style=" height: 28px;">

                                            <?php if ($_smarty_tpl->tpl_vars['work_experience_arrays']->value['company']!=''){?>
                                                <span style="font-weight: bold;">
                                                    <?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['company'];?>

                                                </span>
                                            <?php }?>
<!--                                             <?php if ($_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_comptype']!=''){?>
                                                <span>
                                                    （<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_comptype'];?>
）
                                                </span>
                                            <?php }?> -->

                                            <?php if ($_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_title']!=''){?>
                                                <span style="margin-left: 40px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_title'];?>

                                                </span>
                                            <?php }?>

                                        </div>
                                        <div class="job_text" style="line-height:20px;white-space:pre-line;">
                                            <?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_text'];?>

                                        </div>
                                    </td>
                                </tr>
                            <?php }} ?>
                        </table>
                    </div>
                    <div style=" height:5px;"></div>
                </div>

                <!-- 工作经历 div row 结束-->

                <!-- 项目经验 div row 开始-->
                <div class="project_experience_row_warp_div">
                    <div class="resume_section_title_div">
                        <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png"style="width: 10px;" />
                        <span>项目经验</span>
                    </div>

                    <table class="hl-position-detail-row-table" style="width: 97%; margin-top: -10px;">

                       <?php if (is_array($_smarty_tpl->getVariable('project_array')->value)&&count($_smarty_tpl->getVariable('project_array')->value)>0){?>

                            <input type="hidden" class="project_experience_empty" value="111" /> 

                            <?php }else{ ?>

                            <input type="hidden" class="project_experience_empty" value="" /> 

                        <?php }?>


<!--                     <input type="hidden" class="project_experience_empty" value="<?php echo $_smarty_tpl->getVariable('project_array')->value;?>
" /> 
 -->
                        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>
                            <tr style="font-size: 15px;">
                                <td style=" width: 22%;text-align: left;vertical-align: -webkit-baseline-middle;padding-top: 10px;padding-left: 58px;">
                                    <div><?php echo $_smarty_tpl->tpl_vars['info']->value['begin_times'];?>
-- <?php if ($_smarty_tpl->tpl_vars['info']->value['not_ended']==1){?>

                                            至今

                                            <?php }else{ ?>

                                            <?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>


                                            <?php }?></div>

                                    <?php if ($_smarty_tpl->tpl_vars['info']->value['job_months']!=''){?>
                                        <div>
                                            （<?php echo $_smarty_tpl->tpl_vars['info']->value['job_months'];?>
）
                                        </div>
                                    <?php }?>
                                </td>
                                <td style="padding-left: 35px;">
                                    <div style="padding-top: 10px;">

                                        <?php if ($_smarty_tpl->tpl_vars['info']->value['project']!=''){?>
                                            <span style="display: block;white-space: nowrap;overflow: hidden; height: 30px;font-weight: bold;">
                                                项目名称: <?php echo $_smarty_tpl->tpl_vars['info']->value['project'];?>

                                            </span>
                                        <?php }?>

                                       <!--  <?php if ($_smarty_tpl->tpl_vars['info']->value['tool']!=''){?>
                                            <span style="display: block;white-space: nowrap;overflow: hidden;height: 30px;">
                                                开发工具: <?php echo $_smarty_tpl->tpl_vars['info']->value['tool'];?>

                                            </span>
                                        <?php }?> -->

  
                                       <!--  <?php if ($_smarty_tpl->tpl_vars['info']->value['software_environment']!=''){?>
                                        <span style="display:block;white-space:nowrap;overflow:hidden;height:30px;">
                                                软件环境: <?php echo $_smarty_tpl->tpl_vars['info']->value['software_environment'];?>

                                            </span>
                                        <?php }?> -->

                                     <!--    <?php if ($_smarty_tpl->tpl_vars['info']->value['hardware_environment']!=''){?>
                                        <span style="display: block;white-space: nowrap;overflow: hidden;height: 30px;">
                                                硬件环境: <?php echo $_smarty_tpl->tpl_vars['info']->value['hardware_environment'];?>

                                            </span>
                                        <?php }?> -->

                                    </div>
                                    <div style="clear: both;"></div>

                                    <?php if ($_smarty_tpl->tpl_vars['info']->value['description']!=''){?>
                                        <div class="project-describe-clear" style="white-space:pre-line; margin-top: -2px;">
                                            <!-- 项目描述:  --> 
                                            <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

                                        </div>
                                    <?php }?>


<!--                                     <?php if ($_smarty_tpl->tpl_vars['info']->value['responsibility']!=''){?>
                                        <div style=" margin-top:10px;line-height:20px;white-space:pre-line;">
                                            责任描述:  
                                            <?php echo $_smarty_tpl->tpl_vars['info']->value['responsibility'];?>

                                        </div>
                                    <?php }?> -->
                                </td>
                            </tr>
                        <?php }} ?>

                    </table>

                    <div style=" height:5px;"></div>
                </div>
                <!-- 项目经验 div row 结束-->

                <!-- 教育经历 div row 开始-->
                <div class="education_experience_row_warp_div">
                    <div class="resume_section_title_div">
                        <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="width: 10px;"/>
                        <span>教育经历</span>
                    </div>
                    <div class="workexperience_row_warp_div" style="margin-left: 56px;">

                    <?php if (is_array($_smarty_tpl->getVariable('education_array')->value)&&count($_smarty_tpl->getVariable('education_array')->value)>0){?>

                        <input type="hidden" class="education_experience_empty" value="111" /> 

                    <?php }else{ ?>

                        <input type="hidden" class="education_experience_empty" value="" /> 

                    <?php }?>

                        <table class="education_table"style="margin-left:12px;">

<!--                             <input type="hidden" class="education_experience_empty" value="<?php echo $_smarty_tpl->getVariable('education_array')->value;?>
" /> 
 -->
                         <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('education_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>

                            <tr>
                                <td style="width: 167px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['begin_times'];?>
--<?php if ($_smarty_tpl->tpl_vars['info']->value['not_ended']==1){?>

                                            至今

                                            <?php }else{ ?>

                                            <?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>


                                            <?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['info']->value['school'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['info']->value['major'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['info']->value['degree_level'];?>
</td>
                            </tr>
                            <?php }} ?>
                        </table>
                    </div>
                    <div style=" height:5px;"></div>
                </div>
                <!-- 教育经历 div row 结束-->
                            <div class="personal-kill-div">
                <!-- 个人技能 开始 -->
                <div class="resume_section_title_div" style="">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="margin-left: 10px; width: 10px;" />
                    <span>个人技能</span>
                </div>
                <div class="hl-position-detail-row-div language-empty-title" style="font-size: 14px;line-height: 30px;">语言技能</div>
                <table class="hl-position-detail-row-table language-hide">
                    <tr>
                        <td style="width: 100%;" class="language-empty-text">
                            <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_language_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>

                                <button class="hl-position-detail-tip-button" >
                                <?php echo $_smarty_tpl->tpl_vars['datas']->value['language_name'];?>

                               
                                <?php if ($_smarty_tpl->tpl_vars['datas']->value['language_degree_name']!=''){?>
                                    (<?php echo $_smarty_tpl->tpl_vars['datas']->value['language_degree_name'];?>
)
                                <?php }?>

                                </button>

                            <?php }} ?>
                        </td>
                    </tr>
                </table>
                <div style="clear:both"></div>
                <div class="hl-position-detail-row-div skill-empty-title"style="font-size: 14px;line-height: 30px;">专业技能</div>
                <table class="hl-position-detail-row-table">
                    <tr>
                        <td style="width: 100%;" class="skill-empty-text">
                            <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_info')->value->resume_skill_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>

                                <button class="hl-position-detail-tip-button">
                                <?php echo $_smarty_tpl->tpl_vars['datas']->value['name'];?>


                                <?php if ($_smarty_tpl->tpl_vars['datas']->value['month']!=''){?>
                                    (<?php echo $_smarty_tpl->tpl_vars['datas']->value['month'];?>
)
                                <?php }?>

                                </button>

                            <?php }} ?>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- 个人技能 结束 -->
            <div style="clear:both"></div>


                <!-- 证书 开始 -->
            <div class="certificates-kill-div certificate_row_warp_div" style="border-bottom: solid 1px #e1e1e1;">
                <div class="resume_section_title_div" style="">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="margin-left: 10px; width: 10px;" />
                    <span>证书</span>
                </div>

                       <?php if (is_array($_smarty_tpl->getVariable('resume_info')->value->resume_info['certificates_extract'])&&count($_smarty_tpl->getVariable('resume_info')->value->resume_info['certificates_extract'])>0){?>

                            <input type="hidden" class="certificate_empty" value="111" /> 

                            <?php }else{ ?>

                            <input type="hidden" class="certificate_empty" value="" /> 

                        <?php }?>

                <table class="hl-position-detail-row-table" style="margin-left: 56px;">
                    <tr>
                        <td style="width: 100%;" class="certificates-empty-text">
                            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_info')->value->resume_info['certificates_extract']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>

                            <button class="hl-position-detail-tip-button" >
                                <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

                            </button>

                            <?php }} ?>
                        </td>
                    </tr>
                </table>
                <div style="clear:both"></div>
            </div>
            <!--证书 结束 -->

                <!-- 底部按钮功能区 div row 开始-->

                <div class="button_function_row_div" style="">

                    <div class="resume_section_title_div resume-review">
                        <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="margin-left: 10px; width: 10px;" />
                        <span>简历评论</span>
                    </div>


                </div>
                <div class="resume-review-section">正在加载....</div>
            </div>
            <!-- 底部按钮功能区 div row -->
            <!-- tab bar 简历详情结束-->

            <!-- tab bar 社交评价 开始-->
            <div class="resume_detail_social_tab_div" ></div>
            <!-- <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/review/inviteReport.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> -->
        </div>
        <!-- tab bar 社交评价 结束-->
    </div>
    <!-- resume_detail_content_div -->


    <!-- 认证问题 -->
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/resume/reProblem.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- 投诉 -->
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/resume/feedback.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- 补全简历信息 -->
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/resume/supplementResume.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <!-- 验证信息真实性 -->
    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/resume/checkTruth.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <div class='mask_warp_div' style='display:none;'>

        <input type='hidden' name='resume_id' id='resume_id' value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
' >

    </div>


    <!-- 提示性 浮框 开始 获取事件数据-->
    <div class="position_creat">
        <div class="pop alertPop go_on in" style="display: none;">
            <div class="popmask" style="display: block;"></div>
            <div class="popwrap popsm">
                <div class="popbox">
                    <div class="popbody">
                        <p class="alert"></p>
                    </div>
                    <div class="popfooter">
                        <button id="alert_btn" class="btn btn_go_on btnDashboard" type="button">继续</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 提示性 浮框 结束 获取事件数据-->

    <!-- 提示性 浮框 开始 yesOrNo-->
    <div class="position_creat">
        <div class="pop alertPop in alert_yse_or_no" style="display: none;">
            <div class="popmask" style="display: block;"></div>
            <div class="popwrap popsm">
                <div class="popbox">
                    <div class="popbody">
                        <p class="alert">
                            提示内容
                            <br>多条提示串br</p>
                    </div>
                    <div class="popfooter">
                        <button id="" class="btn btnDashboard yseOrNo_yes" type="button">确定</button>
                        <button id="" class="btn btnDashboard yseOrNo_no" type="button">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 提示性 浮框 结束 -->


    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/checkResumeReal.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/reviewResume.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <?php if ($_smarty_tpl->getVariable('user_id')->value>0){?>

        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/slide.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <?php }?>

    <!-- 关闭 提示性 浮框 结束  写在 header 中-->

    <script type="text/javascript">

        var keyword = '<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
'

        // resumeStatus();

        resumeSpots();

        resumeScore();

        getResumeLabel();

        // getInterviewStatus();

        getResumeReviewStatus();


        $(document).ready(function () {


            if($.browser.safari) // 判断浏览器 为 safari浏览器
            {
                $(".resume-info-td-height").css('height','31px');
            }

        // 正则替换内容中的竖线
        $('.job_text').each(function(){  
                  
            var newData3 = $(this).text().trim();

          if(keyword){

                keyword_array = keyword.split(' ')

                var reg=new RegExp(keyword_array[0],"ig"); //创建正则RegExp对象 

                newData3 = newData3.replace(reg,"<span style='color:red'>"+keyword_array[0]+"</span>");   
          }

          $(this).html(newData3);   

        })

        // 去除数据中的多余回车
        // $(".project-describe-clear").each(function(){
        //   var newData1 = $(this).text().trim();
        //   $(this).text(newData1); 
        // })

        // $(".job_text").each(function(){
        //   var newData2 = $(this).text().trim();
        //   $(this).text(newData2); 
        // })

        $(".project-describe-clear").each(function(){

          var newData3 = $(this).text().trim();

          if(keyword){

                keyword_array = keyword.split(' ')

                var reg=new RegExp(keyword_array[0],"ig"); //创建正则RegExp对象 

                newData3 = newData3.replace(reg,"<span style='color:red'>"+keyword_array[0]+"</span>");   
          }

          $(this).html(newData3); 
        })


        var birth = $('#birth').text();
        if (birth.length==10) {
            birth = birth.substring(0,birth.length-3)
            $('#birth').text(birth);
        }

        // birth = birth.trim().match(/\d<?php echo 4;?>
/);
        // console.log(birth);//
        // $('#birth').text(birth);

        //判断技能 是否有值 没有则隐藏相应元素
        if($(".skill-empty-text").find("button").length ==0){
            $(this).hide();
            $(".skill-empty-title").hide();
        }
        if($(".language-empty-text").find("button").length ==0){
            $(this).hide();
            $(".language-empty-title").hide();
        }
        if ($(".language-empty-text").find("button").length ==0  && $(".skill-empty-text").find("button").length ==0) {
            $(".personal-kill-div").hide();
        }else{

            $(".hl-position-detail-row-table").removeClass('language-hide');
        }
        //判断项目经验 是否有值 没有则隐藏相应元素
        if($(".project_experience_empty").val() == ""){
            $(this).hide();
            $(".project_experience_row_warp_div").hide();
        }
        //判断工作经历 是否有值 没有则隐藏相应元素
        if($(".work_experience_empty").val() == ""){
            $(this).hide();
            $(".work_experience_row_warp_div").hide();
        }
        //判断教育经历 是否有值 没有则隐藏相应元素
        if($(".education_experience_empty").val() == ""){
            $(this).hide();
            $(".education_experience_row_warp_div").hide();
        }
        //判断证书 是否有值 没有则隐藏相应元素
        if($(".certificate_empty").val() == ""){
            $(this).hide();
            $(".certificate_row_warp_div").hide();
        }
        
            // 下拉框
            $(".selectBtn").click(function (event) {
                /* Act on the event */
                $(".select_ul").hide();
                $(this).next().show();
            });



        //设置简历公开
        $(".set-resume-open").click(function(){
            //简历打开或关闭的开关 此开关是否开启 1  开启 0 关闭
            var openResumeStatus =0;
            if (openResumeStatus ==0) {

            }else{
                 var currentStatus = $(this).text();

                if (currentStatus =="已公开") {
                    $(this).val('已保密');
                    $(this).css('color','#888');
                    $(".suo-img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/iconfont-suoguan.png');
                }else{
                    $(this).val('已公开');
                    $(this).css('color','#3398ff');
                    $(".suo-img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/iconfont-suokai.png');
                }
            }
           

            // alert(type)

            // if(type == 'upload'){

            //     $('.circle-info-half').text('完善度')

            // } else if(type == 'search'){

            //     $('.circle-info-half').text('匹配度')
            // }

        })


            // 关闭 面试邀请
            $(".button_interview").click(function (event) {
                /* Act on the event */
                $(".mask_warp_div").fadeOut();
            });

            //点击 简历详情 社交评价 跟踪详情 众人识才服务 tab 切换
            $(".tab_tag_td").click(function (event) {
                /* Act on the event */
                $(".tab_tag_td").removeClass('tab_border_bottom');

                var res = $(this).attr('res');

                if (res == "1") {
                    $(this).addClass('tab_border_bottom');

                    $(".resume_detail_social_tab_div").fadeOut()
                    $(".resume_detail_promise_tab_div").fadeOut();
                    // $(".resume_detail_follow_tab_div").fadeOut();
                    $(".resume_detail_tab_div").fadeIn();
                }
                if (res == "2") {
                    $(this).addClass('tab_border_bottom');
                    review_ajax();
                    //review_resume();
                    $(".resume_detail_tab_div").fadeOut();
                    $(".resume_detail_promise_tab_div").fadeOut();
                    // $(".resume_detail_follow_tab_div").fadeOut();
                    $(".resume_detail_social_tab_div").fadeIn();
                    $("#canvas").css('visibility', 'inherit');
                }
                if (res == "3") {
                    $(this).addClass('tab_border_bottom');
                    $(".resume_detail_tab_div").fadeOut();
                    $(".resume_detail_promise_tab_div").fadeOut();
                    $(".resume_detail_social_tab_div").fadeOut();
                    // $(".resume_detail_follow_tab_div").fadeIn();
                    trackAjax();
                }
                if (res == "4") {
                    $(this).addClass('tab_border_bottom');
                    $(".resume_detail_tab_div").fadeOut();

                    // $(".resume_detail_follow_tab_div").fadeOut();
                    $(".resume_detail_social_tab_div").fadeOut();
                    $(".resume_detail_promise_tab_div").fadeIn();
                }
            });

            $(".yseOrNo_no").click(function (event) {
                /* Act on the event */
                $(".alert_yse_or_no").fadeOut();
            });

            // 下拉框
            $(".selectBtn").click(function (event) {
                /* Act on the event */
                $(this).next(".select_ul").show();

                $(this).next(".select_ul").css('overflow','auto');
            });
            //点击空白地方 隐藏 下拉列表
            $(document).on("click", function (e) {
                if ($(e.target).parents("#selectProvince").length == 0)
                {
                    $(".select_ul").hide(200);
                }
            });

            // 关闭 提示性 浮框
            $("#alert_btn").click(function (event) {
                /* Act on the event */
                $(".show_alert").fadeOut();
            });

            //设置简历公开
            // $(".set-resume-open").click(function () {

            //     var currentStatus = $(this).text();
            //     if (currentStatus == "已公开") {
            //         $(this).text('已保密');
            //         $(this).css('color', '#888');
            //     } else {
            //         $(this).text('已公开');
            //         $(this).css('color', '#3398ff');
            //     }
            // })
            //身份验证
            $(".authentication").click(function(){
                $(".authenticationDg").fadeIn();
            })

            // 

            $(".resume-checked").hover(function(){
                $('.show-check-block').fadeIn();
            },function(){
                $('.show-check-block').fadeOut();
            })

            $(".resume-checked1").hover(function(){
                $('.show-check-block1').fadeIn();
            },function(){
                $('.show-check-block1').fadeOut();
            })

            $(".resume-checked2").hover(function(){
                $('.show-check-block2').fadeIn();
            },function(){
                $('.show-check-block2').fadeOut();
            })


        //resume_detail_tab_div
        });

        getCheckText();
        // 获取评分和评价
        function getCheckText(){

            var resume_id = $('#resume_id').val();

            $.ajax({
                url: url + 'resumeajax/getResumeCheck', // 跳转到 action
                data: {
                    resume_id: resume_id
                },
                type: 'get',
                cache: false,
                success: function (data) {

                    var dataObj_length = data.week.length;

                    $('.show-check-block').html('')

                    //var html = ''

                    if(dataObj_length > 0){

                        for(var i = 0;i<dataObj_length;i++){

                            var string = data.week[i]['name']+'已验证,信息'+data.week[i]['string']+'<br />'

                            $('.show-check-block').append(string)

                        }

                    } else{

                        $('.show-check-block').remove()

                    }


                    //$('.show-check-block').html(data)
                },
                error: function () {

                }
            });
        }

        getReviewScore();
        // 获取评分和评价
        function getReviewScore(){

            var resume_id = $('#resume_id').val();

            $.ajax({
                url: url + 'resumeajax/getResumeStart', // 跳转到 action
                data: {
                    resume_id: resume_id
                },
                type: 'get',
                cache: false,
                success: function (data) {
                    $('.review-grade').html(data)
                },
                error: function () {

                }
            });
        }

       

        function buy_resume() {

            var resume_id = $('#resume_id').val();

            if (resume_id > 0) {

                $('.loading').show()

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

                            location.reload();

                            //successBuyResume(1);

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

        }




        function getBuyResumeStatus() {

            var resume_id = $('#resume_id').val()

            if (resume_id > 0) {

                $.ajax({
                    url: url + 'resumeajax/buy_contact', // 跳转到 action
                    data: {
                        resume_id: resume_id,
                    },
                    type: 'post',
                    cache: false,
                    success: function (data) {

                        var data = data.replace(/(^\s+)|(\s+$)/g, "");

                        successBuyResume(data);


                    },
                    error: function () {

                    }
                });

            }

        }

        

        function preview(oper) {

            window.print()
        }


        function virtualCheckboxClick(obj) {


            var rel = $(obj).attr('rel')

            var relValue = $(obj).attr('value')

            var textValue = $(obj).text()

            var html = '<input type="hidden" name="' + rel + '[]" id="' + rel + '_' + relValue + '" value=' + textValue + ' />'


            /* Act on the event */
            var isChecked = $(obj).hasClass('checked');

            if (isChecked) {

                $(obj).removeClass('checked');

                $('#' + rel + '_' + relValue).remove()

            } else {
                $(obj).addClass('checked');

                $('#interview_form').append(html)

            }

        }

        // $("#interview_form .virtualCheckbox").click(function (event) {

        //     var rel = $(this).attr('rel')

        //     var relValue = $(this).attr('value')

        //     var textValue = $(this).text()

        //     var html = '<input type="hidden" name="' + rel + '[]" id="' + rel + '_' + relValue + '" value=' + textValue + ' />'


        //      Act on the event 
        //     var isChecked = $(this).hasClass('checked');

        //     if (isChecked) {

        //         $(this).removeClass('checked');

        //         $('#' + rel + '_' + relValue).remove()

        //     } else {
        //         $(this).addClass('checked');

        //         $('#interview_form').append(html)

        //     }
        // });

        function selectDictValue(obj) {

            var selectVal = $(obj).text();

            var selectRel = $(obj).attr('rel')

            var selectId = $(obj).val()

            $('#' + selectRel).val(selectId)

            $(obj).parents().prev('.selectBtn').children().text(selectVal);

            $(".select_ul").hide(200);
        }

        function resumeSpots() {

            var resume_id = $('#resume_id').val();

            $.ajax({
                url: url + 'resume/sport', // 跳转到 action
                data: {
                    resume_id: resume_id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    $('.resume_sport').html(data);

                    //判断亮点 是否有值 没有则隐藏相应元素
                    if ($(".resume_sport").find("span").length ==0) {
                        $(this).hide();
                        $(".professional_skill_row_warp_div").hide();
                    }
                },
                error: function () {

                }
            });

        }


        function resumeScore() {

            var resume_id = $('#resume_id').val();

            var position_id = $('#position_id').val();

            if (resume_id > 0 && position_id > 0) {
                $.ajax({
                    url: url + 'resume/score', // 跳转到 action
                    data: {
                        resume_id: resume_id,
                        position_id: position_id
                    },
                    type: 'post',
                    cache: false,
                    success: function (data) {

                        $('#myStat2').attr('data-text', data)

                        $('#myStat2').attr('data-percent', data)

                        $('#myStat2').circliful();
                    },
                    error: function () {

                    }
                });


            }


        }

       

        function getResumeReviewStatus() {

            var resume_id = $('#resume_id').val()

            $.ajax({
                url: url + 'resume/getUserReviewStatus', // 跳转到 action
                data: {
                    resume_id: resume_id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    data = data.replace(/(^\s*)|(\s*$)/g, '');

                    setReviewStatus(data)
                },
                error: function () {

                }
            });

        }

        function successBuyResume(status) {

            switch (parseInt(status)) {

                case 1:

                    $('.buy_span').show();

                    $('#reviewResumeButton').show();

                    //getResumePhoneAndEmail();

                    getResumeDetailLeft()

                    // $('#buyResumeButtons').html('已购买');

                    // $('#buyResumeButtons').attr('onclick', '')

                    break;



            }

        }

       
        function resumeStatus() {

            var resume_id = $('#resume_id').val();

            var resume_operation_status = '<?php echo $_smarty_tpl->getVariable('resume_operation_status')->value;?>
'

            $.ajax({
                url: url + 'resumeajax/getResumeStatus', // 跳转到 action
                data: {
                    resume_id: resume_id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var jsonObject = eval("(" + data + ")");

                    if (jsonObject['res'] == 0) {

                        switch (jsonObject['data']) {

                            case 0:

                                $('#resumeStatusButton').html('邀请激活');

                                $('#resumeStatusButton').attr('onclick', 'sendResumeNotice()');

                                $('#status_text').html(jsonObject['desc'])

                                $('#buyResumeButton').remove();

                                break;

                            case 1:

                                $('#resumeStatusButton').html('已邀请');

                                $('#resumeStatusButton').attr('onclick', '');

                                $('#status_text').html(jsonObject['desc'])

                                $('#resume_status_1').html('已邀请');

                                 $('#buyResumeButton').remove();

                                break;

                            case 2:

                                $('#resumeStatusButton').html('验证简历');

                                if (resume_operation_status == 1) {

                                    $('#resumeStatusButton').attr('onclick', '');

                                    $('#resumeStatusButton').html('已激活');

                                    $('#status_text').html(jsonObject['desc_two'])
                                } else {

                                    $('#resumeStatusButton').attr('onclick', 'checkResume()');

                                    $('#status_text').html(jsonObject['desc'])
                                }

                                $('#resume_status_1').html('已激活')

                                 $('#buyResumeButton').remove();

                                break;

                            case 3:

                                if (resume_operation_status == 1) {

                                    $('#resumeStatusButton').attr('onclick', '');

                                    $('#resumeStatusButton').html('已激活');

                                    $('#status_text').html(jsonObject['desc_two'])

                                    $('#resume_status_1').html('已激活')

                                } else {

                                    $('#resumeStatusButton').html('已提交');

                                    $('#resumeStatusButton').attr('onclick', '');

                                    $('#status_text').html(jsonObject['desc'])

                                    $('#resume_status_2').html('已提交')
                                }

                                 $('#buyResumeButton').remove();

                                break;

                            case 4:

                                $('#resumeStatusButton').html('已验证');

                                $('#resumeStatusButton').attr('onclick', '');

                                $('#status_text').html(jsonObject['desc'])

                                $('#resume_status_2').html('已验证')

                                 $('#buyResumeButton').remove();

                                break;

                            case 5:

                                // $('#resumeStatusButton').html('购买简历');

                                // $('#resumeStatusButton').attr('onclick', 'buy_resume()');

                                $('#buyResumeButton').show();

                                $('.review_contact_score_div').show();

                                //$('#status_text').html(jsonObject['desc'])

                                break;

                        }

                    }

                },
                error: function () {

                }
            });
        }

        function checkResume() {


            $('.alert-review-resume').show();


        }

        function sendResumeNotice() {

            var resume_id = $('#resume_id').val();

            setErrorTip('邀请成功');

            $.ajax({
                url: url + 'resumeajax/sendResumeStatusNotice', // 跳转到 action
                data: {
                    resume_id: resume_id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var jsonObject = eval("(" + data + ")");

                    if (jsonObject['res'] == '1') {

                        resumeStatus();

                    } else {

                        setErrorTip(jsonObject['data']);

                        resumeStatus();
                    }

                },
                error: function () {

                }
            });


        }

        function reviewResume() {

            $('.reviewResumeDg').show();

        }

        function getResumeLabel() {

            var resume_id = $('#resume_id').val();

            $.ajax({
                url: url + 'resumeajax/getResumeLabel', // 跳转到 action
                data: {
                    resume_id: resume_id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    $('.resume-review-section').html(data)
                },
                error: function () {

                }
            });


        }

        function setResumeOpen(value) {

            var resume_id = $('#resume_id').val();

            $.ajax({
                url: url + 'resumeajax/setResumeOpen', // 跳转到 action
                data: {
                    resume_id: resume_id,
                    setValue: value,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    if (value == 0) {

                        setValue = 1

                    } else {

                        setValue = 0
                    }

                    $('.set-resume-open').attr('onclick', 'setResumeOpen(' + setValue + ')')

                },
                error: function () {

                }
            });

        }


        function getResumePhoneAndEmail(){

            var resume_id = $('#resume_id').val();

            $.ajax({
                url: url + 'resumeajax/getResumePhoneAndEmail', // 跳转到 action
                data: {
                    resume_id: resume_id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var jsonObject = eval("(" + data + ")");

                    if (jsonObject['email']) {

                        $('#email').html('邮箱: '+jsonObject['email'])
                    
                    }


                    if (jsonObject['phone']) {

                        $('#phone').html('手机号: '+jsonObject['phone'])
                    
                    }

                    if (jsonObject['name']) {

                        $('#name').html(jsonObject['name'])
                    
                    }
                },
                error: function () {

                }
            });

        }


        function getResumeReviewStatus(){

            var resume_id = $("#resume_id").val();

            $.ajax({
                url: url + 'resumeajax/getResumeReviewStatus', // 跳转到 action
                data: {
                    resume_id: resume_id,
                },
                type: 'post',
                cache: false,
                success: function (data) {

                    var jsonObject = eval("(" + data + ")");

                    if (jsonObject['res'] == 1) {

                        if(jsonObject['data'] == 1){

                            $('#collectButton').html('已评价')

                            $('#collectButton').attr('onclick','')

                        } else{

                            $('#collectButton').html('添加评价')

                            $('#collectButton').attr('onclick','reviewResume()')

                        }
                        
                    }
                },
                error: function () {

                }
            });
        }

        // 身份验证
        function authenticationClick() {
            $(".authenticationDg").show();
        }

        // 验证问题
        function reProblemClick() {
            $(".reProblemDg").show();
        }

        // 投诉
        function feedbackClick() {
            $(".feedbackDg").show();
        }
        
        // 补全简历信息
        function supplementResumeClick() {
            $(".supplementResumeDg").show();
        }

        // 验证 简历 真实性
        function checkTruthClick() {
            $(".checkTruthDg").show();
        }


    </script>
