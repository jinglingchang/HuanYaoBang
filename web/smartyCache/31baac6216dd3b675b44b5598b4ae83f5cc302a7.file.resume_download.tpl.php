<?php /* Smarty version Smarty-3.0-RC2, created on 2016-07-01 14:33:06
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174049719957760ea2c15406-51178046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31baac6216dd3b675b44b5598b4ae83f5cc302a7' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_download.tpl',
      1 => 1467354785,
    ),
  ),
  'nocache_hash' => '174049719957760ea2c15406-51178046',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<style type="text/css">
.hl-position-detail-row-table tr td {
    height: 40px;
    width: 170px;
    text-align: left;
    font-size: 14px;
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

.circle-text,
.circle-info,
.circle-text-half,
.circle-info-half {
    width: 52%;
    position: absolute;
    text-align: center;
    display: inline-block;
}

.resume_detail_baseinfo_table tr td {
    border: solid 1px none;
}

.education_experience_row_warp_div {
    border-bottom: solid 1px #ccc;
    width: 98%;
    margin: 0 auto;
}

.resume_section_title_div span {
    font-size: 16px;
}

.resume_section_title_div img {
    margin-right: 10px;
    /*margin-top: 20px;*/
}

#myStat2 canvas {
    margin-left: 45px;
}

.education_table {
    width: 65%;
}

.education_table tr td {
    font-size: 14px;
    text-align: left;
}

.show-check-block {
    position: absolute;
    margin-left: 120px;
    width: 260px;
    background: rgb(145, 187, 255);
    color: #fff;
    padding: 5px;
    margin-top: 30px;
    display: none;
}

.show-check-block1 {
    position: absolute;
    margin-top: 31px;
    width: 260px;
    background: rgb(145, 187, 255);
    color: #fff;
    padding: 5px;
    display: none;
}

.show-check-block2 {
    position: absolute;
    margin-top: 31px;
    width: 260px;
    background: rgb(145, 187, 255);
    color: #fff;
    padding: 5px;
    display: none;
    margin-left: 240px;
}

.language-hide {
    display: none;
}

.resume_detail_baseinfo_table {
    height: 165px;
}

.resume_detail_baseinfo_table tr td {
    border: solid 1px none;
}

.resume-info-td-height {
    height: 21px;

}
</style>
<script type="text/javascript">
$(function() {


})
</script>
<div class="resume_detail_warp_div" style="margin-top:15px;width: 1000px;">
    <!-- 简历基本信息 div row 开始-->
    <div class="resume_detail_content_div" style="background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/shuiyin.png');">
        <div style="margin-top: 5px;text-align: right;color: #888;padding-right: 20px;
             font-size: 12px;border-bottom: solid 1px #e1e1e1;height: 40px;line-height: 40px;">
            <span><?php echo $_smarty_tpl->getVariable('resume_info')->value->upload_time;?>
&nbsp;&nbsp;由<?php echo $_smarty_tpl->getVariable('resume_info')->value->upload_name;?>
上传</span>
        </div>
        <div class="resume_detail_baseinfo_row_div">
            <table class="resume_detail_baseinfo_table" style='text-align:left;'>
                <tr>
                    <td rowspan="5" style="width: 0.1%;">
                        <div class="photo_img_div">
                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_photo!=''){?>
                            <img src="<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_photo;?>
" style="width: 123px;height: 153px;" /> <?php }else{ ?> <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['sex']=='男'){?>
                            <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png" /> <?php }elseif($_smarty_tpl->getVariable('resume_info')->value->resume_info['sex']=='女'){?>
                            <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_2.png" /> <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png" /> <?php }?> <?php }?>
                        </div>
                    </td>
                    <td class="resume-info-td-height" style='height: 31px;'>
                        <div>
                            <samp id='name'><?php echo $_smarty_tpl->getVariable('resume_info')->value->name;?>
