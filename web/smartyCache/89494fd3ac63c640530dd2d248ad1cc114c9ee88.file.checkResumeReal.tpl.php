<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-19 10:37:27
         compiled from "/private/var/www/html/employer_tool/Public/html//tip/checkResumeReal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1884755807573d26e7c00c52-25658239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89494fd3ac63c640530dd2d248ad1cc114c9ee88' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//tip/checkResumeReal.tpl',
      1 => 1463575860,
    ),
  ),
  'nocache_hash' => '1884755807573d26e7c00c52-25658239',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style type="text/css">
.popbody{
    border-bottom:solid 1px #e1e1e1;
    text-align: center;
    height: 45px;
}   
.alert-review-resume-content{
    border:solid 1px none;
}

.alert-review-resume-content .form-group textarea{
    margin: 0 auto;
    margin-bottom: 8px;
    width: 77%;
    min-height: 7em;
    float: none;
    font-size: 14px;
    border: solid 1px #e1e1e1;
}

.alert-review-resume-title{
    border: solid 1px none;
    width: 100px;
    float: left;
    height: 20px;
    font-size: 15px;
    line-height: 20px;
    color: #333;
    padding-left: 20px;
    margin-right: 20px;
    margin-left: 20px;
}
.position_title_span{
    width: auto;
}


</style>

<!-- 提示性 浮框 开始 -->
<div class="pop alertPop in alert-review-resume" style="display:none;">
        <div class="popmask" style="display: block;"></div>
        <div class="popwrap popsm">
            <div class="popbox">
                <div class="popbody" style="padding-top: 6px;">
                    <span style="padding-left: 10px;">简历信息是否真实？</span>
                    <span class="iKonwButton" style="float: right; padding-right: 10px;cursor:pointer;">×</span>
                </div>

                <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/saveResumeAuth' method='post' id='resume_auth_form' name='resume_auth_form'>

                <input type='hidden' name='resume_id' id='resume_id' value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

                <input type='hidden' name='school' id='school_auth' value='1'>

                <input type='hidden' name='work_year' id='work_year_auth' value='1'>

                <div style="padding-left: 40px;margin-top: 15px;">
                    <span class="position_title_span">毕业学校</span>
                    <span class="position_radio_span" style="margin-left:10px;">
                        <label style='margin-left:10px;margin-right:10px;' class="virtualRadio checked education" ftype="1" onclick='radioCheck(1, this, "school_auth")'>是</label>
                        <label class="virtualRadio education" ftype="2" onclick='radioCheck(2, this, "school_auth")'>否</label>
                    </span>
                </div>

                <div style="clear: both;"></div>

                <div style="padding-left: 40px;margin-top: 15px;">
                    <span class="position_title_span">工作经历</span>
                    <span class="position_radio_span" style="margin-left:10px;">
                        <label style='margin-left:10px;margin-right:10px;' class="virtualRadio checked workExperience" ftype="1" onclick='radioCheck(1, this, "work_year_auth")'>是</label>
                        <label class="virtualRadio workExperience" ftype="2" onclick='radioCheck(2, this, "work_year_auth")'>否</label>
                    </span>
                </div>


                <div class="popfooter">
                    <button class="btn btnDashboard iKonwButton" type="button" onclick='submitResumeAuth()'>  
                        提交
                    </button>
                </div>

               </form>

                <div style="height: 10px;"></div>
            </div>
        </div>
</div> 

<!-- 提示性 浮框 结束 -->

<script type="text/javascript">
    
    var a = 0

    $(function(){

        $(".iKonwButton").click(function(event) {
            /* Act on the event */
            $(".alert-review-resume").fadeOut();
        });
    })
    function radioCheck(value, obj, name) {

        // $('.virtualRadio').removeClass('checked')
        if (name =='school_auth') {
             $('.education').removeClass('checked')
             
         }else{

            $('.workExperience').removeClass('checked')
         }

        $(obj).addClass('checked')

        $("#" + name).val(value)
    }

    function checkResumeAuth(){

        var school_auth = $("#resume_auth_form").find('#school_auth').val()

        var work_year_auth = $("#resume_auth_form").find('#work_year_auth').val()


    }


    function submitResumeAuth(){

        //var resume_auth_boolean = checkResumeAuth();

        if (a == 0) {

            a++;

            var options = {
                success: function (data) {

                    a = 0;

                    var jsonObject = eval("(" + data + ")");

                if (jsonObject['res'] == '1') {

                    setErrorTip('操作成功');

                    resumeStatus();

                } else{

                    setErrorTip(jsonObject['data']);

                    resumeStatus();
                }

                   

                 

                }
            };

            $('#resume_auth_form').ajaxForm(options);

            $("#resume_auth_form").ajaxSubmit(options);

        }

    }


</script>