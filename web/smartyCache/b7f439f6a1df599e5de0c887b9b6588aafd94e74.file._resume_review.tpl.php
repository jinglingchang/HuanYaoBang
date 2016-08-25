<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-19 11:46:45
         compiled from "/private/var/www/html/employer_tool/Lib/Resumeajax/Tpl/Resumeajax/_resume_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:385603557573d3725aa4882-52988196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f439f6a1df599e5de0c887b9b6588aafd94e74' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resumeajax/Tpl/Resumeajax/_resume_review.tpl',
      1 => 1463626726,
    ),
  ),
  'nocache_hash' => '385603557573d3725aa4882-52988196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	
	<?php if ($_smarty_tpl->getVariable('start')->value['count']>0){?>

	
	<style type="text/css">

	.samp-warp{
		border:solid 1px none;
		font-size: 14px;

		width: 200px;

		height: 100px
	}
	.hoverReviewScore{
		cursor: pointer;	
	}

	.list-iten-div{
		border: solid 1px #e1e1e1;
		 -webkit-box-shadow:0 0 10px #ccc;  
		  -moz-box-shadow:0 0 10px #ccc;  
		  box-shadow:0 0 10px #ccc; 
		  display: none;

		  position: relative;

		  z-index: 9999;

		  background-color:white;
	}

	.resume-review-div{

		width: 175px;

		margin: 13px;

	}
	</style>

	

	<div class="samp-warp">
		<samp class="hoverReviewScore"><?php echo $_smarty_tpl->getVariable('start')->value['count'];?>
人评价：<samp style="color: #3398ff"><?php echo $_smarty_tpl->getVariable('start')->value['fina_score'];?>
分</samp>/5分</samp>

		<div class="list-iten-div">
			<div class='resume-review-div'>
				沟通能力
				<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/star/star<?php echo $_smarty_tpl->getVariable('start')->value['start_info'][1]['new_start'];?>
.png" style="width: 110px;">
			</div>
			<div class='resume-review-div'>
				专业技能
				<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/star/star<?php echo $_smarty_tpl->getVariable('start')->value['start_info'][2]['new_start'];?>
.png" style="width: 110px;">
			</div>
			<div class='resume-review-div'>
				理解能力
				<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/star/star<?php echo $_smarty_tpl->getVariable('start')->value['start_info'][3]['new_start'];?>
.png" style="width: 110px;">
			</div>
		</div>
	</div>

	<script type="text/javascript">

		$(function(){
			$(".hoverReviewScore").hover(function(){

				$(".list-iten-div").show();

			},function(){
				$(".list-iten-div").hide();
			})

		})

	</script>

	<?php }?>
	