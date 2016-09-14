<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-13 17:58:29
         compiled from "/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14818113915735a545a1d8a0-20460270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc6a1a3b0bb208bfd5dac759c124541ce928e2e' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Resume/Tpl/Resume/resume_edit.tpl',
      1 => 1463129245,
    ),
  ),
  'nocache_hash' => '14818113915735a545a1d8a0-20460270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"></head>

	<style type="text/css">
	body{
		background: #eee;
	}
	*:focus {
    	outline: none;
	}
	.hl-warp-div{
		width: 1200px;
		background: #fff;
		border: solid 1px #e1e1e1;
		min-height: 500px;
		margin: 0 auto;
	}
	.title-div{
		height: 80px;
		line-height: 80px;
		text-align: center;
		/*border: solid 1px red;*/
	}
	.title-div button{
		width: 140px;
	    height: 40px;
	    background: #333;
	    color: #fff;
	    border: none;
	    font-size: 15px;
	    margin-top: 20px;
	    cursor: pointer;
	}
	.title-div button:hover{
		color: #333;
		border: solid 1px #333;
		background: #fff;
	}
	.upload-table{
		width: 100%;
		border: solid 1px #e1e1e1;
		border-collapse:collapse;
		margin-top: 30px;
		border-right: none;
		border-left: none;
		margin: 0 auto;
	}
	.upload-table tr td{
		/*border: solid 1px red;*/
/*		height: 300px;
		width: 600px;*/
	}
/*	.resume-content{
		border-right: solid 1px #e1e1e1;height: 600px;overflow:auto;
	}*/
	.h5-resume{
		/*height: 600px;*/
		overflow:auto;
	}

</style>

<body>

	<div style="height:50px;"></div>
	<div class="hl-warp-div">
		<table class="upload-table">
			<tr>
				<td style="vertical-align: top; width: 47%;">
					<div style="width: 650px;margin: 0 auto;border: solid 1px #e1e1e1;">
						<div style="border: solid 1px #3398ff;margin-top: 24px;width: 300px;float: left; margin-top: 24px;margin-bottom: 30px;border: solid 1px #3398ff;border-radius: 4px;margin-left: 55px;">
							<table style="width:100%;">
								<tr>
									<td id='resume_color'>&nbsp;</td>
									<td style="height: 25px;">&nbsp;</td>
								</tr>
							</table>
						</div>
						<div style="width: 195px;float: right; margin-top: 30px; font-size: 14px;;">
							简历完善度：<span id='resume_complete_score_span'></span>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="h5-resume"></div>
				</td>
			</tr>
		</table>

	</div>

</body>

	<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/upload_public.js"></script>
	<script type="text/javascript">

	var resume_id = '<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
'

	// $(function () {
	// 	// body...
	// 	$(".uploadResume").click(function(){

	// 		$(".uploadResumeInput").click();
	// 	})
	// })

	getEditResumebyAjax(resume_id);

	getResumeScore(resume_id);

	function getImgURL(filePath) {  

 		// var files = $('input[name="fileTrans"]').prop('files');//获取到文件列表

			// if(files.length == 0){
			//     alert('请选择文件');
			//     return;
			// }else{
			//     var reader = new FileReader();//新建一个FileReader
			//     reader.readAsText(files[0], "UTF-8");//读取文件 
			//     reader.onload = function(evt){ //读取完文件之后会回来这里
			//         var fileString = evt.target.result;
			//         $(".resume-content").html(fileString);
			//     }
			// }

			getEditResumebyAjax();
	}

	function getEditResumebyAjax(resume_id){

		$.ajax({  
	         type:'get',      
	         url: url+'/uploadResume/previewResume/',  
	         data:{

	         	resume_id:resume_id,
	         },  
	         cache:false,  
	      
	         success:function(data){  

	         	$(".h5-resume").html(data);

	         },error:function(){
	         	alert(1);
	         }  
	     });  
	}


	function getResumeScore(resume_id){

		$.ajax({  
	         type:'get',      
	         url: url+'/resumeajax/getResumeScore/',  
	         data:{
	         	resume_id:resume_id,
	         },  
	         cache:false,  
	      
	         success:function(data){  

	         	var jsonObject = eval("(" + data + ")");

                if (jsonObject['res'] == 1) {

                	$('#resume_color').css('width',jsonObject['data']+'%');

                	$('#resume_color').css('background','#3398ff')

                	$('#resume_complete_score_span').html(jsonObject['data']+'%');
                   
                } else {

                  
                }

	         },error:function(){
	         	alert(1);
	         }  
	     });  
	}

	$(".resume-preview-right").remove();


</script>

</html>