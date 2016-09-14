<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-27 23:39:01
         compiled from "/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_benefit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13761435357486a15a59039-65932754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2730cb7e54e9698c4250e4772c805c212f8175ab' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/User/Tpl/User/user_benefit.tpl',
      1 => 1464363524,
    ),
  ),
  'nocache_hash' => '13761435357486a15a59039-65932754',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div style='height:100px;'>&nbsp;</div>

<div class='benfit-body benfit-body-rence'>

	<div style='height:49px;'></div>

	<div class='benfit-body-div benfit-body-div-style'>

		<div class='benfit-div1 benfit-div1-style'>

			 <div style='width:527px;margin:0 auto;height: 105px;border-bottom: 1px solid rgba(238,238,238,100)'>

			 	<div style='padding-top: 28px;font-size: 12px;color: rgba(155,155,155,100)'>我的收益（元）</div>

			 	<div style='padding-top: 10px;'>

			 		<span style='float: left;display:inline-block;height: 35px;font-size: 28px;color: red;line-height: 36px;'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->benefit_money;?>
</span>

			 		<span>

			 			<?php if ($_smarty_tpl->getVariable('info')->value['is_identification_auth']==''||$_smarty_tpl->getVariable('info')->value['is_identification_auth']==-1||$_smarty_tpl->getVariable('info')->value['is_identification_auth']==2){?>

			 				<button style='float: left;margin-left:53px;' class='rex_btn rex_btn_bule'   onclick="$('.authenticationDg').show();">提&nbsp;&nbsp;现</button>

			 				<!-- 身份验证 -->

							<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/resume/authentication.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

						<?php }else{ ?>

						<button style='float: left;margin-left:53px;' class='rex_btn rex_btn_bule'  onclick='window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/withdraw")' >提&nbsp;&nbsp;现</button>

						<?php }?>
				    </span>

			 	</div>

			 	<div style='clear:both;height:14px;'>&nbsp;</div>

			 </div>

			 <div style='padding-top:18px'>

			 	<div style='width:197px;float:left;font-size: 12px;color: rgba(155,155,155,100);border-right: 1px solid rgba(238,238,238,100)'>

			 		<div style='width:108px;margin: 0 auto;margin-top: 14px;'>

			 			<div >上传简历收益（元）</div>

			 			<div style='font-size: 24px;color: #333;text-align: center'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->upload_benfit;?>
</div>

			 		</div>

			 	</div>

			 	<div style='width:197px;float:left;font-size: 12px;color: rgba(155,155,155,100);border-right: 1px solid rgba(238,238,238,100)'>

			 		<div style='width:108px;margin: 0 auto;margin-top: 14px;'>

			 			<div>验证简历收益（元）</div>

			 			<div style='font-size: 24px;color: #333;text-align: center'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->check_benfit;?>
</div>

			 		</div>

			 	</div>

			 	<div style='width:197px;float:left;font-size: 12px;color: rgba(155,155,155,100)'>

			 		<div style='width:108px;margin: 0 auto;margin-top: 14px;'>

			 			<div>评价简历收益（元）</div>

			 			<div style='font-size: 24px;color: #333;text-align: center'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->review_benfit;?>
</div>

			 		</div>

			 	</div>


			 </div>

		</div>

		<div style='float:left;width:258px;height:200px;margin-top: 28px;'>

				<div style='width:84px;margin: 0 auto;float:left;font-size: 12px;color: rgba(155,155,155,100);margin-left: 21px;'>

					<div>今日收益（元）</div>

					<div style='font-size: 18px;color: #333;text-align: center;padding-top: 12px;'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->today_benfit;?>
</div>

				</div>

				<div style='width:84px;margin: 0 auto;float:left;font-size: 12px;color: rgba(155,155,155,100);margin-left: 46px;'>

					<div>本周收益（元）</div>

					<div style='font-size: 18px;color: #333;text-align: center;padding-top: 12px;'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->week_benfit;?>
</div>

				</div>


			</div>

		</div>

	<!-- 下半部分开始 -->

	<div style='margin-left: 76px;margin-top: 40px;'>

		<div style='width:860px;height:36px;background-color: #EBEBEB;line-height: 36px;color:#4D4D4D;text-align: center;font-size: 14px;'>每次被其他用户打赏，都会获取收益</div>

		<div style='margin-top: 22px;'>

			<div style='width:240px;min-height:300px;float:left;background-color: rgba(243,243,243,100);font-size: 14px;border:1px solid #E6E6E6'>

				<div style='margin-top: 41px;margin-left: 24px;margin-right: 24px;font-size: 14px;text-align: center;'>已上传简历<span style='display: inline-block;text-align: right;'>&nbsp;<?php echo $_smarty_tpl->getVariable('userBenfit')->value->resume_upload_number;?>
