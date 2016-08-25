<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-14 12:00:33
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/saveFilter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11803224815736a2e11c1683-51660716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f59188bfed0273b102f8217164214c49ea83607' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//resume/saveFilter.tpl',
      1 => 1463132089,
    ),
  ),
  'nocache_hash' => '11803224815736a2e11c1683-51660716',
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

<div class="loninContainer saveFilterDg" style="display:none;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 418px; padding-left: 50px;"> <i class="close" style="background: none">
            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" />
        </i>
        <div class="panel_info">
            <div class="panel_tab">
                <div class="title">
                    <div class="fl feedbackTitle">保存筛选器</div>
                </div>
                <div class="clear"></div>
                <div id="con_login_user">

                <input type="text" id='filter_name' name="filter_name" value="" placeholder="请填写筛选器的名称" style="font-size: 14px;border: solid 1px #999;border-radius: 2px;padding-left: 10px;    width: 320px;height: 42px;">

                <br />

                <div id='error_tip_s'></div>

                <button type="button" style='height:40px; margin-top:25px;'  class="new-open-account-button" onclick="submitSaveFilter()">提交</button> 


                </div>
            </div>
        </div>
        <div style="height: 20px;"></div>
    </div>
</div>

<script type="text/javascript">
    
        var user_id = '<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
'

        $(function () {
            // body...
            $(".close-mask").click(function () {

                $(".loninContainer").fadeOut();

            })
        })

        function submitSaveFilter() {

            var filter_name = $("#filter_name").val()

            if(filter_name){

                var filter_length = filter_name.length

                if(filter_length > 0 && filter_length <= 8){

                    Screen.saveScreen(filter_name);

                } else{
                    $('#error_tip_s').css('color','red');
                    $('#error_tip_s').html('最多只能输入8个字符');
                }
                

                //$(".loninContainer").fadeOut();

            } else{
                $('#error_tip_s').css('color','red');
                $('#error_tip_s').html('请给筛选条件命名');
            }

        }

        if(user_id > 0){

            Screen.getScreenList();
        }


        

</script>

