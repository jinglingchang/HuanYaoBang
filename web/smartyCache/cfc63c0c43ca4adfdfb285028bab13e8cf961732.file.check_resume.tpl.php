<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 19:58:35
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/check_resume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86389419257331e6bed6587-83461334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc63c0c43ca4adfdfb285028bab13e8cf961732' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/check_resume.tpl',
      1 => 1462631779,
    ),
  ),
  'nocache_hash' => '86389419257331e6bed6587-83461334',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/jquery.circliful.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=fontawesome">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/date-style.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/date-simplecalendar.js" type="text/javascript"></script>

<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<style type="text/css">
    .wb-content-warp{
        width: 95%;
        margin: 0 auto;
        padding-top: 30px;
        height: 100%;
    }
    .wb-title-div{
        border: solid 1px none;
        color: #555;
    }
    body{
        
        background: #fff;
    }
    *{
        margin:0;padding:0;
        list-style-type:none;
    }
    a,img{
        border:0;
    }
    img{
        vertical-align:middle;
    }
    #QuacorGrading input{
        background: url("<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon2.png") no-repeat scroll right center;
        cursor: pointer;
        height: 16px;
        width: 16px;
        padding: 0;
        border: 0;
    }
    #QuacorGrading2 input{
        background: url("<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon2.png") no-repeat scroll right center;
        cursor: pointer;
        height: 16px;
        width: 16px;
        padding: 0;
        border: 0;
    }
    #QuacorGrading3 input{
        background: url("<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon2.png") no-repeat scroll right center;
        cursor: pointer;
        height: 16px;
        width: 16px;
        padding: 0;
        border: 0;
    }
    #QuacorGradingValue{
        display: none;
    }
    .quacorGrading{
        padding-left: 33px;
    }
    .quacorGradingStrong{
        color: #777;
        font-size: 15px;
        padding-right: 30px;
    }
</style>

<div class="hl-warp_div">

    <div class="wb-content-warp">
        <input type='hidden' name='code' id='code' value='<?php echo $_smarty_tpl->getVariable('code')->value;?>
'>

        <div class="wb-title-div" style="padding-left: 30px;">
            您好，我是联系您的<?php echo $_smarty_tpl->getVariable('nickname')->value;?>
，请您对我进行评价
        </div>

        <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/createResumeReview' method='post' id='resume_latitude_form' name='resume_latitude_form'>

            <input type='hidden' id='resume_id' name='resume_id'  value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

            <input type='hidden' id='user_id' name='user_id' value='<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'>

            <input type='hidden' id='question_1' name='question_1'  value=''>

            <input type='hidden' id='question_2' name='question_2'  value=''>

            <input type='hidden' id='question_3' name='question_3'  value=''>

            <div class="alert-review-resume-content">

                <div id="QuacorGrading" class="quacorGrading" style="margin-top: 10px;">
                    <strong class="quacorGradingStrong">沟通能力</strong>
                    <input name="1" type="button" rel='question_1' />
                    <input name="2" type="button" rel='question_1' />
                    <input name="3" type="button" rel='question_1' />
                    <input name="4" type="button" rel='question_1' />
                    <input name="5" type="button" rel='question_1' />
                    <span id="QuacorGradingValue" style=""><b><font size="5" color="#fd7d28">5</font></b>分</span>

                </div><!--QuacorGrading end-->

                <div id="QuacorGrading2" class="quacorGrading">

                    <strong class="quacorGradingStrong">专业技能</strong>
                    <input name="1" type="button" rel='question_2'  />
                    <input name="2" type="button" rel='question_2'  />
                    <input name="3" type="button" rel='question_2'  />
                    <input name="4" type="button" rel='question_2' />
                    <input name="5" type="button" rel='question_2' />
                    <span id="QuacorGradingValue"><b><font size="5" color="#fd7d28">5</font></b>分</span>

                </div><!--QuacorGrading end-->

                <div id="QuacorGrading3" class="quacorGrading">

                    <strong class="quacorGradingStrong">理解能力</strong>
                    <input name="1" type="button" rel='question_3' />
                    <input name="2" type="button" rel='question_3' />
                    <input name="3" type="button" rel='question_3' />
                    <input name="4" type="button" rel='question_3' />
                    <input name="5" type="button" rel='question_3' />
                    <span id="QuacorGradingValue"><b><font size="5" color="#fd7d28">5</font></b>分</span>

                </div><!--QuacorGrading end-->

                <div class="form-group" style="width: 84%;margin: 0 auto;">
                    <div>其他建议</div>
                    <textarea maxlength="300" style="width: 100%; margin: 0 auto;" id="question_review" name='question_review' class="form-control" type="text" placeholder=" 请填写评价"></textarea>
                    <div style="clear: both"></div>
                </div>

            </div>
            <div style="clear: both;"></div>
            <div class="popfooter">
                <button class="btn btnDashboard iKonwButton" type="button" onclick='checkuser()' style="width: 92%;">  提交</button>
            </div>

        </form>

        <div style="border-top: solid 1px #e1e1e1; margin-top: 10vh;"></div>

        <div style="text-align: center;cursor: pointer; font-size: 1em;">
           若您不想再收到短信，请<span style="color: #3398ff;display: initial; font-size: 1em" onclick='window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/close_check?user_id=<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
&resume_id=<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
")'>点击这里</span>关闭
        </div>

        <!--        <button type="button" class="new-open-account-button" onclick="checkuser()">激活验证</button> -->
    </div>

</div>


<script>


    function activation_resume(){

        var ajaxurl = url +'resume/submit_phone_activation'

        data = {}

        data.code = $('#code').val()

        hirelibEngine.ajax(ajaxurl, 'post', data, function success(data) {

            

        }, function error() {


        }, 0)


    }

    function checkuser() {

        var ajaxUrl = url + 'resumeajax/candidate_review'

        data = {}

        data.question_3 = $('#question_3').val()

        data.question_2 = $('#question_2').val()

        data.question_1 = $('#question_1').val()

        data.question_review = $('#question_review').val()

        data.review_type = 1

        data.user_id = $('#user_id').val()

        data.resume_id = $('#resume_id').val()

        hirelibEngine.ajax(ajaxUrl, 'post', data, function success(data) {

            var dataObj = eval("(" + data + ")");

            if (dataObj['res'] == 1) {

                setErrorTip('操作成功');

                location.reload();

            } else {

                setErrorTip(dataObj['data']);

            }

        }, function error() {


        }, 1)
    }

    var GradList = document.getElementById("QuacorGrading").getElementsByTagName("input");
    var GradList2 = document.getElementById("QuacorGrading2").getElementsByTagName("input");
    var GradList3 = document.getElementById("QuacorGrading3").getElementsByTagName("input");

    layoutStar(GradList);
    layoutStar(GradList2);
    layoutStar(GradList3);

    function layoutStar(name) {
        // body...
        for (var di = 0; di < parseInt(document.getElementById("QuacorGradingValue").getElementsByTagName("font")[0].innerHTML); di++) {
            name[di].style.backgroundPosition = 'right center';
        }

        for (var i = 0; i < name.length; i++) {

            name[i].onclick = function () {

                var latitude_rel = $(this).attr('rel')

                var latitude_value = $(this).attr('name')

                $('#' + latitude_rel).val(latitude_value)

                for (var Qi = 0; Qi < name.length; Qi++) {

                    name[Qi].style.backgroundPosition = 'right center';
                }
                for (var Qii = 0; Qii < this.name; Qii++) {
                    name[Qii].style.backgroundPosition = 'left center';
                }
            }
        }
    }

    activation_resume();


</script>

