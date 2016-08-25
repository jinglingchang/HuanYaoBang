<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-30 16:00:47
         compiled from "/private/var/www/html/employer_tool/Public/html//multPage/slide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2668979235774d1af4ca667-42827772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa534de1914e5756b28f4ca778f39a62c9f4e2e' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//multPage/slide.tpl',
      1 => 1467273555,
    ),
  ),
  'nocache_hash' => '2668979235774d1af4ca667-42827772',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
<head>

</head>
<title></title>

<script type="text/javascript">
    $(document).ready(function () {

        $(".btn-slide").click(function () {

            $(".content-list").slideToggle("slow");

            var rel = $(this).attr('rel');
            if (rel == '0') {
                $(this).text('展开');
                $(this).attr('rel', '1');
            } else {
                $(this).text('收起');
                $(this).attr('rel', '0');
            }

        });
    });
</script>
<style type="text/css"> 

    .slide-warp{
        width: 128px;
        margin-right: 20px;
        position: fixed;
        left: 89.5%;
        top: 28%;
        border: solid 1px #e1e1e1;
        -webkit-box-shadow:0 0 10px #bbb;  
        -moz-box-shadow:0 0 10px #bbb;  
        box-shadow:0 0 10px #bbb;  
    }
    .square-style{
        height: 60px;
        line-height: 60px;
        cursor: pointer;
        text-align: center;
        background: #fff;
        border-bottom: solid 1px #e1e1e1;
        text-align: left;
        padding-left: 20px;
    }
    .square-style img{
        width: 20px;
    }
    /*	.square-style:hover{
                    opacity: 0.8;
            }*/
    .astyle{
        background: #fff;
        color: #999;
    }

    .blurColor{
        color: #3398ff;
    }
    .qr-code-div{
        border: solid 1px #e1e1e1;
        width: 120px;
        height: 120px;
        position: absolute;
        margin-top: -120px;
        margin-left: -120px;
        display: none;
        padding: 5px;
    }

</style>
</head>
<body>

    <div class="slide-warp">

        <div class="content-list">

            <?php if ($_smarty_tpl->getVariable('user_id')->value!=$_smarty_tpl->getVariable('resume_info')->value->resume_info['upload_uid']){?>

            <div class="square-style buyAttr">
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/goumai1.png" />
                <span>打赏</span>
            </div>

            <?php }?>

            <!-- <div class="square-style activateAttr">
    <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/jihuo1.png" />
    <span>激活</span> 
</div> -->
            <div class="square-style verifyAttr">
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png" />
                <span>验证</span>
            </div>
            <div class="square-style evaluateAttr">
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia1.png" />
                <span>评价</span>
            </div>

            <?php if ($_smarty_tpl->getVariable('user_id')->value!=$_smarty_tpl->getVariable('resume_info')->value->resume_info['upload_uid']){?>

            <div class="square-style complaintAttr">
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/tousu1.png" />
                <span>投诉</span>
            </div>

            <?php }?>

            <div class="square-style downloadAttr"  >
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai1.png" />
                <span>下载</span>
            </div>
            <div class="square-style shareAttr" >
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/erweima1.png" />
                <span>分享</span>
            </div>

            <div class="qr-code-div">
                <img src="<?php echo $_smarty_tpl->getVariable('qocde_url')->value;?>
