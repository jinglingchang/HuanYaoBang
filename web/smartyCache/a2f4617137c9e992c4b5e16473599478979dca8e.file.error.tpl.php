<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-10 19:03:59
         compiled from "/private/var/www/html/employer_tool/Public/html//tip/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16466609775731c01fc48579-49901434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f4617137c9e992c4b5e16473599478979dca8e' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//tip/error.tpl',
      1 => 1459595098,
    ),
  ),
  'nocache_hash' => '16466609775731c01fc48579-49901434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/tip.js"></script>
<!-- 提示性 浮框 开始 -->
<div class="pop alertPop in alertErrorPop" style="display: none;">
        <div class="popmask" style="display: block;"></div>
        <div class="popwrap popsm">
            <div class="popbox">
                <div class="popbody">
                    <p class="alert alertErrorData">
                        提示内容<br>
                        多条提示串br
                    </p>
                </div>
                <div class="popfooter">
                    <button id="alert_btn" class="btn btnDashboard iKonwButton" type="button">  
                        我知道了
                    </button>
                </div>
            </div>
        </div>
</div>

<!-- 提示性 浮框 结束 -->

<script type="text/javascript">
    $(function(){

        $(".iKonwButton").click(function(event) {
            /* Act on the event */
            $(".alertErrorPop").fadeOut();
        });
    })

</script>