<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-08 16:09:29
         compiled from "/private/var/www/html/employer_tool/Lib/Collect/Tpl/Collect/resume_preview_collect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4615251025757d2b9a57cf6-08648597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8619d6e31680205a6209e690289f77c4f7c5431a' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Collect/Tpl/Collect/resume_preview_collect.tpl',
      1 => 1465373259,
    ),
  ),
  'nocache_hash' => '4615251025757d2b9a57cf6-08648597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimal-ui">
    <title><?php echo $_smarty_tpl->getVariable('resume_info')->value->name;?>
的简历</title>
    <link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <style>
    body,
    html {
        padding-top: 1em;
        margin: 0;
        background-color: #fafafa;
    }
    
    .note {
        display: block;
        position: absolute;
        top: 10px;
        left: 10px;
        font-family: "Open Sans";
        font-size: 0.6em;
    }
    
    .new {
        background-color: #81C784;
        border: 1px solid #757575;
        padding: 1px;
        border-radius: 4px;
    }
    /* Header */
    
    header {
        width: 100%;
        vertical-align: middle;
        text-align: center;
    }
    
    .header-content {
        display: inline-block;
    }
    
    .pic {
        margin: 0 auto;
        margin-top: -2.5em;
        border-radius: 10em;
        height: 4em;
        width: 4em;
        border: 2px solid #e0e0e0;
        transition: all 0.5s linear;
    }
    
    @-webkit-keyframes wiggle {
        0% {
            transform: rotate(0deg);
        }
        25% {
            transform: rotate(-30deg);
        }
        50% {
            transform: rotate(15deg);
        }
        100% {
            transform: rotate(0deg);
        }
    }
    
    .pic:hover {
        /*Webkit fix*/
        -webkit-transform: translateZ(0);
        cursor: pointer;
        -webkit-animation: wiggle 0.7s cubic-bezier(0.6, -0.28, 0.735, 0.045);
    }
    
    .header-text {
        margin-top: 0.5em;
        margin-left: 1em;
    }
    
    header p {
        text-align: center;
        font-family: "Merriweather";
        margin: 0;
        color: #212121;
    }
    
    .first-name {
        font-size: 1.05em;
    }
    
    .subtitle {
        font-family: "Merriweather";
        padding-top: .3em;
        font-size: 0.55em;
        font-weight: 500;
        color: #424242;
    }
    /* Information */
    
    .paper {
        margin: 0 auto;
        margin-bottom: 1em;
        background-color: white;
        width: 60%;
        padding: 0.5em 0 0.5em 0;
        border-top: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        border-right: 1px solid #e0e0e0;
        border-bottom: 3px solid #e0e0e0;
        border-radius: 3px;
    }
    
    @media(max-width:992px) {
        .paper {
            width: 90%;
        }
    }
    /* Content Part */
    
    .content-wrapper {
        padding-right: 7.25%;
    }
    
    .content {
        display: table;
        width: 100%;
        padding-top: 1.5em;
        /*border-top: 1px solid #eeeeee;*/
    }
    
    .content:last-child {
        margin-bottom: 2em;
    }
    
    body > div > article > div > section:last-child {
        padding-bottom: 1.5em;
    }
    
    .row {
        display: table-row;
    }
    
    .row div {
        display: table-cell;
    }
    
    .content-cat {
        font-family: "Merriweather";
        font-variant: small-caps;
        font-weight: 300;
        letter-spacing: 1px;
        color: #212121;
        font-size: 0.8em;
        text-align: center;
        vertical-align: middle;
        padding-left: 1%;
        width: 30%;
    }
    
    .content-cat p {
        font-size: 0.55em;
        font-weight: 600;
        margin-bottom: 0;
    }
    
    .content-text {
        border-left: 1px solid #e0e0e0;
        transition: border 0.66s ease-in;
    }
    
    .big-text {
        vertical-align: top;
    }
    
    .content-text ul {
        padding: 0;
        margin: 0;
        margin-top: 0.15em;
        width: 85%;
        margin-left: 1.5em;
    }
    
    .content-text ul:last-child {
        margin-bottom: 0.5em;
    }
    
    .content-text ul li {
        font-family: "Open Sans";
        font-size: 0.7em;
        display: inline-block;
    }
    
    .content-text ul li:first-child {
        width: 35%;
        color: #424242;
        font-weight: 600;
    }
    
    .content-text ul li a,
    div.content-text.work-listing.education-listing > p > strong > a {
        text-decoration: none;
        color: #0277bd;
    }
    
    .content-text ul li a:hover {
        color: #4fc3f7;
    }
    
    .work-listing p {
        font-family: "Open Sans";
        font-size: 0.7em;
        color: #424242;
        margin-left: 2em;
        margin-top: 0.45em;
        margin-bottom: 0.45em;
    }
    
    div.content-text.work-listing.education-listing > p:nth-child(2) {
        margin-top: 0.25em;
    }
    
    .work-listing .highlight {
        font-family: "Open Sans";
        font-size: 0.7em;
        font-weight: 400;
        color: #424242;
        margin-left: 3.25em;
        padding-left: 0.5em;
        border-left: 1px solid #e0e0e0;
    }
    
    .education-listing > .heading {
        font-weight: 600;
        margin-top: 0.75em;
        margin-left: 2em;
    }
    
    .education-listing > .highlight {
        margin-left: 3.25em;
    }
    
    .highlight {
        transition: border .33s ease-in;
    }
    
    .profiles-listing ul li,
    .profiles-listing ul li:first-child {
        width: 32%;
        font-weight: normal;
    }
    
    .work-content,
    .education-content {
        padding-top: .75em;
    }
    
    section.content.education-content > div > div.content-cat {
        vertical-align: top;
    }
    
    div.content-text.skills-listing > p {
        font-family: "Open Sans";
        font-size: 0.7em;
        font-weight: 400;
        margin-left: 2em;
        margin-top: 0.45em;
        margin-bottom: 0.45em;
    }
    
    div.content-text.skills-listing > p > {
        color: #212121;
    }
    </style>
    <style media="print">
    body,
    html {
        background-color: white;
        padding-top: 1.5em;
    }
    
    .paper {
        width: 100%;
        border: 0;
        padding-top: 0;
    }
    
    header p {
        font-size: 1.3em;
    }
    
    .subtitle {
        font-size: 0.7em;
    }
    
    .header-pic {
        float: left;
    }
    
    .profiles {
        display: none;
    }
    
    .content {
        page-break-inside: avoid;
        page-break-after: auto;
    }
    
    .header-text {
        float: left;
        margin-top: -1.6em;
    }
    
    .content-wrapper > .content:first-child {
        padding-top: 2em;
    }
    
    .content:last-child {
        padding-bottom: 0;
    }
    
    .content-cat {
        width: 33%;
        color: black;
        text-align: left;
    }
    
    .content-cat p {
        font-size: 0.6em;
        font-weight: 600;
    }
    
    header p,
    .content-text,
    .work-listing p,
    .content-text ul li:first-child,
    .work-listing .highlight,
    .content-text.skills-listing > ul > li > .highlight {
        color: black;
    }
    
    .content-text.skills-listing > ul > li span,
    .subtitle {
        color: #212121;
    }
    
    .content-text ul:last-child {
        margin-bottom: 0.25em;
    }
    
    .content-text ul li:first-child {
        width: 50%;
    }
    
    .profiles-listing ul li:first-child {
        width: 32%;
    }
    
    div.content-text.skills-listing > ul > li {
        width: 33%;
    }
    
    .work-listing p {
        margin-bottom: 0.1em;
    }
    
    div.content-text.skills-listing > ul > li > p {
        margin-top: 0.4em;
        margin-bottom: 0.5em;
    }
    
    div.content-text.skills-listing > ul > li {
        padding-left: 1.5em;
    }
    
    div.content-text.skills-listing > ul > li:first-child {
        padding-left: 2em;
    }
    
    .note {
        display: none;
    }
    
    .content-text:hover {
        border-left: 1px solid #eeeeee;
    }
    
    .content-text ul li a:hover {
        color: #4fc3f7;
    }
    
    .highlight:hover,
    .content-text.skills-listing > ul > li > .highlight:hover {
        border-left: 1px solid #eeeeee;
    }
    
    .big-text {
        padding-top: 0;
    }
    
    a:link {
        color: #5798f9;
        text-decoration: none;
    }
    /* 未访问的链接 */
    
    a:visited {
        color: #5798f9;
        text-decoration: none;
    }
    /* 已访问的链接 */
    
    a:hover {
        color: #5798f9;
        text-decoration: none
    }
    /* 当有鼠标悬停在链接上 */
    
    a:active {
        color: #5798f9;
        text-decoration: none;
    }
    /* 被选择的链接 */
    </style>
