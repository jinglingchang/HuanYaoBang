<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 19:03:02
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/checkTruth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14633898895739a8e6448db9-07066480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2264c18353aebd1a2aa2cc9d2f9da8dc0fcd17c' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/checkTruth.tpl',
      1 => 1463396363,
    ),
  ),
  'nocache_hash' => '14633898895739a8e6448db9-07066480',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/lianjia.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/new_open_account.css">

<style type="text/css">
    .errorTip{
        margin-top: -20px;
        color: red;
        margin-bottom: 10px;
        font-size: 14px;
        width: 320px;

        visibility: hidden;
    }
    .upload-button{
        background: #fff;
        padding: 1px 10px;
        font-size: 12px;
        color: #202020;
        margin-left: 25px;
        cursor: pointer;
        width: 104px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

</style>

<script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

<div class="loninContainer checkTruthDg" style="display:none;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 500px; padding-left: 38px; top: 35%"> <i class="close" style="background: none;position: relative;"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" /></i> 
        <div class="panel_info">
            <div class="panel_tab">
                <div class="title">
                    <div class="fl feedbackTitle" style="font-size: 18px;">请您验证以下信息是否真实</div>
                    <span style="border:none; width: 130%;text-align: right;height: 25px;line-height: 25px;font-size: 11px;    margin-left: 100px;">
                        您提交的信息不能修改，请确保填写信息的真实性
                    </span>
                    
                </div>
                <span style="border: none;font-size: 14px;text-align: left;color: #333;">已验证问题:</span>
                <div class="clear"></div>

                <?php if ($_smarty_tpl->getVariable('objective_auth_status')->value==0){?>

                <div style="padding-left: 30px;">
                    <samp style="margin-right:20px;">求职意向：</samp> 

                    <?php if ($_smarty_tpl->getVariable('objective_auth_value')->value==0){?>

                    <samp style="margin-right:20px;">暂无意向</samp> 

                    <?php }else{ ?>

                    <samp style="margin-right:20px;">有意向</samp> 

                    <?php }?>
                </div>

                <?php }?>

               <?php if ($_smarty_tpl->getVariable('baseinfo_auth_status')->value==0){?>

                <div style="padding-left: 30px;">
                    <samp style="margin-right:20px;">现居城市：</samp> 

                    <?php if ($_smarty_tpl->getVariable('baseinfo_auth_answer')->value==0){?>

                    <samp style="margin-right:20px;">不真实</samp> 

                    <?php }else{ ?>

                    <samp style="margin-right:20px;">真实</samp> 

                    <?php }?>
                </div>

                <?php }?>

                <?php if ($_smarty_tpl->getVariable('school_auth_status')->value==0){?>

                <div style="padding-left: 30px;">
                    <samp style="margin-right:20px;">教育经历：</samp> 

                    <?php if ($_smarty_tpl->getVariable('school_auth_answer')->value==0){?>

                    <samp style="margin-right:20px;">不真实</samp> 

                    <?php }else{ ?>

                    <samp style="margin-right:20px;">真实</samp> 

                    <?php }?>
                </div>

                <?php }?>

                <?php if ($_smarty_tpl->getVariable('work_auth_status')->value==0){?>

                <div style="padding-left: 30px;">
                    <samp style="margin-right:20px;">工作经历：</samp> 

                    <?php if ($_smarty_tpl->getVariable('work_auth_answer')->value==0){?>

                    <samp style="margin-right:20px;">不真实</samp> 

                    <?php }else{ ?>

                    <samp style="margin-right:20px;">真实</samp> 

                    <?php }?>
                </div>

                <?php }?>

                <?php if ($_smarty_tpl->getVariable('salary_auth_status')->value==0){?>

                <div style="padding-left: 30px;">
                    <samp style="margin-right:20px;">预估薪资：</samp> 

                    <?php if ($_smarty_tpl->getVariable('salary_auth_answer')->value==0){?>

                    <samp style="margin-right:20px;">不真实</samp> 

                    <?php }else{ ?>

                    <samp style="margin-right:20px;">真实</samp> 

                    <?php }?>
                </div>

                <?php }?>


                <span style="border: none;font-size: 14px;text-align: left;color: #333;">可验证问题:</span>
                <div class="clear"></div>
                <div id="con_login_user" style="padding-left: 50px;">
                    <div class="replaceText" style="margin-left: 30px;">

                        <?php if ($_smarty_tpl->getVariable('objective_auth_status')->value==1){?>

                        <div>
                            <samp style="margin-right:20px;">求职意向：</samp> 
                            <input type="radio" id="objectOptionsYes" name="objective_auth" value='1' >
                            <label for="objectOptionsYes" style="cursor: pointer;">有意向</label>

                            <input type="radio" id="objectOptionsNo" name="objective_auth" value='0' style="margin-left: 15px;">
                            <label for="objectOptionsNo" style="cursor: pointer;">暂无意向</label>
                        </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('baseinfo_auth_status')->value==1){?>

                        <div style=" margin-top: 10px;">
                            <samp style="margin-right: 20px;">现居城市：</samp> 
                            <input type="radio" id="city-real" name="baseinfo_auth" value='1' >
                            <label for="city-real" style="cursor: pointer;">真实</label>
                            &nbsp;&nbsp;
                            <input type="radio" id="city-noreal" name="baseinfo_auth" value='0' style="margin-left: 15px;">
                            <label for="city-noreal" style="cursor: pointer;">不真实</label>
                        </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('school_auth_status')->value==1){?>

                        <div style=" margin-top: 10px;">
                            <samp style="margin-right: 20px;">教育经历：</samp> 
                            <input type="radio" id="education-real" name="school_auth" value='1' >
                            <label for="education-real" style="cursor: pointer;">真实</label>
                            &nbsp;&nbsp;
                            <input type="radio" id="education-noreal" name="school_auth" value='0' style="margin-left: 15px;">
                            <label for="education-noreal" style="cursor: pointer;">不真实</label>
                        </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('work_auth_status')->value==1){?>

                        <div style=" margin-top: 10px;">
                            <samp style="margin-right: 20px;">工作经历：</samp> 
                            <input type="radio" id="work-real" name="work_auth" value='1' >
                            <label for="work-real" style="cursor: pointer;">真实</label>
                            &nbsp;&nbsp;
                            <input type="radio" id="work-noreal" name="work_auth" value='0' style="margin-left: 15px;">
                            <label for="work-noreal" style="cursor: pointer;">不真实</label>
                        </div>

                        <?php }?>

                        <?php if ($_smarty_tpl->getVariable('salary_auth_status')->value==1){?>

                        <div style=" margin-top: 10px;">
                            <samp style="margin-right: 20px;">预估薪资：</samp> 
                            <input type="radio" id="salary-real" name="salary_auth" value='1' >
                            <label for="salary-real" style="cursor: pointer;">真实</label>
                            &nbsp;&nbsp;
                            <input type="radio" id="salary-noreal" name="salary_auth" value='0' style="margin-left: 15px;">
                            <label for="salary-noreal" style="cursor: pointer;">不真实</label>
                        </div>

                        <?php }?>

                    </div>
                </div>
            </div>
        </div>
            <div style="border-top: solid 1px #e1e1e1; width: 500px;; margin-left: -38px;margin-top: 20px;"></div>
            <div style="margin-top: 15px;">上传资料：</div>
            <div style="height: 60px;line-height: 60px;">

            <?php if ($_smarty_tpl->getVariable('strong_school_auth_status')->value==1&&$_smarty_tpl->getVariable('strong_school_auth_status')->value!=2){?>

            <button class="upload-button upload-education" onclick="clickButtonPic(1)">上传教育证明</button>
            <input type="file" id='strong_school_auth_file' name="upload-education-pic" accept=".jpg,.jpeg,.png,.bmp,.gif" style="display:none;" onchange="uploadPic(1)" /> 

            <?php }else{ ?>

            <button class="upload-button upload-education" >教育证明已上传</button>
            <input type="file" id='strong_school_auth_file' name="upload-education-pic" accept=".jpg,.jpeg,.png,.bmp,.gif" style="display:none;" /> 

            <?php }?>

            <?php if ($_smarty_tpl->getVariable('strong_work_auth_status')->value==1&&$_smarty_tpl->getVariable('strong_work_auth_status')->value!=2){?>

            <button class="upload-button upload-work" onclick="clickButtonPic(2)">上传工作证明</button>
            <input type="file" id="strong_work_auth_file" name="upload-work-pic" accept=".jpg,.jpeg,.png,.bmp,.gif" style="display:none;" onchange="uploadPic(2)" /> 

            <?php }else{ ?>

            <button class="upload-button upload-work">工作证明已上传</button>
            <input type="file" id="strong_work_auth_file" name="upload-work-pic" accept=".jpg,.jpeg,.png,.bmp,.gif" style="display:none;"  /> 

            <?php }?>

            <?php if ($_smarty_tpl->getVariable('strong_salary_auth_status')->value==1&&$_smarty_tpl->getVariable('strong_salary_auth_status')->value!=2){?>

            <button class="upload-button upload-salary" onclick="clickButtonPic(3)">上传薪资证明</button>
            <input type="file" id="strong_salary_auth_file" name="upload-salary-pic" accept=".jpg,.jpeg,.png,.bmp,.gif" style="display:none;" onchange="uploadPic(3)"/> 

            <?php }else{ ?>

            <button class="upload-button upload-salary" >薪资证明已上传</button>
            <input type="file" id="strong_salary_auth_file" name="upload-salary-pic" accept=".jpg,.jpeg,.png,.bmp,.gif" style="display:none;" onchange="uploadPic(3)"/> 

            <?php }?>

            </div>

            <div style="text-align:center; margin-left:-38px; margin-top: 20px;">
                <button type="button" style='height:40px; width: 120px;' id="submitResumeAuthButton" class="new-open-account-button" onclick="submitResumeAuths()">提交</button>
            </div>
            <div style="font-size: 10px;margin-top: 10px;text-align: right;padding-right: 25px;">
                此份简历被他人购买，您将获得收益
            </div>
        <div style="height: 20px;"></div>
    </div>

</div>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>
<script type="text/javascript">

    $(function () {
        // body...
        $(".close-mask").click(function () {

             $(".loninContainer").fadeOut();
        })

        $('#username,#password').bind('input propertychange', function () {
            $(".errorTip").css('visibility', 'hidden');
        });

        setResumeAuthButton(0)
    })

    function iKnow() {
        $(".loninContainer").fadeOut();
    }


    // 点击按钮调用 上传空间  1 教育证明，2工作证明，3 薪资证明 
    function clickButtonPic(rel) {

        switch(rel)
            {
            case 1:
                $("#strong_school_auth_file").click();
              break;

            case 2:
                $("#strong_work_auth_file").click();
              break;

            case 3:
              $("#strong_salary_auth_file").click();
              break;

            default:
             
            }
    }


    // input file change 事件  1 教育证明，2工作证明，3 薪资证明
    function uploadPic(rel) {

        setResumeAuthButton(1)

        switch(rel)
            {
            case 1:
                var file = $("#strong_school_auth_file").val();
                var fileName = getFileName(file);
                $(".upload-education").text(fileName);
                // alert(fileName);
              break;

            case 2:
                var file = $("#strong_work_auth_file").val();
                var fileName = getFileName(file);
                $(".upload-work").text(fileName);
                // alert(fileName);
              break;

            case 3:
                var file = $("#strong_salary_auth_file").val();
                var fileName = getFileName(file);
                $(".upload-salary").text(fileName);
                // alert(fileName);
              break;

            default:
             
            }
    }



    function setResumeAuthButton(val){

        if(val == 0){

            $('#submitResumeAuthButton').css('background-color','gray');

            $('#submitResumeAuthButton').attr('onclick','');

        } else if(val == 1){

            $('#submitResumeAuthButton').css('background-color','#333');

            $('#submitResumeAuthButton').attr('onclick','submitResumeAuths()');
        }

    }

    $("input[name='objective_auth']").click(function(){

        setResumeAuthButton(1)

    })

    $("input[name='baseinfo_auth']").click(function(){

        setResumeAuthButton(1)

    })

    $("input[name='school_auth']").click(function(){

        setResumeAuthButton(1)

    })

    $("input[name='work_auth']").click(function(){

        setResumeAuthButton(1)

    })

    $("input[name='salary_auth']").click(function(){

        setResumeAuthButton(1)

    })

    function submitResumeAuths(){

        var post_data_length = 0

        var params = new FormData();

        var objective_auth =  $("input[name='objective_auth']:checked").val();

        var baseinfo_auth =  $("input[name='baseinfo_auth']:checked").val();

        var school_auth =  $("input[name='school_auth']:checked").val();

        var work_auth =  $("input[name='work_auth']:checked").val();

        var salary_auth =  $("input[name='salary_auth']:checked").val();

        if(objective_auth != undefined){

            params.append('objective_auth',objective_auth)

            post_data_length++;

        }

        if(baseinfo_auth != undefined){

            params.append('baseinfo_auth',baseinfo_auth)

            post_data_length++
        }

        if(school_auth != undefined){

            params.append('school_auth',school_auth)

            post_data_length++
        }

        if(work_auth != undefined){

            params.append('work_auth',work_auth)

            post_data_length++

        }

        if(salary_auth != undefined){

            params.append('salary_auth',salary_auth)

            post_data_length++

        }

        var strong_school_auth_file = document.getElementById('strong_school_auth_file').files[0]

        if(strong_school_auth_file != undefined){

            params.append('strong_school_auth_file',strong_school_auth_file)

            post_data_length++

        }


        var strong_work_auth_file = document.getElementById('strong_work_auth_file').files[0]

        if(strong_work_auth_file != undefined){

            params.append('strong_work_auth_file',strong_work_auth_file)

            post_data_length++

        }


        var strong_salary_auth_file = document.getElementById('strong_salary_auth_file').files[0]

        if(strong_salary_auth_file != undefined){

            params.append('strong_salary_auth_file',strong_salary_auth_file)

            post_data_length++

        }

        if(post_data_length == 0){

            setErrorTip('请提交强弱验证信息或强弱验证信息已被他人提交');

            $('.popbody').css('height','60px')

        } else{

            var ajaxurl = url + 'resumeajax/submitResumeAuth'

            params.append('resume_id',$('#resume_id').val());

            hirelibEngine.ajaxNative(ajaxurl, 'post', params, function success(data) {

                    var data = data.replace(/(^\s+)|(\s+$)/g,"");

                    if(data == 1){

                        setErrorTip('成功')

                        iKnow();

                        location.reload()
                    }


                }, function error(data) {


            }, 1);
        }

    }


    // 获取 上传的文件名称
    function getFileName(obj){
        var pos=obj.lastIndexOf("\\");
        return obj.substring(pos+1);  
    }


</script>
