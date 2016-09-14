<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 15:13:39
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/User/Tpl/User/new_creat_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12133908175732dba39cd983-31563336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d455c267966f08a337580fefd440d8c0767c4c4' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/User/Tpl/User/new_creat_account.tpl',
      1 => 1462881146,
    ),
  ),
  'nocache_hash' => '12133908175732dba39cd983-31563336',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style type="text/css">
	.selectRole li{
		text-align: left;
		font-size: 14px;
	}
	.loading {
    position: fixed;
    width: 100%;
    background: rgba(0,0,0,0.5);
    height: 135vh;
    padding-top: 16%;
    vertical-align: middle;
    display: none;
    z-index: 999999;
    margin-top: -70px;
}
</style>

<div class="hl-warp_div">
	<div class="wap-div-warp">

		<form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/account/createUser' id='userRegisterForm' name='userRegisterForm' method='post'>

			<input type='hidden' name='invite_code' id='invite_code' value='<?php echo $_smarty_tpl->getVariable('invite_code')->value;?>
'>

			<div class="page-title-div">创建账号</div>

			<div class="hl-div-width" style="width:320px;text-align: left;margin: 0 auto;">请填写个人信息</div>
			<div class="row-height-div" style="margin-top: 0px;">

				<input type="text" class="new-open-account-input nickNameVal" name="nickname" placeholder="请填写昵称" />

			</div>

			<input type="hidden" class="roleTitle" id="title" name="title" value="" />
			<div class="hl-div-width" style="width:320px; text-align: left;margin: 0 auto; margin-top: 12px;"></div>
			<div class="row-height-div" style="margin-top: 0px;">
		        <div id="dict_skill" style="width: 320px;" class="selectWrap">
		            <div class="selectBtn" id="selectProvince" style="background: #fff;
		            border-radius: 3px;text-align: left;border: solid 1px #e1e1e1;">
		                <a class="default-val-buy-number">请选择您的职业</a>
		            </div>
		            <ul style="display: none;" class="select_ul selectRole">

		            	<li val="0">猎头</li>
		                <li val="0">HR</li>
		                
<!-- 		                <li val="0">个人</li>-->		            
					</ul>
		        </div>

			</div>


			<div class="hl-div-width" style="width:320px;text-align: left;margin: 0 auto; margin-top: 20px;">请填写邮箱和密码</div>
			<div class="row-height-div" style="margin-top: 0px;">

				<input type="text" class="new-open-account-input emailVal" name="email" placeholder="电子邮箱作为您的账户名" />

			</div>
			<div class="row-height-div">
				<input type="text" class="new-open-account-input pwdVal" name="password"  placeholder="请设置6位以上密码" />
			</div>
			<div style="width:320px;text-align: left;margin: 0 auto;font-size: 16px;margin-top: 35px;">请验证您的手机</div>
			<div style="border:1px solid #CCC;height:48px;width:320px;text-align: left;margin: 0 auto;border-radius: 3px;" class="row-height-div">
				<input type="text"  style="border:none;border-right:1px solid #ccc;height:46px;width:210px;font-size: 14px;padding-left: 1em; " id='phone' name="phone"  placeholder="手机号" class="phoneVal" />
				<span style="color:#3398ff;font-size: 14px;padding-left: 1em;cursor: pointer;"  id='checkCode' onclick='sendMessage(this);'>获取验证码</span>
			</div>
			<div class="row-height-div">
				<input type="text" class="new-open-account-input codeVal" name="code" placeholder="验证码" />
			</div>

			<div class="row-height-div">
				<div style="width: 320px;margin: 0 auto;text-align: left;font-size: 14px; color: #3398ff">
					<input type=checkbox checked id="checkAgree" />
					<a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/homepage/agree" target= "_blank" style="margin-left: 5px; cursor: pointer; color: #3398ff"> 
						<samp style="color:#333;">我已同意</samp> 《众人识才注册协议》
					</a> 
				</div>
			</div>

			<div class="row-height-div">
				<button type="button" class="new-open-account-button atonceCrear" onclick="verification()">立即创建</button>
			</div>

		</form>

		<div class="hl-div-width row-height-div">
			<a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/login"  class="new-open-a">已有账号,点击登陆</a>
		</div>
	</div>
</div>

<script type="text/javascript">

	$("#checkAgree").click(function(){

		if ($(this).attr('checked')) {

			$(".atonceCrear").css('background','#3398ff')
			$(".atonceCrear").attr('onclick','verification()');
		}else{

			$(".atonceCrear").attr('onclick','');
			$(".atonceCrear").css('background','#ddd')

		}

		
	})

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
        $(this).next().show();
    })

    $(".select_ul li").click(function (event) {
        /* Act on the event */
        
        var selectVal = $(this).text();
        $(this).parents().prev('.selectBtn').children().text(selectVal);
        $(".roleTitle").val(selectVal);
        $(".select_ul").hide();
    })


	function verification(){
		var emailVal = $(".emailVal").val();
		var roleTitle = $(".roleTitle").val();
		var pwdVal = $(".pwdVal").val();
		var phoneVal = $(".phoneVal").val();
		var codeVal = $(".codeVal").val(); 
		var nickNameVal = $(".nickNameVal").val(); 

		if (check.isEmpty(nickNameVal)) {
			setErrorTip('昵称不能为空');
			return false;
		}
		if (check.isEmpty(roleTitle)) {
			setErrorTip('请选择您的职业');
			return false;
		}

		if (!check.isEmail(emailVal)) {
			setErrorTip('邮箱格式不正确');
			return false;
		}

		if (check.isEmpty(pwdVal)) {
			setErrorTip('密码不能为空');
			return false;
		}

		if (!check.isPhone(phoneVal)) {
			setErrorTip('手机号码格式不正确');
			return false;
		}

		if (check.isEmpty(codeVal)) {
			setErrorTip('验证码不能为空');
			return false;
		}

		hirelibEngine.ajaxForm('userRegisterForm',function success(data){

			var dataObj=eval("("+data+")");

			if(dataObj['res'] == '1'){

				window.location.href = dataObj['data']

			} else{

				setErrorTip(dataObj['data']);

			}

		},function error(){


		},1)

	}

// alert(check.isEmpty(''));

</script>
