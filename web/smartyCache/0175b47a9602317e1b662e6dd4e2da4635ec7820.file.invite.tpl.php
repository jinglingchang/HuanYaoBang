<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 17:53:06
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//multPage/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2017020835573301027a1ea8-36471407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0175b47a9602317e1b662e6dd4e2da4635ec7820' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//multPage/invite.tpl',
      1 => 1462881188,
    ),
  ),
  'nocache_hash' => '2017020835573301027a1ea8-36471407',
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

.invite-errpr-tip{
    /*border:solid 1px red;*/
    height: 25px;
    margin-bottom: -10px;
    color: #3398ff;
    font-weight: bold;
    visibility: hidden;
}

</style>
<script>var url = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
'</script>

<div class="loninContainer inviteDg" style="display:none;">
    <div class="overlay_bg" id="loginOverlay" style="display: block;"></div>
    <div id="dialog" class="panel_login animated btn-login bounceIn actLoginBtn" style="display: block;width: 500px; padding-left: 50px;"> <i class="close" style="background: none">
            <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/close.png" width="52" class="close-mask" />
        </i>
        <div class="panel_info">
            <div class="panel_tab">
                <div class="title">
                    <div class="fl">邀请好友</div>
                    <!-- <label class="fr">还没有众人识才账号？
                        <a href="#">马上注册</a>
                    </label> -->
                </div>
                <div class="clear"></div>
                     <div style="width: 420px;font-size: 14px;">
            将下面链接分享给好友，创建账号后您和好友都将获得相应奖励
        </div>
        <div class="invite-errpr-tip">已复制</div>
        <div style="margin-top: 18px;width: 430px;">

            <input type="text" id="foo" class="new-open-account-input" value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" style="width: 310px;border-radius: 2px 0px 0px 2px;border-right: none;height: 51px; white-space:nowrap;overflow:hidden;text-overflow:ellipsis;" disabled="disabled" />
                  
                    <button class="btn-link" type="button" data-clipboard-action="copy" data-clipboard-target="#foo" style="height: 51px;width: 100px;background: #3398ff;border: none;border-radius: 0px 2px 2px 0px;color: #fff;font-size: 17px; margin-left: -5px;cursor: pointer;" >复制链接</button>
        </div>
            </div>
        </div>
        <div style="height:35px;"></div>
    </div>
</div>


<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/clipboard.min.js"></script>


<script type="text/javascript">


    $(".close-mask").click(function(){

        $(".loninContainer").fadeOut();

    })

     var clipboard = new Clipboard('.btn-link');

    clipboard.on('success', function(e) {
        $(".invite-errpr-tip").css('visibility','inherit');
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });


</script>

