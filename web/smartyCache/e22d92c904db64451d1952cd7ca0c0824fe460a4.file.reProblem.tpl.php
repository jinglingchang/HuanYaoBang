<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 11:02:53
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/reProblem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16505876485739385df3c642-20933528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e22d92c904db64451d1952cd7ca0c0824fe460a4' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/reProblem.tpl',
      1 => 1463367767,
    ),
  ),
  'nocache_hash' => '16505876485739385df3c642-20933528',
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

	.select_ul li{

		background: #fff;
	    text-indent: 17px;

	}
	.default-val-score-sort{
		display: block;
	    height: 40px;
	    margin-top: -10px;
	    margin-bottom: -6px;
	    line-height: 40px;
	}

</style>
<script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

<div class="loninContainer reProblemDg" style="display:none;">
	<div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
	<div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 418px; padding-left: 50px;"> <i class="close" style="background: none;">
		<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" />
	</i>
		<div class="panel_info">
			<div class="panel_tab">
				<div class="title">
					<div class="fl">认证问题</div>
<!-- 					<label class="fr">
						还没有众人识才账号？
						<a href="#">马上注册</a>
					</label> -->
				</div>
				<div class="clear"></div>
				<div id="con_login_user">
					<div>Ta的月是哪一天？</div>

					<!-- <input class="new-open-account-input" id="username" autofocus="autofocus" type="email" placeholder="请输入姓名"> -->
					<div style="width:91%; margin-top: 10px;" class="selectWrap" id="selectProvince" >
                        <div class="selectBtn" style="background: #fff;text-align: left;">
                            <a class="default-val-score-sort">请选择月份</a>
                        </div>

                        <ul style="display: none;" class="select_ul">

                        	 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['name'] = "sn";
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["sn"]['total']);
?>


                            <li val="0" onclick='javascript:$("#check_month").val("<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
")'><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']+1;?>
</li>

              
                            <?php endfor; endif; ?>

                        </ul>
                    </div>

					<div class="errorTip">sadas</div>
					<button type="button" style='height:48px;' id="authoBtn" class="new-open-account-button" onclick="reProblemClickSubmit()">验证</button> 
			</div>
		</div>
	</div>
	<div style="height: 20px;"></div>
</div>
</div>

<input type='hidden' name='check_month' id='check_month' value='0'>

<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>
<script type="text/javascript">
	$(function() {
		// body...
		$(".close-mask").click(function(){

			$(".loninContainer").fadeOut();
		})

		$('#username,#password').bind('input propertychange', function() {
		    $(".errorTip").css('visibility','hidden');
		});

		//点击空白地方 隐藏 下拉列表  id有问题#selectProvince
        $(document).on("click", function (e) {

           if ($(e.target).parents(".selectWrap").length == 0)
            {
                $(".select_ul").fadeOut();
            }
        })

         // 下拉框
        $(".selectBtn").click(function (event) {
            /* Act on the event */
            $(".select_ul").hide();
            $(this).next().show();
        })

        $(".select_ul li").click(function (event) {
            /* Act on the event */
            var selectVal = $(this).text();

            $(this).parents().prev('.selectBtn').children().text(selectVal);
            $(".select_ul").hide();
        })


	})

	function reProblemClickSubmit(){

		 var check_month = $('#check_month').val()

		 var resume_id = $('#resume_id').val()

		 if(check_month > 0){

		 	var ajaxurl = url + 'resumeajax/submitResumeCheck'

		 	var params = new FormData();

            params.append('answer',check_month);

            params.append('resume_id',resume_id);

            hirelibEngine.ajaxNative(ajaxurl, 'post', params, function success(data) {

            	var data = data.replace(/(^\s+)|(\s+$)/g,"");

            	getResumeDetailLeft(); 

                switch(parseInt(data)){

                	case 2:

                		$(".loninContainer").fadeOut();

                		checkTruthClick();

                		//验证成功 跳出 

                		break;

                	case 1:

                		setErrorTip('认证失败');

                		break;

                	case 0:

                		setErrorTip('已进行过认证操作');

                		break;


                }


            }, function error(data) {


            }, 0);

		 	$(".loninContainer").fadeOut();

		 } else{

		 	setErrorTip('请选择日期');
		 }

		
	}

</script>

