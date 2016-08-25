<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 17:52:59
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Account/Tpl/Account/pay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1130198859573300fbb212b5-32547392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ffac91cfc143b61a6db7a425c302d4256433a4f' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Account/Tpl/Account/pay.tpl',
      1 => 1462870168,
    ),
  ),
  'nocache_hash' => '1130198859573300fbb212b5-32547392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="hl-warp_div">
	<div class="wap-div-warp">

		<form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
account/userWithDraw' method='get' id='userRegisterForm' name='userRegisterForm'>

			<div class="page-title-div">账户充值</div>
			<div class="hl-div-width" style="width:320px;text-align: left;margin: 0 auto;">请填写支付信息</div>
			<div class="row-height-div">

				<input type="text" class="new-open-account-input emailVal" id='amount' name="amount" placeholder="金 额" />

			</div>

			<div class="row-height-div">
				<button type="button" class="new-open-account-button" 
                onclick="wap_pay('alipay_pc_direct')">确认充值</button>
			</div>

		</form>
	</div>
</div>


<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/pingpp-pc.js"></script>
<script type="text/javascript">

    function wap_pay(channel) {

        var amount = document.getElementById('amount').value * 100;

        var xhr = new XMLHttpRequest();

        xhr.open("POST", url+"account/ajaxPaySubmit", true);

        xhr.setRequestHeader("Content-type", "application/json");

        xhr.send(JSON.stringify({
            channel: channel,
            amount: amount
        }));
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
                pingppPc.createPayment(xhr.responseText, function(result, err) {
                    console.log(result);
                    console.log(err);
                });
            }
        }
    }

</script>
