<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-14 13:59:44
         compiled from "/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/resume_preview_wap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9812452175736bed0e53f10-34249215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516e0a39cf0ab27f631a882b875afde9cf299fc7' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/UploadResume/Tpl/UploadResume/resume_preview_wap.tpl',
      1 => 1463205582,
    ),
  ),
  'nocache_hash' => '9812452175736bed0e53f10-34249215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <!--  <link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/style.css" rel="stylesheet/css" />
        -->
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/upload_public.js"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/upload_resume.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/resume.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/resume_preview.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/mobie_web.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/loading.css"> 

    </head>
    <title>简历预览</title>
<body>
    <div class="loading"><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_loading.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></div>

        <input type='hidden' name='baseinfo_resume_id' id='baseinfo_resume_id' value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

        <div class="hl-warp_div">
            <div class="hl-resume-update">
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/preview.png" class="hl-edit-resume-img" rel='0' />
            </div>

            <table class="hl-cut-table">
                <tr>
                    <td class="hl-div-td">
                        <div class="hl-line-td"></div>
                    </td>
                    <td>
                        <div class="hl-center-div-td">

                             <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_photo!=''){?>
                                <img src="<?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_photo;?>
"style="width: 100px;height: 100px; border-radius: 50%;" />
                            <?php }else{ ?>

                                <?php if ($_smarty_tpl->getVariable('resume_info')->value->dict_sex_id==1){?>
                                    <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png"/ style="width: 100px;height: 100px; border-radius: 50%;" >
                                <?php }elseif($_smarty_tpl->getVariable('resume_info')->value->dict_sex_id==2){?>
                                    <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png" /style="width: 100px;height: 100px; border-radius: 50%;" >
                                <?php }else{ ?>
                                    <img src="<?php echo $_smarty_tpl->getVariable('domain_url')->value;?>
/img/default/employer_1.png" /style="width: 100px;height: 100px; border-radius: 50%;" >
                                <?php }?>

                            <?php }?>

                            </div>
                        </td>
                        <td class="hl-div-td2">
                            <div class="hl-line-td"></div>
                        </td>
                        <td class="hl-button-td">
                            <a rel='add' art='6' class="add-section">添加</a>
                        </td>
                    </tr>
                </table>
                <div class="edit-base-info">
                    <div class="hl-row-div" style="font-weight: bold; font-size: 1.2em"><?php echo $_smarty_tpl->getVariable('resume_info')->value->name;?>
</div>
                    <div class="hl-row-div" style="width: 100%; height: auto;">
                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->sex!=''){?>

                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->sex;?>
 | 

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->resume_info['birth']!=''){?>

                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['birth'];?>
 | 

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->workexperience!=''){?>

                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->workexperience;?>
 | 

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->workplace!=''){?>

                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->workplace;?>
 | 

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('resume_info')->value->salary!=''){?>

                            <?php echo $_smarty_tpl->getVariable('resume_info')->value->salary;?>
| 

                        <?php }?>

                        <?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['marriage'];?>

                    </div>
                    <div class="hl-row-div phone-number"><?php echo $_smarty_tpl->getVariable('resume_info')->value->phone;?>
</div>
                    <div class="hl-row-div email-info"><?php echo $_smarty_tpl->getVariable('resume_info')->value->email;?>
</div>
                </div>
                <div class="show-base-info-warp"></div>

                <table class="hl-cut-table">
                    <tr>
                        <td class="hl-div-td">
                            <div class="hl-line-td"></div>
                        </td>
                        <td>
                            <div class="hl-center-text-div-td">专业技能</div>
                        </td>
                        <td class="hl-div-td2">
                            <div class="hl-line-td"></div>
                        </td>
                        <td class="hl-button-td">
                            <!-- <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resume/ajaxSkill?user_id=<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
">编辑</a>
                            -->
                            <a rel='add' art='1' class="add-section">添加</a>
                        </td>
                    </tr>
                </table>
                <div class="add-major-skill" style="display:block">
                    <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_info')->value->resume_skill_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
                        <button class="hl-skill-item" onclick='deleteSkill("<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
")'><?php echo $_smarty_tpl->tpl_vars['datas']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['datas']->value['month'];?>
)</button>
                    <?php }} ?>
                </div>

                <div class="show-major-skill-warp"></div>

                <table class="hl-cut-table">
                    <tr>
                        <td class="hl-div-td">
                            <div class="hl-line-td"></div>
                        </td>
                        <td>
                            <div class="hl-center-text-div-td">语言技能</div>
                        </td>
                        <td class="hl-div-td2">
                            <div class="hl-line-td"></div>
                        </td>
                        <td class="hl-button-td">
                            <!-- <a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resume/addLanguage?user_id=<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
