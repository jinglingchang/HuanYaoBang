<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-27 14:19:22
         compiled from "/private/var/www/html/employer_tool/Lib/User/Tpl/User/withdraw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15045637145747e6eaad3dc5-53962467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '303b7bd9ff00a548395e2296d6718d151e9f6032' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/User/Tpl/User/withdraw.tpl',
      1 => 1464247523,
    ),
  ),
  'nocache_hash' => '15045637145747e6eaad3dc5-53962467',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style type="text/css"></style>

<div class="hl-warp_div">
    <div class="wap-div-warp">
            <div class="page-title-div">提现余额到银行卡</div>
            <div class="hl-div-width" style="width:320px;text-align: left;margin: 0 auto;">
                <span>持卡人姓名：</span>
                <span style="color: #777;font-size: 14px;" class="cardPersonName"><?php echo $_smarty_tpl->getVariable('user_info')->value['real_name'];?>
</span>

                <span style="color: #777;font-size: 14px;margin-left: 42px;">可提现金额：<?php echo $_smarty_tpl->getVariable('user_info')->value['benefit']+$_smarty_tpl->getVariable('user_info')->value['money'];?>
</span>
            </div>

            <div class="row-height-div">
                <div id="dict_skill" style="width: 53%;"class="selectWrap">
                    <div class="selectBtn" id="selectProvince" style="background: #fff;width: 320px; text-align: left;border-radius: 3px;border: 1px solid #ccc;">
                        <a val class="a-val">请选择开户行名称</a>
                    </div>
                    <ul style="display: none;width: 320px;text-align: left;" class="select_ul">
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "0")'>农业银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "1")'>交通银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "2")'>建设银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "3")'>光大银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "0")'>招商银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "0")'>中信银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "0")'>工商银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "0")'>浦发银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "0")'>民生银行</li>
                        <li val="0" onclick='selectPositionRedict("bankName", "soft", "0")'>广发银行</li>
                    </ul>
                </div>
            </div>

            <div class="row-height-div">
                <input type="text" class="new-open-account-input bankCardNumber only-number" name="card" placeholder="银行卡号" />
            </div>

            <div class="row-height-div">
                <input type="text" class="new-open-account-input withdrawLimt only-number" name="money" placeholder="可提现金额：<?php echo $_smarty_tpl->getVariable('user_info')->value['benefit']+$_smarty_tpl->getVariable('user_info')->value['money'];?>
" style="width: 170px;" />
                元
                <span style="color: #888;font-size: 12px; margin-left: 3px;">建议最多提现800元/次</span>
            </div>
            <div class="row-height-div" style="width:320px;text-align: left;margin: 0 auto; margin-top: 40px;">
                <span>手机号：</span>
                <span style="color: #777;font-size: 14px;" class="phone-number">

                    <script>

                        var phone = '<?php echo $_smarty_tpl->getVariable('user_info')->value['phone'];?>
'

                        var phone_new = phone.substring(0,3)+"****"+phone.substring(8,11)

                        document.write(phone_new)

                    </script>

                </span>

                <input type='hidden' name='phone' id='phone' value='<?php echo $_smarty_tpl->getVariable('user_info')->value['phone'];?>
'>

            </div>

            <div style='width: 320px;height: 48px;border:1px solid #e1e1e1;position:relative; border-radius: 3px;margin: 0 auto; margin-top: 5px;'>

                <span style='display:inline-block'>
                    <input type='text' name='phone' id='phone' style='width:220px;height: 46px;border: none;font-size: 14px;text-indent: 20px;' class="only-number captcha" placeholder="请输入验证码"  />
                </span>

                <span style='height: 30px; width: 94px;display: inline-block;color: #999; font-size: 13px;border-left: 1px solid #e1e1e1;position: absolute;top: 10px;cursor: pointer;line-height: 30px;padding-left: 11px;' id='checkCode' onclick='sendMessage(this);'>发送验证码</span>
            </div>

            <div class="row-height-div" style="margin-top: 35px;">
                <button type="button" class="new-open-account-button" onclick="submitWithdraw()">确认提交</button>
            </div>
    </div>
            <div style="border-top: solid 1px #e1e1e1; width: 90%; margin: 0 auto; margin-top: 30px;"></div>
            <div style="font-size: 14px;color: #777;padding-left: 60px;padding-top: 20px;">温馨提示：</div>
            <div style="font-size: 14px;color: #777;padding-left: 60px;padding-top: 5px;">1.提现申请需要2-5工作日完成</div>

            <div style="font-size: 14px;color: #777;padding-left: 60px;padding-top: 5px;">2.提现金额建议不超过800元，超过部分国家会要求缴纳个人意外所得税20%</div>

            <div style="font-size: 14px;color: #777;padding-left: 60px;padding-top: 5px;">3.提现的银行持卡人姓名默认是实名认证的姓名</div>

            <div style="font-size: 14px;color: #777;padding-left: 60px;padding-top: 5px;">4.提现的银行手机号默认是用户注册时使用的手机号</div>

            <div style="font-size: 14px;color: #777;padding-left: 60px;padding-top: 5px;">5.如有何人疑问请发送邮件给我们support_rex@hirelib.com或联系电话021-50312591</div>



            <div style="height: 50px;"></div>

