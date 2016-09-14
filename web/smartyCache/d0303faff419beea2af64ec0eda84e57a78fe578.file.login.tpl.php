<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-10 16:50:38
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//multPage/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7763169075731a0de6d1633-14417149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0303faff419beea2af64ec0eda84e57a78fe578' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//multPage/login.tpl',
      1 => 1461215373,
    ),
  ),
  'nocache_hash' => '7763169075731a0de6d1633-14417149',
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

</style>
<script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

<div class="loninContainer" style="display:none;">
	<div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
	<div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 418px; padding-left: 50px;"> <i class="close" style="background: none">
		<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" />
	</i>
		<div class="panel_info">
			<div class="panel_tab">
				<div class="title">
					<div class="fl">用户登录</div>
					<label class="fr">
						还没有众人识才账号？
						<a onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/register'">马上注册</a>
					</label>
				</div>
				<div class="clear"></div>
				<div id="con_login_user">
					<input class="new-open-account-input" id="username" autofocus="autofocus" type="email" placeholder="请输入邮箱">
						<input class="new-open-account-input" id="password" type="password" placeholder="密码" style="margin-top:10px; margin-bottom:20px;">
						<div class="errorTip">sadas</div>
					<button type="submit" style='height:48px;' id="loginBtn" class="new-open-account-button" onclick="userLogin()">登录</button> 
			</div>
		</div>
	</div>
	<div class="registered"></div>
</div>
</div>

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
	})


	function userLogin() {

	 if (!check.isEmail($("#username").val())) {
		$(".errorTip").css('visibility','inherit');
        $(".errorTip").text('邮箱格式不正确,请检查后重新输入');
        return false;
      }
      if (check.isEmpty($("#password").val())) {
      	$(".errorTip").css('visibility','inherit');
        $(".errorTip").text('密码不能为空');
        return false;
      }
		// body...
		var opt={
                   email:$("#username").val(),
                   password:$("#password").val()
                };

            $.ajax({
                type:'post',
                url:url+'user/userLogin',
                data:opt,
                success:function(data){
                        
                    var data = data.replace(/(^\s+)|(\s+$)/g, "")
    					
                        if(data == 1){
                        	
                            window.location.reload();

                        }else{
                        	$(".errorTip").css('visibility','inherit');
                        	$(".errorTip").text('登录失败，请稍后再试。');
                        }
                },
                error:function(err){
                   $(".errorTip").css('visibility','inherit');
                    $(".errorTip").text('网络异常...');
                }
            });

	}


</script>

