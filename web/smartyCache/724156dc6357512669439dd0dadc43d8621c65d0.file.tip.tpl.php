<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-10 16:50:44
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//tip/tip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13702044585731a0e46bf095-62248722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '724156dc6357512669439dd0dadc43d8621c65d0' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Public/html//tip/tip.tpl',
      1 => 1459133972,
    ),
  ),
  'nocache_hash' => '13702044585731a0e46bf095-62248722',
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
                    <button id="alert_btn" class="btn btnDashboard" type="button">  
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
            /* Act on the event */
            $(".alertPopTip").fadeOut();
        });
    })
</script>