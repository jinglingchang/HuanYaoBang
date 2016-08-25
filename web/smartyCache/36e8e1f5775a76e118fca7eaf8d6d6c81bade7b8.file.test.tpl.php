<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-14 17:57:09
         compiled from "/private/var/www/html/employer_tool/Lib/Homepage/Tpl/Homepage/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1766214956575fd4f569d806-03156799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e8e1f5775a76e118fca7eaf8d6d6c81bade7b8' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Homepage/Tpl/Homepage/test.tpl',
      1 => 1465898218,
    ),
  ),
  'nocache_hash' => '1766214956575fd4f569d806-03156799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="hl-warp_div">
	<div class="wap-div-warp">

		<form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
homepage/testSalary' method='post' id='userRegisterForm' name='userRegisterForm'  enctype="multipart/form-data">

			<div class="page-title-div">测试薪资数据</div>

			<div class="row-height-div">
				<input type="file" class="new-open-account-input pwdVal" name="file" id='file'  placeholder="上传文件" />
			</div>
			
			<div class="row-height-div">
				<button type="button" class="new-open-account-button" onclick="verification()">保存</button>
			</div>

		</form>
	</div>
</div>

<script type="text/javascript">

	function verification(){

		$('#userRegisterForm').submit();

		// var ajaxurl = url +'homepage/testSalary';

  //       var params = new FormData();

  //       params.append('file',document.getElementById('file').files[0]);

  //       hirelibEngine.ajaxNative(ajaxurl, 'post', params, function success(datas) {

  //       	alert(datas)
            

  //       }, function error() {


  //       }, 0)

	}

// alert(check.isEmpty(''));

</script>