</samp>
                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['sex']!=''){?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['sex'];?>
 <?php }?> <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['birth']!=''){?> &nbsp;&nbsp;&nbsp;&nbsp;
                            <samp id='birth'><?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['birth'];?>
</samp>&nbsp;（<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['age'];?>
岁） <?php }?> <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['marriage']!=''){?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['marriage'];?>
 <?php }?> <?php if ($_smarty_tpl->getVariable('resume_info')->value->education!=''){?> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->getVariable('resume_info')->value->education;?>
 <?php }?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="resume-info-td-height" style='height: 31px;'>
                        <div style="white-space: nowrap;">
                            <samp style="float: left;">
                                <?php if ($_smarty_tpl->getVariable('resume_info')->value->workexperience!=''){?> <?php echo $_smarty_tpl->getVariable('resume_info')->value->workexperience;?>
 <?php }?> <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['city']!=''){?> &nbsp;&nbsp;&nbsp;&nbsp; 现居：<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['city'];?>
 <?php }?> <?php if ($_smarty_tpl->getVariable('resume_info')->value->salary!=''){?> &nbsp;&nbsp;&nbsp;&nbsp; 预估薪资：<?php echo $_smarty_tpl->getVariable('resume_info')->value->salary;?>
 <?php }else{ ?> &nbsp;&nbsp;&nbsp;&nbsp; 预估薪资：保密 <?php }?>
                            </samp>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <samp class="review-grade" style="position:absolute;">
                            </samp>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id='phone' class="resume-info-td-height" style='height: 31px;'>
                        <div>
                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->phone!=''){?> 手机号：<?php echo $_smarty_tpl->getVariable('resume_info')->value->phone;?>
 <?php }?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id='email' class="resume-info-td-height" style='height: 31px;'>
                        <div>
                            <?php if ($_smarty_tpl->getVariable('resume_info')->value->email!=''){?> 邮箱：<?php echo $_smarty_tpl->getVariable('resume_info')->value->email;?>
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
                        <div class="show-check-block1">
                            手机号码真实，求职意向已验证
                        </div>
                        <?php }else{ ?>
                        <div class="resume-status resume-status-not">
                            未激活
                        </div>
                        <?php }?> <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_auth==1){?>
                        <div class="resume-status resume-checked" style="margin-left: 50px;" id='resume_status_2'>
                            已验证
                        </div>
                        <div class="show-check-block">
                            sdasda
                        </div>
                        <?php }else{ ?>
                        <div class="resume-status resume-status-not" style="margin-left: 50px;" id='resume_status_2'>
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
                </div>
            </div>
            <div></div>
        </div>
        <!-- 简历基本信息 div row 结束-->
        <OBJECT classid="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2" height="0" id="wb" name="wb" width="0"></OBJECT>
        <!-- 简历详情 社交评价 跟踪详情 众人识才服务 tab div row 开始-->
        <div class="tab_table_div" style='border-bottom: solid 1px #e1e1e1;margin-top:-38px;'>
        </div>
        <div class="resume_detail_tab_div">
            <!-- 亮点 div row 开始-->
            <?php if (count($_smarty_tpl->getVariable('skill')->value)>0){?>
            <div class="professional_skill_row_warp_div">
                <div class="resume_section_title_div">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="width: 10px;" /> 亮点
                </div>
                <div class="resume_skill_div resume_sport">
                    <?php  $_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('skills')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['skill']->key => $_smarty_tpl->tpl_vars['skill']->value){
?>
                    <span class="live"><?php echo $_smarty_tpl->tpl_vars['skill']->value;?>
</span> <?php }} ?>
                </div>
            </div>
            <?php }?>
            <!-- 亮点 div row 结束-->
            <!-- tab－bar 替换内容 简历详情 -->
            <!-- 工作经历 div row 开始-->
            <?php if (count($_smarty_tpl->getVariable('work_experience_array')->value)>0){?>
            <div class="work_experience_row_warp_div">
                <div class="resume_section_title_div">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="width: 10px;" />
                    <span>工作经历</span>
                </div>
                <div style="border:solid 1px none;">
                    <table class="hl-position-detail-row-table" style="width: 97%;">
                        <?php  $_smarty_tpl->tpl_vars['work_experience_arrays'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('work_experience_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['work_experience_arrays']->key => $_smarty_tpl->tpl_vars['work_experience_arrays']->value){
?>
                        <tr style="font-size: 15px;">
                            <td style=" width: 22%;text-align: left;vertical-align: -webkit-baseline-middle;padding-left: 58px;">
                                <div><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['begin_times'];?>
--<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['end_times'];?>

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

                                                        </span> <?php }?> <?php if ($_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_title']!=''){?>
                                    <span style="margin-left: 40px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_title'];?>

                                                            </span> <?php }?>
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
            <?php }?>
            <!-- 工作经历 div row 结束-->
            <!-- 项目经验 div row 开始-->
            <?php if (count($_smarty_tpl->getVariable('project_array')->value)>0){?>
            <div class="project_experience_row_warp_div">
                <div class="resume_section_title_div">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="width: 10px;" />
                    <span>项目经验</span>
                </div>
                <table class="hl-position-detail-row-table" style="width: 97%; margin-top: -10px;">
                    <?php if (is_array($_smarty_tpl->getVariable('project_array')->value)&&count($_smarty_tpl->getVariable('project_array')->value)>0){?>
                    <input type="hidden" class="project_experience_empty" value="111" /> <?php }else{ ?>
                    <input type="hidden" class="project_experience_empty" value="" /> <?php }?> <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>
                    <tr style="font-size: 15px;">
                        <td style=" width: 22%;text-align: left;vertical-align: -webkit-baseline-middle;padding-top: 10px;padding-left: 58px;">
                            <div><?php echo $_smarty_tpl->tpl_vars['info']->value['begin_times'];?>
--<?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>
</div>
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

                                                                </span> <?php }?>
                            </div>
                            <div style="clear: both;"></div>
                            <?php if ($_smarty_tpl->tpl_vars['info']->value['description']!=''){?>
                            <div class="project-describe-clear" style="white-space:pre-line; margin-top: -2px;">
                                <!-- 项目描述:  -->
                                <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

                            </div>
                            <?php }?>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
                <div style=" height:5px;"></div>
            </div>
            <!-- 项目经验 div row 结束-->
            <?php }?>
            <!-- 教育经历 div row 开始-->
            <?php if (count($_smarty_tpl->getVariable('education_array')->value)>0){?>
            <div class="education_experience_row_warp_div">
                <div class="resume_section_title_div">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="width: 10px;" />
                    <span>教育经历</span>
                </div>
                <div class="workexperience_row_warp_div" style="margin-left: 56px;">
                    <?php if (is_array($_smarty_tpl->getVariable('education_array')->value)&&count($_smarty_tpl->getVariable('education_array')->value)>0){?>
                    <input type="hidden" class="education_experience_empty" value="111" /> <?php }else{ ?>
                    <input type="hidden" class="education_experience_empty" value="" /> <?php }?>
                    <table class="education_table" style="margin-left:12px;">
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
--<?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>
</td>
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
            <?php }?> <?php if (count($_smarty_tpl->getVariable('resume_language_info')->value)>0||count($_smarty_tpl->getVariable('resume_info')->value->resume_skill_list)>0){?>
            <!-- 教育经历 div row 结束-->
            <div class="personal-kill-div">
                <!-- 个人技能 开始 -->
                <div class="resume_section_title_div" style="">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="margin-left: 10px; width: 10px;" />
                    <span>个人技能</span>
                </div>
                <?php if (count($_smarty_tpl->getVariable('resume_language_info')->value)>0){?>
                <div class="hl-position-detail-row-div language-empty-title" style="font-size: 14px;line-height: 30px;">语言技能</div>
                <table class="hl-position-detail-row-table">
                    <tr>
                        <td style="width: 100%;" class="language-empty-text">
                            <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_language_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
                            <button class="hl-position-detail-tip-button">
                                <?php echo $_smarty_tpl->tpl_vars['datas']->value['language_name'];?>
 <?php if ($_smarty_tpl->tpl_vars['datas']->value['language_degree_name']!=''){?> (<?php echo $_smarty_tpl->tpl_vars['datas']->value['language_degree_name'];?>
) <?php }?>
                            </button>
                            <?php }} ?>
                        </td>
                    </tr>
                </table>
                <?php }?>
                <div style="clear:both"></div>
                <?php if (count($_smarty_tpl->getVariable('resume_info')->value->resume_skill_list)>0){?>
                <div class="hl-position-detail-row-div skill-empty-title" style="font-size: 14px;line-height: 30px;">专业技能</div>
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
 <?php if ($_smarty_tpl->tpl_vars['datas']->value['month']!=''){?> (<?php echo $_smarty_tpl->tpl_vars['datas']->value['month'];?>
) <?php }?>
                            </button>
                            <?php }} ?>
                        </td>
                    </tr>
                </table>
                <?php }?>
            </div>
            <?php }?>
            <!-- 个人技能 结束 -->
            <div style="clear:both"></div>
            <?php if (count($_smarty_tpl->getVariable('resume_info')->value->resume_info['certificates_extract'])>0){?>
            <!-- 证书 开始 -->
            <div class="certificates-kill-div certificate_row_warp_div" style="border-bottom: solid 1px #e1e1e1;">
                <div class="resume_section_title_div" style="">
                    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/resume/2.png" style="margin-left: 10px; width: 10px;" />
                    <span>证书</span>
                </div>
                <?php if (is_array($_smarty_tpl->getVariable('resume_info')->value->resume_info['certificates_extract'])&&count($_smarty_tpl->getVariable('resume_info')->value->resume_info['certificates_extract'])>0){?>
                <input type="hidden" class="certificate_empty" value="111" /> <?php }else{ ?>
                <input type="hidden" class="certificate_empty" value="" /> <?php }?>
                <table class="hl-position-detail-row-table" style="margin-left: 56px;">
                    <tr>
                        <td style="width: 100%;" class="certificates-empty-text">
                            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_info')->value->resume_info['certificates_extract']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
                            <button class="hl-position-detail-tip-button">
                                <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

                            </button>
                            <?php }} ?>
                        </td>
                    </tr>
                </table>
                <div style="clear:both"></div>
            </div>
            <?php }?>
            <!--证书 结束 -->
            <!-- 底部按钮功能区 div row 开始-->
            <div class="button_function_row_div" style="height: 30px;">
            </div>
            <div class="resume-review-section">
                <style type="text/css">
                .review-table {
                    border: none;
                }
                
                .review-table tr td {
                    padding: 0px;
                    font-size: 14px;
                }
                </style>
                <?php if ($_smarty_tpl->getVariable('label_data')->value!=null){?>
                <table class="review-table">
                    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('label_data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
                    <tr>
                        <td style="width: 13%;vertical-align: sub; padding-left: 20px;padding-top: 10px;">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value['nickname'];?>

                        </td>
                        <td style="width: 72%; padding-left: 15px;line-height: 22px;text-align: left;">
                            <div style="height: 35px;padding-top: 10px;">
                                <span>
                                                                                            <?php echo $_smarty_tpl->tpl_vars['data']->value['create_time'];?>

                                                                                        </span>
                                <span>
                                                                                            <img style="margin-left: 5px; width: 110px;" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/star/star<?php echo $_smarty_tpl->tpl_vars['data']->value['new_start'];?>
.png" />
                                                                                        </span>
                            </div>
                            <div style="height: 35px;">
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['label_content'];?>

                            </div>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
                <?php }else{ ?> 暂无点评信息 <?php }?>
            </div>
        </div>
    </div>
</div>

<script>

        $(".project-describe-clear").each(function(){
          var newData1 = $(this).text().trim();
          $(this).text(newData1); 
        })

        $(".job_text").each(function(){
          var newData2 = $(this).text().trim();
          $(this).text(newData2); 
        })
</script>