</div>



<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/check.js"></script>
<script type="text/javascript">

        $(function(){

                //点击空白地方 隐藏 下拉列表  id有问题#selectProvince
                $(document).on("click", function (e) {

                    if ($(e.target).parents(".selectWrap").length == 0)
                    {
                        $(".select_ul").fadeOut();
                    }
                })

                 // 下拉框
                $(".selectBtn").click(function (event) {
                    /* Act on the event */

                    $(".select_ul").hide();
                    $(this).next().show();
                })

                $(".select_ul li").click(function (event) {
                    /* Act on the event */
                    var selectVal = $(this).text();
                    $(this).parents().prev('.selectBtn').children().text(selectVal);
                    $(".a-val").css('color','#404040');
                    $(".select_ul").hide();
                })

            //判断 部分输入框 只能输入数字
            $(".only-number").keyup(function(){  

            var tmptxt=$(this).val();       

            $(this).val(tmptxt.replace(/\D|^0/g,''));  

            }).bind("paste",function(){      

                var tmptxt=$(this).val();  

                $(this).val(tmptxt.replace(/\D|^0/g,'')); 

            }).css("ime-mode", "disabled"); 

        })

    function submitWithdraw(){

        if ($(".a-val").text() =="请选择开户行名称") {
            setErrorTip('请选择开户行名称');
            return false;
        }

        if (check.isEmpty($('.bankCardNumber').val())) {
            setErrorTip('卡号不能为空');
            return false;
        }
        if (check.isEmpty($('.withdrawLimt').val())) {
            setErrorTip('提现额度不能为空');
            return false;
        }
        if (check.isEmpty($('.captcha').val())) {
            setErrorTip('验证码不能为空');
            return false;
        }

        authoClick();
    }

    function authoClick() {

            var name = $('.cardPersonName').text();
            var cardNumber = $('.bankCardNumber').val();
            var bankName = $(".a-val").text();
            var money = $('.withdrawLimt').val();
            var province = '上海市';
            var city = '上海市';
            var phone = $("#phone").val();
            var code = $('.captcha').val();

            var close_resume_reason = url + 'account/submitWithDraw'

                    var params = new FormData();
                    params.append('full_name',name);
                    params.append('card',cardNumber);
                    params.append('bank',bankName);
                    params.append('money',money);
                    params.append('province',province);
                    params.append('city',city);
                    params.append('phone',phone);
                    params.append('code',code);

                    hirelibEngine.ajaxNative(close_resume_reason, 'post', params, function success(data) {

                        var jsonobj = eval('('+data+')');

                        switch(jsonobj.res)
                                {
                                case 1:
                                 {
                                    setErrorTip('提现申请提交成功，我们会在1-2个工作日内进行审核，转账后您将受到通知');
                                 }
                                  break;
                                case -1:
                                 {
                                    setErrorTip('参数不全');
                                 }
                                  break;
                                case -2:
                                 {
                                    setErrorTip('当月提现金额不能超过2000');
                                 }
                                  break;
                                case -3:
                                 {
                                    setErrorTip('余额不足或提现金额低于1000');
                                 }
                                  break;
                                case -4:
                                 {
                                    setErrorTip('验证码错误');
                                 }
                                  break;
                                case -5:
                                 {
                                    $(".authenticationDg").show();
                                 }
                                  break;

                                default:
                                }

                        }, function error(data) {

                            alert(data)
                        }, 0);
                       
        }

</script>