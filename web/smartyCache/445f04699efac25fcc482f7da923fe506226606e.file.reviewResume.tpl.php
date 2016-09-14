<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 11:40:08
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//tip/reviewResume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8124311715732a9989577e6-27629911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445f04699efac25fcc482f7da923fe506226606e' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//tip/reviewResume.tpl',
      1 => 1462627774,
    ),
  ),
  'nocache_hash' => '8124311715732a9989577e6-27629911',
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
    color: #555;
    font-size: 15px;
    padding-right: 30px;
}
.review-tip{
    width: 80%;
    margin: 0 auto;
    height: 20px;
    font-size: 13px;
    line-height: 20px;
    padding-left: 6px;
    color: red;
    visibility: hidden;
}

</style>

<!-- 提示性 浮框 开始 -->

<div class="loninContainer reviewResumeDg" style="display:none;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 418px; padding-left: 38px; top: 35%;    background: #fff;"> <i class="close" style="background: none"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" /></i> 
        <div class="panel_info">
            <div class="panel_tab">

                <div class="title">
                    <div class="fl feedbackTitle" style="padding-left: 13px;border-bottom: solid 1px #e1e1e1;width: 129%; text-align: center; line-height: 50px;">
                    评价简历
                    </div>
                    
                </div>

                <div style="height:5px;"></div>
             <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/createResumeReview' method='post' id='resume_latitude_form' name='resume_latitude_form'>

                <input type='hidden' id='resume_latitde_1' name='resume_latitde_1'  value='0'>

                 <input type='hidden' id='resume_id' name='resume_id'  value='<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'>

                <input type='hidden' id='resume_latitde_2' name='resume_latitde_2'  value='0'>

                <input type='hidden' id='resume_latitde_3' name='resume_latitde_3'  value='0'>

                <div class="alert-review-resume-content">

                    <div id="QuacorGrading" class="quacorGrading" style="margin-top: 10px;">
                        <samp class="quacorGradingStrong">沟通能力</samp>
                        <input name="1" type="button" rel='resume_latitde_1' />
                        <input name="2" type="button" rel='resume_latitde_1' />
                        <input name="3" type="button" rel='resume_latitde_1' />
                        <input name="4" type="button" rel='resume_latitde_1' />
                        <input name="5" type="button" rel='resume_latitde_1' />
                        <span id="QuacorGradingValue" style=""><b><font size="5" color="#fd7d28">5</font></b>分</span>

                    </div><!--QuacorGrading end-->

                    <div id="QuacorGrading2" class="quacorGrading">

                        <samp class="quacorGradingStrong">专业技能</samp>
                        <input name="1" type="button" rel='resume_latitde_2'  />
                        <input name="2" type="button" rel='resume_latitde_2'  />
                        <input name="3" type="button" rel='resume_latitde_2'  />
                        <input name="4" type="button" rel='resume_latitde_2' />
                        <input name="5" type="button" rel='resume_latitde_2' />
                        <span id="QuacorGradingValue"><b><font size="5" color="#fd7d28">5</font></b>分</span>

                    </div><!--QuacorGrading end-->

                    <div id="QuacorGrading3" class="quacorGrading">

                        <samp class="quacorGradingStrong">理解能力</samp>
                        <input name="1" type="button" rel='resume_latitde_3' />
                        <input name="2" type="button" rel='resume_latitde_3' />
                        <input name="3" type="button" rel='resume_latitde_3' />
                        <input name="4" type="button" rel='resume_latitde_3' />
                        <input name="5" type="button" rel='resume_latitde_3' />
                        <span id="QuacorGradingValue"><b><font size="5" color="#fd7d28">5</font></b>分</span>

                    </div><!--QuacorGrading end-->

                     <div class="review-tip">
                         请对工作技能进行评价
                     </div>

                    <div class="form-group" style="margin: 5px 0;">
                        <textarea maxlength="300" id="label_content" name='label_content' class="form-control" type="text" placeholder=" 请填写评价"></textarea>
                    </div>

                </div>
                <div style="clear: both;"></div>
                <div class="popfooter">
                    <button class="btn btnDashboard iKonwButton" type="button" onclick='submitResumeReview()'>  
                        提交
                    </button>
                </div>
            </form>

            <div style="height: 10px;"></div>
        </div>
    </div>
    </div>
</div>

<!-- 提示性 浮框 结束 -->

<script type="text/javascript">

$(".close-mask").click(function(){
    $(".loninContainer").fadeOut();
})

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

    function submitResumeReview() {



        //var resume_auth_boolean = checkResumeAuth();

        var latitude_one = $('#resume_latitde_1').val();

        var latitude_two = $('#resume_latitde_2').val();

        var latitude_three = $('#resume_latitde_3').val();

        var latitude_label_content = $('#label_content').val()


        console.log(latitude_one)

        console.log(latitude_two)

        console.log(latitude_three)

        console.log(latitude_label_content)

        console.log(a)

        if (latitude_one==0) {
            $(".review-tip").css('visibility','initial');
            $(".review-tip").text('请对沟通能力进行评价');
            return false;
        }
        if (latitude_two==0) {
            $(".review-tip").css('visibility','initial');
            $(".review-tip").text('请对专业技能进行评价');
            return false;
        }
        if (latitude_three==0) {
            $(".review-tip").css('visibility','initial');
            $(".review-tip").text('请对理解能力进行评价');
            return false;
        }

        if (latitude_label_content == '') {
            $(".review-tip").css('visibility','initial');
            $(".review-tip").text('您还没有对Ta进行评价');
            return false;
        }

     


        if (latitude_one > 0 && latitude_two > 0 && latitude_three > 0 && latitude_label_content != '') {

            if (a == 0) {

                a++;

                var options = {
                    success: function (data) {

                        a = 0;

                        var jsonObject = eval("(" + data + ")");

                        if (jsonObject['res'] == '1') {

                            //setErrorTip('操作成功');

                            getResumeDetailLeft();

                            getReviewScore();

                            getResumeLabel();

                        } else {

                            $(".review-tip").css('visibility','initial');
                            $(".review-tip").text(jsonObject['data']);
                        }
                    }
                };

                $('#resume_latitude_form').ajaxForm(options);

                $("#resume_latitude_form").ajaxSubmit(options);

            }

        } else{

            a = 0;

            hideReviewResume();

            setErrorTip('请全部填写');
        }

        $(".loninContainer").fadeOut();

    }

</script>