">编辑</a>
                            -->
                            <a rel='add' art='2' class="add-section">添加</a>
                        </td>
                    </tr>
                </table>
                <div class="add-language-skill">
                    <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_language_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
                        <button class="hl-skill-item" onclick='deleteLanguage("<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
")'><?php echo $_smarty_tpl->tpl_vars['datas']->value['language_name'];?>
(<?php echo $_smarty_tpl->tpl_vars['datas']->value['language_degree_name'];?>
)</button>
                    <?php }} ?>
                </div>
                <div class="show-language-skill-warp"></div>

                <table class="hl-cut-table">
                    <tr>
                        <td class="hl-div-td">
                            <div class="hl-line-td"></div>
                        </td>
                        <td>
                            <div class="hl-center-text-div-td">工作经历</div>
                        </td>
                        <td class="hl-div-td2">
                            <div class="hl-line-td"></div>
                        </td>
                        <td class="hl-button-td">
                            <a rel='add' art='3' class="add-section">添加</a>
                        </td>
                    </tr>
                </table>
                <div class="add-work-experience">
                    <?php  $_smarty_tpl->tpl_vars['work_experience_arrays'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('work_experience_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['work_experience_arrays']->key => $_smarty_tpl->tpl_vars['work_experience_arrays']->value){
?>
                        <div id='work_<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['id'];?>
'>
                            <div class="hl-time-edit-row-div">
                                <span><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['begin_times'];?>
至<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['end_times'];?>
(<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_months'];?>
个月)</span>
                                <span style="float: right; ">
                                    <a href="javascript:void(0)" onclick='resume.getWorkHtml("<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['id'];?>
");
                                            updateFont("<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['id'];?>
", this)' style="font-size: 1em;" rel='0' class="edit-resume-work">编辑</a>
                                </span>
                            </div>
                            <div class="hl-row-left-div">
                                <span><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['company'];?>
</span>
                            </div>
                         <!--    <div class="hl-row-left-div">
                                <span>公司类型</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_comptype'];?>
</span>
                            </div> -->

                            <div class="hl-row-left-div">
                                <span>职位</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_title'];?>
</span>
                            </div>

                            <div class="hl-row-left-div">
                                <span>描述</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_text'];?>
</span>
                            </div>
                           <!--  <div class="hl-row-left-div">
                                <span>离职原因</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->getVariable('datas')->value['reason_leave'];?>
</span>
                            </div> -->
                        </div>
                    <?php }} ?>
                </div>
                <div class="show-work-experience-warp"></div>

                <table class="hl-cut-table">
                    <tr>
                        <td class="hl-div-td">
                            <div class="hl-line-td"></div>
                        </td>
                        <td>
                            <div class="hl-center-text-div-td">项目经验</div>
                        </td>
                        <td class="hl-div-td2">
                            <div class="hl-line-td"></div>
                        </td>
                        <td class="hl-button-td">
                            <a rel='add' art='4' class="add-section">添加</a>
                        </td>
                    </tr>
                </table>

                <div class="add-project-experience">
                     <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>
                        <div id='project_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
'>

                            <div class="hl-time-edit-row-div">
                                <span><?php echo $_smarty_tpl->tpl_vars['info']->value['begin_times'];?>
至<?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>
</span>
                                <span style="float: right;">
                                    <a href="javascript:void(0)" onclick='resume.getProjectHtml("<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
");
                                            updateFont("<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
", this)' class="edit-resume-project" rel='0' style="font-size:1em;">编辑</a>
                                </span>
                            </div>
                            <div class="hl-row-left-div">
                                <span>项目名称</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['info']->value['project'];?>
</span>
                            </div>
                            <!-- <div class="hl-row-left-div">
                                <span>开发工具</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['info']->value['tool'];?>
</span>
                            </div>
                            <div class="hl-row-left-div">
                                <span>软件环境</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['info']->value['software_environment'];?>
</span>
                            </div> -->

                            <div class="hl-row-left-div">
                                <span>项目描述</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</span>
                            </div>
                           <!--  <div class="hl-row-left-div">
                                <span>责任描述</span>
                                <span class="hl-content-span"><?php echo $_smarty_tpl->tpl_vars['info']->value['responsibility'];?>
</span>
                            </div> -->
                        </div>
                    <?php }} ?>
                </div>
                <div class="show-project-experience-warp"></div>

                <table class="hl-cut-table">
                    <tr>
                        <td class="hl-div-td">
                            <div class="hl-line-td"></div>
                        </td>
                        <td>
                            <div class="hl-center-text-div-td">教育背景</div>
                        </td>
                        <td class="hl-div-td2">
                            <div class="hl-line-td"></div>
                        </td>
                        <td class="hl-button-td">
                            <a rel='add' art='5' class="add-section">添加</a>
                        </td>
                    </tr>
                </table>
                <div class="add-education-experience">
                    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('education_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
?>
                        <div id='education_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
'>

                            <span style="float: right;padding-right: 2%;">
                                <a href="javascript:void(0)" onclick='resume.getEducationHtml("<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
");
                                        updateFont("<?php echo $_smarty_tpl->getVariable('datas')->value['id'];?>
", this)'>
                                    <span style="font-size:1em;" class="edit-education-item" rel='0'>编辑</span>
                                </a>
                            </span>
                            <table class="hl-education-table">
                                <tr>
                                    <td ><?php echo $_smarty_tpl->tpl_vars['info']->value['begin_times'];?>
至<?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['info']->value['school'];?>
</td>
                                </tr>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['info']->value['degree_level'];?>
<!-- (<?php echo $_smarty_tpl->getVariable('datas')->value['admission_type'];?>
) --></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['info']->value['major'];?>
</td>
                                </tr>
                            </table>

                        </div>
                    <?php }} ?>
                </div>
                <div class="show-education-experience-warp"></div>

                <button class="hl-save-button" onclick='saveResume()'>提交保存</button>

                <div style="height: 3em;"></div>
            </div>

            <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/mobie_web.css"> 

            <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.min.js"></script>
            <script type="text/javascript">


                    $(function () {

                        // 添加模块 开始
                        $(".add-section").click(function () {
                            //  art 判断 点击添加项  1 专业技能 2 语言技能 3 工作经历 4 项目经验 5 教育经历
                            var art = $(this).attr('art');
                            // rel 判断 点击状态 (添加 取消) value: add cancel
                            var aStatus = $(this).attr('rel');

                            switch (parseInt(art))
                            {
                                case 1:
                                    {

                                        if (aStatus == "add") {

                                            var resumeVal = resume.getResumeInfo();

                                            if (resumeVal == 1) {

                                                $(this).attr("rel", "cancel");

                                                $(this).text('取消');

                                                $(".add-major-skill").hide();

                                                resume.getSkillHtml(0)
                                            }

                                        }
                                        if (aStatus == "cancel") {
                                            $(this).attr("rel", "add");
                                            $(this).text('添加');


                                            $(".add-major-skill").fadeIn();
                                            $(".show-major-skill-warp").hide();
                                        }

                                    }
                                    break;
                                case 2:
                                    {
                                        if (aStatus == "add") {


                                            var resumeVal = resume.getResumeInfo();

                                            if (resumeVal == 1) {

                                                $(this).attr("rel", "cancel");
                                                $(this).text('取消');

                                                $(".add-language-skill").hide();

                                                resume.getLanguageHtml(0)

                                            }

                                        }
                                        if (aStatus == "cancel") {
                                            $(this).attr("rel", "add");
                                            $(this).text('添加');

                                            $(".add-language-skill").fadeIn();
                                            $(".show-language-skill-warp").hide();
                                        }

                                    }
                                    break;
                                case 3:
                                    {
                                        if (aStatus == "add") {

                                            var resumeVal = resume.getResumeInfo();

                                            if (resumeVal == 1) {

                                                $(this).attr("rel", "cancel");

                                                $(this).text('取消');

                                                $(".add-work-experience").hide();

                                                resume.getWorkHtml(0);

                                            }

                                        }
                                        if (aStatus == "cancel") {
                                            $(this).attr("rel", "add");
                                            $(this).text('添加');

                                            $(".add-work-experience").fadeIn();
                                            $(".show-work-experience-warp").hide();
                                        }
                                    }
                                    break;
                                case 4:
                                    {
                                        if (aStatus == "add") {

                                             var resumeVal = resume.getResumeInfo();

                                            if (resumeVal == 1) {

                                                $(this).attr("rel", "cancel");
                                                $(this).text('取消');

                                                $(".add-project-experience").hide();

                                                resume.getProjectHtml(0);
                                            }
                                        }
                                        if (aStatus == "cancel") {
                                            $(this).attr("rel", "add");
                                            $(this).text('添加');

                                            $(".add-project-experience").fadeIn();
                                            $(".show-project-experience-warp").hide();
                                        }
                                    }
                                    break;
                                case 5:
                                    {
                                        if (aStatus == "add") {

                                             var resumeVal = resume.getResumeInfo();

                                            if (resumeVal == 1) {

                                                $(this).attr("rel", "cancel");
                                                $(this).text('取消');

                                                $(".add-education-experience").hide();
                                                resume.getEducationHtml(0);

                                            }
                                           
                                        }
                                        if (aStatus == "cancel") {
                                            $(this).attr("rel", "add");
                                            $(this).text('添加');

                                            $(".add-education-experience").fadeIn();

                                        }
                                    }
                                    break;
                                case 6:
                                    {
                                        if (aStatus == "add") {



                                            $(this).attr("rel", "cancel");

                                            $(this).text('取消');

                                            $(".edit-base-info").hide();

                                            resume.getUserInfoHtml();


                                        }
                                        if (aStatus == "cancel") {
                                            $(this).attr("rel", "add");
                                            $(this).text('添加');

                                            $(".edit-base-info").fadeIn();
                                            $(".show-base-info-warp").hide();
                                        }
                                    }
                                    break;

                                default:
                            }

                        })// 添加模块 结束

                        phoneNumber = $(".phone-number").text();
                        emailInfo = $(".email-info").text();

                        $(".hl-edit-resume-img").click(function () {

                            var rel = $(this).attr('rel'); // 0 编辑 1 预览

                            if (rel == '1') {
                                $(this).attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/preview.png');
                                $(this).attr('rel', '0');
                                $(".hl-button-td a").css('visibility', 'inherit');
                                $(".edit-resume-work").css('visibility', 'inherit');
                                $(".edit-resume-project").css('visibility', 'inherit');
                                $(".edit-education-item").css('visibility', 'inherit');

                                $(".phone-number").text(phoneNumber);
                                $(".email-info").text(emailInfo);
                            }
                            if (rel == '0') {

                                var phoneNumberPwd = phoneNumber.substring(0, 3) + "****" + phoneNumber.substring(8, 11);
                                var emailInfoPwd = emailInfo.replace(emailInfo.substring(4, emailInfo.lastIndexOf("@")), "*****");

                                $(this).attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/edit.png');
                                $(this).attr('rel', '1');
                                $(".hl-button-td a").css('visibility', 'hidden');
                                $(".edit-resume-work").css('visibility', 'hidden');
                                $(".edit-resume-project").css('visibility', 'hidden');
                                $(".edit-education-item").css('visibility', 'hidden');

                                if (phoneNumberPwd.length > 9) {
                                    $(".phone-number").text(phoneNumberPwd);
                                }
                                if (emailInfoPwd.length > 6) {
                                    $(".email-info").text(emailInfoPwd);
                                }
                            }
                        })

                        // 编辑项目经历
                        $(".edit-resume-project").click(function () {

                            var rel = $(this).attr('rel'); // 0 编辑 1 取消
                            if (rel == '0') {
                                $(this).text('取消');
                                $(this).attr('rel', '1');
                            }
                            if (rel == '1') {
                                $(this).text('编辑');
                                $(this).attr('rel', '0');
                                location.reload();
                            }
                        })
                        // 编辑工作经历
                        $(".edit-resume-work").click(function () {
                            var rel = $(this).attr('rel'); // 0 编辑 1 取消
                            if (rel == '0') {
                                $(this).text('取消');
                                $(this).attr('rel', '1');
                            }
                            if (rel == '1') {
                                $(this).text('编辑');
                                $(this).attr('rel', '0');
                                location.reload();
                            }
                        })
                        // 编辑教育经历
                        $(".edit-education-item").click(function () {
                            var rel = $(this).attr('rel'); // 0 编辑 1 取消
                            if (rel == '0') {
                                $(this).text('取消');
                                $(this).attr('rel', '1');
                            }
                            if (rel == '1') {
                                $(this).text('编辑');
                                $(this).attr('rel', '0');
                                location.reload();
                            }
                        })


                    })

                    function updateFont(id, obj) {



                    }

                    function deleteSkill(id) {

                        var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
' + '/resumeajax/deleteSkill'

                        var resume_id = $('#baseinfo_resume_id').val()

                        var params = {}

                        params.id = id

                        params.resume_id = resume_id

                        var t = confirm('确定删除该项吗?')

                        $(".loading").show();
                        if (t) {

                            $.ajax({
                                url: url, // 跳转到 action  
                                data: params,
                                type: 'get',
                                cache: false,
                                success: function (data) {


                                    $(".loading").hide();
                                    location.reload()

                                },
                                error: function (e) {
                                    $(".loading").hide();

                                }
                            });

                        }

                    }

                    function saveResume(){

                        var a = resume.getResumeInfo();

                        if(a == 1){

                            var resume_id = $('#baseinfo_resume_id').val()

                            window.location.href = url+'/resume/resume_detail?id='+resume_id
                        }

                    }

                    function deleteLanguage(id) {

                        var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
' + '/resumeajax/deleteLanguage'

                        var params = {}

                        params.id = id


                        var t = confirm('确定删除该项吗?')

                        if (t) {
                            $(".loading").show();
                            $.ajax({
                                url: url, // 跳转到 action  
                                data: params,
                                type: 'get',
                                cache: false,
                                success: function (data) {

                                    location.reload();
                                    $(".loading").hide();

                                },
                                error: function (e) {
                                    $(".loading").hide();

                                }
                            });
                        }
                    }

            </script>

        </body>
    </html>