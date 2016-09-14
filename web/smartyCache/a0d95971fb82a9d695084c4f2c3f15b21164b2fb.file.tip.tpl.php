<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-12 15:33:08
         compiled from "/private/var/www/html/employer_tool/Public/html//tip/tip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1897470932575d1034a81b55-89747716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0d95971fb82a9d695084c4f2c3f15b21164b2fb' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//tip/tip.tpl',
      1 => 1464369390,
    ),
  ),
  'nocache_hash' => '1897470932575d1034a81b55-89747716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- 提示性 浮框 开始 -->
<div class="position_creat">
    <div class="pop alertPop in alertPopTip" style="display: none;">
        <div class="popmask" style="display: block;"></div>
        <div class="popwrap popsm">
            <div class="popbox">
                <div class="popbody">
                    <p class="alert alertTip">
                        提示内容<br>
                        多条提示串br
                    </p>
                </div>
                <div class="popfooter">
                    <button id="alert_btn" class="btn btnDashboard" type="button" onclick='$(".alertPopTip").fadeOut();'>  
                        我知道了
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 提示性 浮框 结束 -->

<!-- 提示性 浮框 结束  写在 header 中-->
<script>
    $(function () {
        // 关闭 提示性 浮框
        $("#alert_btn").click(function (event) {

            alert(123)

            /* Act on the event */
            $(".alertPopTip").fadeOut();
        });
    })
</script>