<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 11:40:09
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resumeajax/Tpl/Resumeajax/_resume_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6758794365732a999e4d540-04057464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2a813db77aa216ed7f45723c9912577741ec981' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Resumeajax/Tpl/Resumeajax/_resume_review.tpl',
      1 => 1461763643,
    ),
  ),
  'nocache_hash' => '6758794365732a999e4d540-04057464',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	
	<?php if ($_smarty_tpl->getVariable('start')->value['count']>0){?>

	
	<style type="text/css">

	.samp-warp{
		border:solid 1px none;
		width: 190px;
		font-size: 15px;
	}
	.hoverReviewScore{
		cursor: pointer;	
	}

	.list-iten-div{
		border: solid 1px #e1e1e1;
		 -webkit-box-shadow:0 0 10px #ccc;  
		  -moz-box-shadow:0 0 10px #ccc;  
		  box-shadow:0 0 10px #ccc; 
		  padding-left: 5px;
		  padding-bottom: 5px; 
		  display: none;
	}
	</style>

	

	<div class="samp-warp">
		<samp class="hoverReviewScore"><?php echo $_smarty_tpl->getVariable('start')->value['count'];?>
人评价：<samp style="color: #3398ff"><?php echo $_smarty_tpl->getVariable('start')->value['fina_score'];?>
分</samp>/5分</samp>

		<div class="list-iten-div">
			<div>
				沟通能力
				<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/star/star<?php echo $_smarty_tpl->getVariable('start')->value['start_info'][1]['new_start'];?>
.png" style="width: 110px;">
			</div>
			<div>
				专业技能
				<img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/star/star<?php echo $_smarty_tpl->getVariable('start')->value['start_info'][2]['new_start'];?>
.png" style="width: 110px;">
			</div>
			<div>
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

				$(".list-iten-div").fadeIn();

			},function(){
				$(".list-iten-div").fadeOut();
			})

		})

	</script>

	<?php }?>
	