</head>

<body>
    <div class="resume-wrapper" ng-app='resumeTempPaperApp' ng-controller='tempPaperCtrl'>
        <article class="paper">
            <header>
                <div class="header-content">
                    <div class="header-text">
                        <p><?php echo $_smarty_tpl->getVariable('resume_info')->value->name;?>
</p>
                    </div>
                </div>
            </header>
            <div class="content-wrapper">
                <!-- CONTACT -->
                <section class="content">
                    <div class="row">
                        <div class="content-cat">联系方式</div>
                        <div class="content-text">
                            <ul>
                                <li>邮箱</li>
                                <li><?php echo $_smarty_tpl->getVariable('resume_info')->value->email;?>
</li>
                            </ul>
                            <ul>
                                <li>电话</li>
                                <li><?php echo $_smarty_tpl->getVariable('resume_info')->value->phone;?>
</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- LOCATION -->
                <section class="content">
                    <div class="row">
                        <div class="content-cat">居住地</div>
                        <div class="content-text">
                            <ul>
                                <li>城市</li>
                                <li><?php echo $_smarty_tpl->getVariable('resume_info')->value->resume_info['city'];?>
</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- LANGUAGE -->
                <?php if (count($_smarty_tpl->getVariable('resume_language_info')->value)>0){?>
                <section class="content">
                    <div class="row">
                        <div class="content-cat">语言</div>
                        <div class="content-text">
                            <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_language_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
                            <ul ng-repeat="languageKey in resume.languages">
                                <li><?php echo $_smarty_tpl->tpl_vars['datas']->value['language_name'];?>
</li>
                                <?php if ($_smarty_tpl->tpl_vars['datas']->value['language_degree_name']!=''){?>
                                <li><?php echo $_smarty_tpl->tpl_vars['datas']->value['language_degree_name'];?>
</li>
                                <?php }?>
                            </ul>
                            <?php }} ?>
                        </div>
                    </div>
                </section>
                <?php }?> <?php if (count($_smarty_tpl->getVariable('work_experience_array')->value)>0){?>
                <section class="content">
                    <?php  $_smarty_tpl->tpl_vars['work_experience_arrays'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('work_experience_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['work_experience_arrays']->key => $_smarty_tpl->tpl_vars['work_experience_arrays']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['work_experience_arrays']->key;
?>
                    <div class="row">
                        <div class="content-cat big-text">
                            <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>工作经历<?php }?>
                            <p><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['begin_times'];?>
--<?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['end_times'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_months'];?>
</p>
                        </div>
                        <div class="content-text work-listing education-listing">
                            <p style="margin-top:2.4em;">
                                <strong><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['company'];?>
</a></strong>
                                <strong><?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_title'];?>
</strong>
                            </p>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['work_experience_arrays']->value['job_text'];?>

                            </p>
                        </div>
                    </div>
                    <?php }} ?>
                </section>
                <?php }?> <?php if (count($_smarty_tpl->getVariable('project_array')->value)>0){?>
                <section class="content">
                    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                    <div class="row">
                        <div class="content-cat big-text">
                            <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>项目经验<?php }?>
                            <p><?php echo $_smarty_tpl->tpl_vars['info']->value['begin_times'];?>
