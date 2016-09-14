<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-17 11:03:19
         compiled from "/private/var/www/html/employer_tool/Public/html//multPage/taskMask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601992572573a89f77225a0-31933134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e6f94814b58fc2c52111804e8072c5229fa3463' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//multPage/taskMask.tpl',
      1 => 1463453212,
    ),
  ),
  'nocache_hash' => '1601992572573a89f77225a0-31933134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style type="text/css">
	
	.taskMask{
	    border: solid 1px #e1e1e1;
	    width: 350px;
	    height: 200px;
	    position: absolute;
	    right: 0;
	    bottom: 0;
	    background: #fff;
	    -webkit-box-shadow:0 0 10px rgba(0, 0, 0, .5);  
        -moz-box-shadow:0 0 10px rgba(0, 0, 0, .5);  
  	    box-shadow:0 0 10px rgba(0, 0, 0, .5); 
  	    margin-right: 20px;
  	    margin-bottom: 20px;
	}
	.close-title{
		font-size: 24px;
	    float: right;
	    margin-right: 10px;
	}
	.task-text-content{
		border:solid 1px none;
		width: 90%;
		margin: 0 auto;
		height: 82px;
		padding: 5px 12px;
		text-align: center;
		padding-top: 20px;
	}
	.bottom-btn{
		border-top: solid 1px #e1e1e1;
		 height: 60px;
	    line-height: 60px;
	    text-align: center;
	    margin-top: 15px;
	}
	.bottom-btn:hover{
		color: #3398ff;
		cursor: pointer;
	}
	.bottom-btn a:hover{
		text-decoration: none;
		color: #3398ff;
		cursor: pointer;
		display: block;
	}

</style>

<div class="taskMask">

	<div class="close-title">
		<span style="cursor: pointer;">×</span>
	</div>
	<div style="clear: both;"></div>
	<div class="task-text-content">
		完成新手任务领取100元奖励
	</div>

	<div class='bottom-btn'>
		<a href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/user/personAccount" target='_blank'>立即领取</a>
	</div>
	
</div>

<script type="text/javascript">
	
	$(function(){

		$(".close-title").click(function(){
			$(".taskMask").fadeOut();
		})
	})

</script>

