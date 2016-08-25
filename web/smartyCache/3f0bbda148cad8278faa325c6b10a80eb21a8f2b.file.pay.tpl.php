<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-27 14:20:34
         compiled from "/private/var/www/html/employer_tool/Lib/Account/Tpl/Account/pay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2487382145747e732db49b8-93832190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0bbda148cad8278faa325c6b10a80eb21a8f2b' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Account/Tpl/Account/pay.tpl',
      1 => 1464330032,
    ),
  ),
  'nocache_hash' => '2487382145747e732db49b8-93832190',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style='height: 38px;'>
    &nbsp;</div>
<div style='width:1000px;min-height: 800px;margin: 0 auto;background-color: white;'>
    <div style='width: 98px; height: 19px;font-size: 14px;color: #737373;padding-top: 30px;margin-left: 65px;'>请选择充值金额</div>
    <div style='clear:both;'>&nbsp;</div>
    <div style='width:150px;height:80px;float:left;margin-top: 26px;margin-left: 65px;border: 1px solid #C3C3C3;cursor: pointer;' class='selectPayMoney' rel='100'>
        <div style='margin-top: 10px;margin-left: 43px;font-size: 14px;color: #767676'><span style='font-size: 24px;color:#5798f9'>100</span>元</div>
        <div style='margin-top: 7px;margin-left: 43px;font-size: 14px;color: #767676'><span style='font-size: 14px;color:#5798f9'>返</span>50</div>
    </div>
    <div style='width:150px;height:80px;float:left;margin-top: 26px;margin-left: 30px;border: 1px solid #C3C3C3;cursor: pointer;' class='selectPayMoney' rel='200'>
        <div style='margin-top: 10px;margin-left: 43px;font-size: 14px;color: #767676'><span style='font-size: 24px;color:#5798f9'>200</span>元</div>
        <div style='margin-top: 7px;margin-left: 43px;font-size: 14px;color: #767676'><span style='font-size: 14px;color:#5798f9'>返</span>100元</div>
    </div>
    <div style='width:150px;height:80px;float:left;margin-top: 26px;margin-left: 30px;border: 1px solid #C3C3C3;cursor: pointer;' class='selectPayMoney' rel='500'>
        <div style='margin-top: 10px;margin-left: 43px;font-size: 14px;color: #767676'><span style='font-size: 24px;color:#5798f9'>500</span>元</div>
        <div style='margin-top: 7px;margin-left: 43px;font-size: 14px;color: #767676'><span style='font-size: 14px;color:#5798f9'>返</span>300元</div>
    </div>
    <div style='width:150px;height:80px;float:left;margin-top: 26px;margin-left: 30px;border: 1px solid #C3C3C3;cursor: pointer;' class='selectPayMoney' rel='1000'>
        <div style='margin-top: 10px;margin-left: 32px;font-size: 14px;color: #767676'><span style='font-size: 24px;color:#5798f9'>1000</span>元</div>
        <div style='margin-top: 7px;margin-left: 37px;font-size: 14px;color: #767676'><span style='font-size: 14px;color:#5798f9'>返</span>800元</div>
    </div>
    <div style='width:150px;height:80px;float:left;margin-top: 26px;margin-left: 30px;border: 1px solid #C3C3C3;cursor: pointer;' class='selectPayMoney' rel='2000'>
        <div style='margin-top: 10px;margin-left: 32px;font-size: 14px;color: #767676'><span style='font-size: 24px;color:#5798f9'>2000</span>元</div>
        <div style='margin-top: 7px;margin-left: 37px;font-size: 14px;color: #767676'><span style='font-size: 14px;color:#5798f9'>返</span>2000元</div>
    </div>
    <div style='width:150px;height:80px;float:left;margin-top: 24px;margin-left: 68px;border: 1px solid #C3C3C3;cursor: pointer;' class='selectPayMoney' rel='0'>
        <div style='margin-top: 19px;margin-left: 38px;font-size: 18px;color: #5798f9' id='other_money_div'>其他金额</div>
        <div style='margin-top: 13px;margin-left: 15px;font-size: 18px;color: #767676;margin-bottom: 9px;display:none;' id='other_money_input'>
            <input type='text' name='other_money' id='other_money' value='' class='only-number' style='width:123px;height:32px;margin: 0 auto;font-size: 14px;text-indent: 10px;color:black' placeholder='请输入金额'>
        </div>
        <div style='margin-top: 7px;margin-left: 30px;font-size: 12px;color: #767676'>必须大于2000元</div>
    </div>
    <div style='width:1000px;height: 1px;border-bottom: 1px solid #DBDBDB;clear:both;padding-top: 38px;'>&nbsp;</div>
    <div style='height:22px;'>&nbsp;</div>
    <div style='width: 200px; height: 20px;font-size: 14px;color: #737373;margin-left: 65px;'>支付方式：<span style='margin-left: 20px;font-size: 14px;color: #5798f9'>支付宝支付</span></div>
    <div style='height:20px;'>&nbsp;</div>
    <div style='clear:both;width:160px;height: 46px;border:1px solid #5798f9;margin-left: 65px'>
        <div style='width:90px;margin:7px 35px;height:30px;display: inline-block;'>
            <img src='<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/zhifubao.png'>
        </div>
    </div>
    <div style='width:135px;height:30px;color:white;background-color: #5798f9;text-align: center;margin-top: 30px;font-size: 14px;line-height: 30px;margin-left: 65px;cursor: pointer;' onclick='wap_pay("alipay_pc_direct")'>确定充值</div>
    <div style='width:1000px;height: 1px;border-bottom: 1px solid #DBDBDB;clear:both;padding-top: 30px;'>&nbsp;</div>
    <div style='margin-left:65px;font-size: 14px;color:#737373;'>
        <div style='margin-top: 22px;'>温馨提示：</div>
        <div style='margin-top: 12px;'>1、充值返现活动时间：2016年5月20日~2016年6月20日</div>
        <div style='margin-top: 12px;'>2、充值金额和返现金额，均不可提现</div>
        <div style='margin-top: 12px;'>3、输入其他金额充值，返现金额为充值金额的1倍</div>
        <div style='margin-top: 12px;'>4、如需获取发票，<a href='javascript:void(0)' onclick='sendInvoice()' style='text-decoration: underline'>请点击这里</a></div>
    </div>