--<?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>
</p>
                        </div>
                        <div class="content-text work-listing">
                            <p><?php echo $_smarty_tpl->tpl_vars['info']->value['project'];?>
</p>
                            <p class="highlight"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</p>
                        </div>
                    </div>
                    <?php }} ?>
                </section>
                <?php }?> <?php if (count($_smarty_tpl->getVariable('education_array')->value)>0){?>
                <section class="content">
                    <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('education_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                    <div class="row">
                        <div class="content-cat big-text">
                            <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>教育信息<?php }?>
                            <p><?php echo $_smarty_tpl->tpl_vars['info']->value['begin_times'];?>
--<?php echo $_smarty_tpl->tpl_vars['info']->value['end_times'];?>
</p>
                        </div>
                        <div class="content-text work-listing education-listing">
                            <p class="heading" style="margin-top:2.35em;"><?php echo $_smarty_tpl->tpl_vars['info']->value['school'];?>
</p>
                            <p class="highlight">
                                学历: <i><?php echo $_smarty_tpl->tpl_vars['info']->value['major'];?>
(<?php echo $_smarty_tpl->tpl_vars['info']->value['degree_level'];?>
)</i>
                            </p>
                        </div>
                    </div>
                    <?php }} ?>
                </section>
                <?php }?> <?php if (count($_smarty_tpl->getVariable('resume_info')->value->resume_skill_list)>0){?>
                <section class="content">
                    <div class="row">
                        <div class="content-cat">技能</div>
                        <div class="content-text skills-listing">
                            <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resume_info')->value->resume_skill_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['datas']->key;
?>
                           &nbsp;&nbsp; <span style='font-family: "Open Sans";font-size: 0.7em;'><?php echo $_smarty_tpl->tpl_vars['datas']->value['name'];?>
</span>

                           <?php }} ?>
                        </div>
                    </div>
                </section>
                <?php }?>
            </div>
        </article>
    </div>
    <div style='text-align: center; line-height: 30px;  font-family: "Open Sans";font-size:0.7em;
  font-weight:400;'>此简历由<span style='color:#5798f9'><a href='http://www.liezoom.com?souce=h5' style='color: #5798f9;text-decoration: none;'>众人识才</a></span>提供</div>
</body>

</html>