" />
                <!-- <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/banner.png" /> -->
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">

    $(function () {

        getResumeDetailLeft();

    })

    function getResumeDetailLeft() {


        $.ajax({
            type: 'GET',
            data: {
                resume_id: $('#resume_id').val(),
            },
            url: url + "resumeajax/getResumeDetailStatus",
            success: function (data) {

                var user_id = data.user_id;
                var resume_id = data.resume_id;

                // 0非本人上传，1 本人上传
                var resume_upload_status = data.resume_upload_status;

                // 0 已购买，1 未购买
                var resume_buy_status = data.resume_buy_status;

                // -1 未购买过简历 不能进行激活操作，1 没有完善过简历信息，2 已经完善过简历信息 并已经发送过激活邀请
                var resume_activate_status = data.resume_activate_status;

                // -1 简历未激活 不能进行简历认证，0 还没有进行过验证，1 认证正确 可以进行验证和评价操作，2认证错误 不能进行验证和评价
                var resume_auth_status = data.resume_auth_status;

                // -1 不能进行验证，1 可以进行验证
                var resume_check_status = data.resume_check_status;

                // -1 不能进行评价，1 可以进行评价，2 已经评价
                var resume_review_status = data.resume_review_status;

                // -1 不能进行投诉，1 可以进行投诉
                var resume_complaint_status = data.resume_complaint_status;


                $('.resume-detail-left-area').hide();


                // 进行 购买的判断处理 resume_buy_status 0 已购买，1 未购买
                if (resume_buy_status == 0) { // 已购买

                    $(".buyAttr").addClass('astyle');
                    $(".buyAttr span").text('已打赏');

                    $('.buyAttr span').css("color", '#999');

                    $(".buyAttr").attr('onclick', '');


                    $(".buyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/goumai2.png');

                    $(".buyAttr").unbind("mouseenter").unbind("mouseleave");

                    $('#buyed_operation').show();

                }
                if (resume_buy_status == 1) {

                    $(".buyAttr").removeClass('astyle');
                    $(".buyAttr").attr('onclick', 'buy_resume()');

                    $(".buyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/goumai1.png');
                    $(".buyAttr").hover(function () {
                        // $(this).css('color','#3398ff');
                        // $(".buyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/goumai4.png');
                        $(this).css('background', '#3398ff');
                        $(this).css('color', '#fff');
                        $(".buyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/goumai3.png');

                    }, function () {
                        // $(this).css('color','#333'); 
                        // $(".buyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/goumai1.png');
                        $(this).css('background', '#fff');
                        $(this).css('color', '#333');
                        $(".buyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/goumai1.png');
                    })

                    $('#buy_operation').show();
                }

                // 进行 简历认证判断处理 -1 简历未激活 不能进行简历认证，0 还没有进行过验证，1 认证正确 可以进行验证和评价操作，2认证错误 不能进行验证和评价
                if (resume_auth_status == -1) {

                    switch (resume_activate_status) {

                        case -1:

                            $(".verifyAttr").addClass('astyle');

                            $('.verifyAttr span').css("color", '#999');

                            $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng2.png');

                            break;

                        case 1:

                            $(".verifyAttr").removeClass('astyle');

                            $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');

                            $(".verifyAttr").attr('onclick', 'supplementResumeClick()');

                            $(".verifyAttr span").css('color','#333');

                            $(".verifyAttr").hover(function () {
                                // $(this).css('color','#3398ff');
                                // $(".verifyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng4.png');
                                $(this).css('background', '#3398ff');
                                $(".verifyAttr span").css('color','#fff');
                                $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng3.png');

                            }, function () {
                                // $(this).css('color','#333'); 
                                // $(".verifyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                                $(this).css('background', '#fff');
                                $(".verifyAttr span").css('color','#333');
                                $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                            })

                            break;
                    }

                } else if (resume_auth_status == 0) {

                    $(".verifyAttr").removeAttr('astyle');
                    $(".verifyAttr").attr('onclick', 'reProblemClick()');

                    $(".verifyAttr span").css('color','#333');

                    $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                    $(".verifyAttr").hover(function () {
                        // $(this).css('color','#3398ff');
                        // $(".verifyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng4.png');
                        $(this).css('background', '#3398ff');

                        $(".verifyAttr span").css('color','#fff');

                        $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng3.png');

                    }, function () {
                        // $(this).css('color','#333'); 
                        // $(".verifyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                        $(this).css('background', '#fff');

                        $(".verifyAttr span").css('color','#333');

                        $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                    })

                } else if (resume_auth_status == 1) {

                    if (resume_check_status != -1) {
                        $(".verifyAttr").removeAttr('astyle');
                        $(".verifyAttr").attr('onclick', 'checkTruthClick()');

                        $(".verifyAttr span").css('color','#333');

                        if(resume_check_status == 1){

                            var check_name = '验证';

                        } else if(resume_check_status == 2){

                            var check_name = '验证';

                        }
                        $(".verifyAttr span").text(check_name);
                        $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                        $(".verifyAttr").hover(function () {
                            // $(this).css('color','#3398ff');
                            // $(".verifyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng4.png');
                            $(this).css('background', '#3398ff');
                            $(".verifyAttr span").css('color','#fff');
                            $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng3.png');

                        }, function () {
                            // $(this).css('color','#333'); 
                            // $(".verifyAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                            $(this).css('background', '#fff');
                            $(".verifyAttr span").css('color','#333');
                            $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                        })

                    }

                } else if (resume_auth_status == 2) {

                    $(".verifyAttr").removeAttr('astyle');

                    $(".verifyAttr span").text('认证错误');
                    $(".verifyAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/yanzheng1.png');
                    $(".verifyAttr").removeAttr('onclick');
                }


                // 进行 点评的判断处理 -1 不能进行评价，1 可以进行评价，2 已经评价
                if (resume_review_status == -1) {

                    $(".evaluateAttr").addClass('astyle');

                     $('.evaluateAttr span').css("color", '#999');

                    $(".evaluateAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia2.png');

                    $(".evaluateAttr").unbind("mouseenter").unbind("mouseleave");

                } else if (resume_review_status == 1) {

                    $(".evaluateAttr").removeClass('astyle');   


                    $(".evaluateAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia1.png');
                    $(".evaluateAttr").attr('onclick', 'reviewResume()');
                    $(".evaluateAttr").hover(function () {
                        // $(this).css('color','#3398ff');
                        // $(".evaluateAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia4.png');
                        $(this).css('background', '#3398ff');
    
                        $('.evaluateAttr span').css("color", '#fff');

                        $(".evaluateAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia3.png');

                    }, function () {
                        // $(this).css('color','#333'); 
                        // $(".evaluateAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia1.png');
                        $(this).css('background', '#fff');
          
                        $('.evaluateAttr span').css("color", '#333');

                        $(".evaluateAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia1.png');
                    })

                } else {

                    $(".evaluateAttr").addClass('astyle');

                    $(".evaluateAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/pingjia2.png');

                    $(".evaluateAttr").attr('onclick', '');

                    $('.evaluateAttr span').css("color", '#999');

                    $(".evaluateAttr span").text('已点评');

                    $(".evaluateAttr").unbind("mouseenter").unbind("mouseleave");
                }

                // 进行 投诉的判断处理 -1 不能进行评价，1 可以进行评价
                if (resume_complaint_status == -1) {

                    $(".complaintAttr").addClass('astyle');
                    $(".complaintAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/tousu2.png');

                    $(".complaintAttr").attr('onclick', '');

                    $('.complaintAttr span').css("color", '#999');

                    $(".complaintAttr span").text('投诉');

                    $(".complaintAttr").unbind("mouseenter").unbind("mouseleave");


                } else {

                    $(".complaintAttr").removeClass('astyle');
                    $(".complaintAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/tousu1.png');
                    $(".complaintAttr").attr('onclick', 'feedbackClick()');
                    $(".complaintAttr span").text('投诉');

                    $(".complaintAttr span").css('color','#333');

                    $(".complaintAttr").hover(function () {
                        // $(this).css('color','#3398ff');
                        // $(".complaintAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/tousu4.png');
                        $(this).css('background', '#3398ff');

                        $(".complaintAttr span").css('color','#fff');

                        $(".complaintAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/tousu3.png');

                    }, function () {
                        // $(this).css('color','#333'); 
                        // $(".complaintAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/tousu1.png');
                        $(this).css('background', '#fff');
  
                        $(".complaintAttr span").css('color','#333');

                        $(".complaintAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/tousu1.png');
                    })
                }

                if(resume_buy_status == 0){

                    
                    $(".downloadAttr span").text('下载');

                    $('.downloadAttr').attr('onclick','javascript:window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/download?id=<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
"');

                    $(".downloadAttr").removeClass('astyle');


                    $(".downloadAttr span").css('color','#333');

                    $(".downloadAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai1.png');


                    $(".downloadAttr").hover(function () {
                    // $(this).css('color','#3398ff');
                    // $(".downloadAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai4.png');
                        $(this).css('background', '#3398ff');

                        $(".downloadAttr span").css('color','#fff');

                        $(".downloadAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai3.png');

                    }, function () {
                            // $(this).css('color','#333');
                            // $(".downloadAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai1.png'); 
                        $(this).css('background', '#fff');
                       $(".downloadAttr span").css('color','#333');
                        $(".downloadAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai1.png');
                    })

                } else{

                    $(".downloadAttr").addClass('astyle');

                    $(".downloadAttr span").css('color','#999');

                    $(".downloadAttr span").text('下载');

                    $(".downloadAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai2.png');

                    //$('.downloadAttr').attr('onclick','buy_resume()');

                    $(".downloadAttr").unbind("mouseenter").unbind("mouseleave");

                }

                $(".shareAttr").hover(function () {
                    // $(this).css('color','#3398ff');
                    // $(".downloadAttr img").attr('src','<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/xiazai4.png');
                    $(this).css('background', '#3398ff');
                    $(this).css('color', '#fff');
                    $(".qr-code-div").fadeIn();
                    $(".shareAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/erweima3.png');


                }, function () {
                    // $(this).css('color','#333');
                    $(".shareAttr img").attr('src', '<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/icon/erweima1.png');
                    $(this).css('background', '#fff');
                    $(this).css('color', '#333');
                    $(".qr-code-div").fadeOut();

                })
            },
            error: function () {
                alert("失败！");
            }
        })

    }


</script>

</html>