</div>
<input type='hidden' name='amount' id='amount' value='0'>

<input type='hidden' name='payType' id='payType' value='0'>


<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/pingpp-pc.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/tip.js"></script>
<script type="text/javascript">
$(function() {

    $(".only-number").keyup(function() {

        var tmptxt = $(this).val();

        $(this).val(tmptxt.replace(/\D|^0/g, ''));

    }).bind("paste", function() {

        var tmptxt = $(this).val();

        $(this).val(tmptxt.replace(/\D|^0/g, ''));

    }).css("ime-mode", "disabled");

    $('.selectPayMoney').click(function() {

        $('#other_money_input').hide();

        $('#other_money_div').show();

        $('.selectPayMoney').css('border', '1px solid #C3C3C3');

        $(this).css('border', '2px solid #5798f9');

        var money = $(this).attr("rel")

        if (money == 0) {

            $('#other_money_input').show();

            $('#other_money_div').css('display', 'none');

            $('#payType').val(1)

        } else{

            $('#payType').val(0)

            $('#amount').val(money)
        }

        console.log(money)

    })
})

function sendInvoice(){

    var payType = $('#payType').val();

    if(payType == 1){

        var amout = $('#other_money').val()

    } else{

        var amout = $("#amount").val();
    }

    var xhr = new XMLHttpRequest();

    xhr.open("POST", url + "user/sendInvoiceAjax", true);

    xhr.setRequestHeader("Content-type", "application/json");

    xhr.send(JSON.stringify({
        amount: amout
    }));
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            setErrorTip('信息已提交<br />我们将在1-2个工作日内联系您');
        }
    }


}

function wap_pay(channel) {

    var payType = $('#payType').val();

    if(payType == 1){

        var amout = $('#other_money').val()

    } else{

        var amout = $("#amount").val();
    }

    if(parseInt(amout) > 0){

        if(payType == 1 && parseInt(amout) <= 2000){

            setErrorTip('输入金额必须大于2000');

            return false;
        } else{

            amount = amout * 100
        }

    } else{

        setErrorTip('请选择充值金额');

        return false;
    }

    var xhr = new XMLHttpRequest();

    xhr.open("POST", url + "account/ajaxPaySubmit", true);

    xhr.setRequestHeader("Content-type", "application/json");

    xhr.send(JSON.stringify({
        channel: channel,
        amount: amount
    }));
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            var json_data = hirelibEngine.parseJson(xhr.responseText);

            var pingpp_order_id = hirelibEngine.trimData(json_data['id']);

            if (pingpp_order_id && json_data) {

                var formData = new FormData();

                formData.append('money', amount);

                formData.append('pingpp_account_id', pingpp_order_id);

                displayTip('tip_pay', formData, function success(data) {

                    $('body').append(data)

                });

                pingppPc.createPayment(xhr.responseText, function(result, err) {

                });
            } else {

                console.log('ping++获取账单错误');
            }
        }
    }
}

function payQuestion() {

    $('#error_tip_s').html('如支付遇到遇到，请联系我们：021-50312591 ');
}

function completePay(pingpp_order_id) {

    if (pingpp_order_id) {

        var ajaxurl = url + 'account/searchOrder';

        var formdata = new FormData();

        formdata.append('pingpp_order_id', pingpp_order_id);

        hirelibEngine.ajaxNative(ajaxurl, 'post', formdata, function success(data) {

            var pay_status = hirelibEngine.trimData(data);

            $('#error_tip_s').html('')

            if (parseInt(pay_status) == 1) {

                window.location.href = url + 'user/personAccount'

            } else if (parseInt(pay_status) == -2) {

                $('#error_tip_s').html('请去支付宝中完成付款后,再点击完成支付按钮');
            }

        }, function error(error) {

        }, 1)

    }

}
</script>