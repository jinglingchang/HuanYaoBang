<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-10 19:16:59
         compiled from "/private/var/www/html/employer_tool/Public/html//tip/confim.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5663540695731c32b51c3c0-83022864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53715efc0775ed7937adaeff67e7bbbcc4dcef74' => 
    array (
      0 => '/private/var/www/html/employer_tool/Public/html//tip/confim.tpl',
      1 => 1458729740,
    ),
  ),
  'nocache_hash' => '5663540695731c32b51c3c0-83022864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/tip.js"></script>

<style>
    .popsm .popbox{
        padding: 0px;
    }
    .hl-confim-tip-button{
        width: 100px;height: 42px; background: #ccc;border: none;border-radius: 3px;
        margin-left: 30px;
    }
    .hl-confim-tip-button:hover{
        background-color: #222; color: #fff;cursor: pointer;
    }

</style>

<!-- 提示性 浮框 开始 -->
<div class="pop alertPop in confimAlert" style="display: none;">
        <div class="popmask" style="display: block;"></div>
        <div class="popwrap popsm">
            <div class="popbox" style="width: 430px;height: 260px;margin-left: -90px;">
                <div class="popbody" style="height: 80px;font-size: 22px;color: #5e5e5e;line-height: 80px;text-align: center;;">
                    提示
                </div>

                <div class="popbody confimAlerbody" style="height: 100px;font-size: 20px;color: #5e5e5e;text-align: center;padding: 0 30px;padding-top: 24px;">
                    
                </div>
                <div class="popfooter">
                    <button id="alert_btn" class="hl-confim-tip-button confimEvent" type="button">  
                        确定
                    </button>
                    <button onclick='cannelComfim()' id="alert_btn" class="hl-confim-tip-button confimAlertClose" type="button">  
                        取消
                    </button>
                </div>
            </div>
        </div>
</div>
<!-- 提示性 浮框 结束 -->