&nbsp;</span>份</div>

				<div style='margin: 0 auto;margin-top: 36px;width:118px;font-size: 14px;text-align: center;height:35px;'>超过<span style='font-size: 26px;color:red'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->user_over;?>
</span>用户</div>

				<div style='margin:0 auto;margin-top: 62px;width:90px;'>

					<button  class='rex_btn rex_btn_bule benfit_btn_default' style='background-color: white;color:black;margin: 0;padding:0;font-size: 12px;border:1px solid #B5B5B5;line-height: 30px;height:30px;'  onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management"' >上传更多简历</button>

				</div>

				<div style='text-align: right;margin-right: 7px;font-size: 12px;margin-top: 55px;margin-bottom: 9px;'>

					<span>收益:<span style='color:red;font-size: 12px;'>2.4元/次</span></span>

				</div>

			</div>

			<div  style='width:240px;min-height:300px;float:left;background-color: rgba(243,243,243,100);margin-left: 77px;;border:1px solid #E6E6E6'>

				<div style='margin-top: 37px;margin-left: 24px;margin-right: 24px;font-size: 14px;text-align: center;'>已验证简历<span style='display: inline-block;text-align: right;'>&nbsp;<?php echo $_smarty_tpl->getVariable('userBenfit')->value->resume_week_number;?>
&nbsp;份</span></div>

				<div style='margin-top: 31px;margin-left: 21px;margin-right: 19px;text-align: center;font-size: 14px;'>

					<div>待验证简历数</div>

					<div style='font-size: 26px;color:red;'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->over_check_number;?>
</div>

				</div>

				<div style='margin-top: 46px;margin-left: 37px;margin-right: 33px;text-align: center;'>

					<button  class='rex_btn rex_btn_bule benfit_btn_default' style='background-color: white;color:black;margin: 0;padding:0;font-size: 12px;border:1px solid #B5B5B5;line-height: 30px;height:30px;' onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management"' >验证简历</button>

				</div>

				<div style='margin-top: 55px;text-align: right;margin-right: 7px;font-size: 12px;margin-bottom: 9px;'>

					<span>收益:<span style='color:red;font-size: 12px;'>0.6~4.8元/次</span></span>

				</div>

			</div>

			<div  style='width:240px;min-height:300px;float:left;background-color: rgba(243,243,243,100);margin-left: 63px;border:1px solid #E6E6E6'>

				<div style='margin-top: 37px;margin-left: 24px;margin-right: 24px;font-size: 14px;text-align: center;'>已评价简历<span style='display: inline-block;text-align: right;'>&nbsp;<?php echo $_smarty_tpl->getVariable('userBenfit')->value->resume_review_number;?>
&nbsp;</span>份</div>

				<div style='margin-top: 31px;margin-left: 21px;margin-right: 19px;text-align: center;font-size: 14px;'>

					<div>待评价简历数</div>

					<div style='font-size: 26px;color:red;'><?php echo $_smarty_tpl->getVariable('userBenfit')->value->over_review_number;?>
</div>

				</div>

				<div style='margin-top: 46px;margin-left: 37px;margin-right: 33px;text-align: center;'>

					<button  class='rex_btn rex_btn_bule benfit_btn_default' style='background-color: white;color:black;margin: 0;padding:0;font-size: 12px;border:1px solid #B5B5B5;line-height: 30px; height:30px;'  onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
resume/resume_management"' >评价简历</button>

				</div>

				<div style='margin-top: 55px;text-align: right;margin-right: 7px;font-size: 12px;margin-bottom: 15px;'>

					<span>收益:<span style='color:red;font-size: 12px;'>1.6元/次</span></span>

				</div>

			</div>

		</div>

	</div>


</div>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/css/user_benefit.css"> 

<script>

$(function(){

	$('.benfit_btn_default').mouseover(function(){

		$(this).css('background-color','#3398ff');

		$(this).css('color','#fff');

		$(this).css('border','none');
	})

	$('.benfit_btn_default').mouseout(function(){


		$(this).css('background-color','white');

		$(this).css('color','black');

		$(this).css('border','1px solid #B5B5B5');

	})
})


</script>