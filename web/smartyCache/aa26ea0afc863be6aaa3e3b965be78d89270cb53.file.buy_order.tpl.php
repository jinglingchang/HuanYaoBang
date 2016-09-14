<?php /* Smarty version Smarty-3.0-RC2, created on 2016-06-30 18:06:40
         compiled from "/private/var/www/html/employer_tool/Lib/Company/Tpl/Company/buy_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8416891945774ef30a68934-45750278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa26ea0afc863be6aaa3e3b965be78d89270cb53' => 
    array (
      0 => '/private/var/www/html/employer_tool/Lib/Company/Tpl/Company/buy_order.tpl',
      1 => 1467274239,
    ),
  ),
  'nocache_hash' => '8416891945774ef30a68934-45750278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class='order_div'>
    <style>
    .hl-order-div-mask {
        border: solid 1px none;
        height: 100%;
        position: fixed;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        display: none;
    }
    
    .hl-order-content-warp {
        border: solid 1px none;
        width: 600px;
        margin: 0 auto;
        background-color: #fff;
        margin-top: 115px;
    }
    
    .hl-order-title {
        border-bottom: solid 1px #e1e1e1;
        height: 46px;
        line-height: 46px;
    }
    
    .hl-order-center-div {
        border: solid 1px none;
    }
    
    .hl-order-center-div table {
        border: solid 1px none;
        width: 510px;
        margin-left: 53px;
        margin-top: 23px;
    }
    
    .hl-order-center-div table tr td {
        border: solid 1px rgb(200, 200, 200);
        height: 60px;
        text-align: center;
        width: 23%;
        color: #202020;
    }
    
    .hl-order-bottom-div {
        border-top: solid 1px #e1e1e1;
        height: 90px;
    }
    
    .hl-order-pay-button {
        background-color: #5798F9;
        color: #fff;
        border: none;
        border-radius: 3px;
        font-size: 14px;
        font-weight: bold;
        margin-top: 16px;
        margin-right: 24px;
    }
    
    .hl-order-pay-button:hover {
        background-color: #7CAFFB;
        color: white;
        cursor: pointer;
    }
    
    .hl-order-close-img {
        width: 15px;
        float: right;
        margin-top: 20px;
        margin-right: 20px;
        cursor: pointer;
    }
    
    .hl-order-describe {
        border: solid 1px none;
        margin: 0 auto;
        margin-top: 22px;
        font-size: 14px;
        margin-left: 57px;
        /* font-weight: bold;
            color: #444;*/
    }
    
    .itemp {
        font-size: 12px;
    }
    </style>
    <div class="hl-order-div-mask">
        <div class="hl-order-content-warp">
            <div class="hl-order-title">
                <span style="font-size: 18px;padding-left: 20px;">打赏订单</span>
                <img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/image/home/222.png" class="hl-order-close-img" />
            </div>
            <div class="hl-order-center-div" style=>
                <table>
                    <tr style="background-color: rgb(240,240,240);font-weight: bold;">
                        <td>项目名称</td>
                        <td>现价</td>
                        <td>收益人</td>
                    </tr>
                    <tr>
                        <td>
                            <?php if ($_smarty_tpl->getVariable('item_infos')->value['id']==1){?> 购买面试邀约 <?php }elseif($_smarty_tpl->getVariable('item_infos')->value['id']==2){?> 购买社交评价 <?php }elseif($_smarty_tpl->getVariable('item_infos')->value['id']==9){?> 打赏 <?php }?>
                        </td>
                        <td style="color: red;font-weight: bold;font-family: initial;font-size: 17px;">¥<?php echo $_smarty_tpl->getVariable('item_infos')->value['current_price'];?>
</td>
                        <td>简历上传者等人</td>
                    </tr>
                </table>
                <div class="hl-order-describe" style='font-size: 14px;'>
                    <?php echo $_smarty_tpl->getVariable('item_infos')->value['item_describe'];?>

                </div>
                <!-- <div style="text-align: right;
                     width: 96%;margin: 0 auto;margin-top: 10px;">
                    <span style="font-size:14px;">实付</span>
                    <span style="font-size: 20px;font-weight: bold;color: red;">¥<?php echo $_smarty_tpl->getVariable('item_infos')->value['current_price'];?>
</span>
                </div> -->
            </div>
            <div style='clear: both;height: 29px;'>&nbsp;</div>
            <div class="hl-order-bottom-div" style='height:73px;padding:0;margin: 0;'>
                <div>
                    <div style='float:left;height: 37px;line-height: 37px;margin-top: 16px;margin-left: 30px;'>
                        <span>余额</span>
                        <span style="color:red;margin-left: 10px;">¥<?php echo $_smarty_tpl->getVariable('company_info')->value['money']+$_smarty_tpl->getVariable('company_info')->value['back_money']+$_smarty_tpl->getVariable('company_info')->value['benefit'];?>
</span>
                        <span style="color:#3398ff;margin-left: 10px;cursor: pointer;font-size:14px;" onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/personAccount'">[完成任务领取奖励]</span>
                    </div>
                    <div style='float:right'>
                        <?php if ($_smarty_tpl->getVariable('company_info')->value['money']+$_smarty_tpl->getVariable('company_info')->value['back_money']+$_smarty_tpl->getVariable('company_info')->value['benefit']>=$_smarty_tpl->getVariable('item_infos')->value['current_price']){?>
                        <button class="hl-order-pay-button" onclick='submitBill(this)' id='company_pay_button_id' style='width:100px;height:37px;'>立即支付</button>
                        <?php }else{ ?>

                        <button class="hl-order-pay-button" onclick="submitToPay()" style='width:100px;height:37px;'>直接购买</button>

                        <button class="hl-order-pay-button" onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/personAccount'" style='width:100px;height:37px;'>立即充值</button>
                        
                        <input type='hidden' id='pay_status' name='pay_status' value='1'> <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type='hidden' name='item_id' id='item_id' value='<?php echo $_smarty_tpl->getVariable('item_id')->value;?>
'>
    <input type='hidden' name='amout' id='amout' value='<?php echo $_smarty_tpl->getVariable('item_infos')->value['current_price'];?>
'>
    <input type='hidden' name='pingpp_order_id' id='pingpp_order_id' value=''>
    <input type='hidden' name='transDirection' id='transDirection' value='<?php echo $_smarty_tpl->getVariable('transDirection')->value;?>
'>
    <input type='hidden' name='approvalStatus' id='approvalStatus' value='<?php echo $_smarty_tpl->getVariable('approvalStatus')->value;?>
'>
    <input type='hidden' name='transType' id='transType' value='<?php echo $_smarty_tpl->getVariable('transType')->value;?>
'>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/pingpp-pc.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/javascript/tip.js"></script>
    <script type="text/javascript">
    var a = 0

    $(function() {

        $(".hl-order-close-img").click(function(event) {

            var pay_status = $('#pay_status').val()

            if (pay_status == 1) {

                var pingpp_order_id = $('#pingpp_order_id').val()

                if (pingpp_order_id) {

                    completePay(pingpp_order_id);
                    
                } else{

                    $(".hl-order-div-mask").fadeOut();
                }
            } else {

                $(".hl-order-div-mask").fadeOut();
            }

            /* Act on the event */

        });

    })

    function completePay(pingpp_order_id) {

        if (pingpp_order_id) {

            var resume_id = $('.mask_warp_div #resume_id').val()

            var ajaxurl = url + 'resumeajax/searchResumeBuyOrder';

            var formdata = new FormData();

            formdata.append('pingpp_order_id', pingpp_order_id);

            formdata.append('resume_id', resume_id);

            hirelibEngine.ajaxNative(ajaxurl, 'post', formdata, function success(data) {

                location.reload();

            }, function error(error) {

            }, 1)

        }

    }

    function submitToPay() {

        var amout = $('#amout').val() * 100;

        var resume_id = $('.mask_warp_div #resume_id').val()

        var xhr = new XMLHttpRequest();

        xhr.open("POST", url + "resumeajax/ajaxBuyResume", true);

        xhr.setRequestHeader("Content-type", "application/json");

        xhr.send(JSON.stringify({
            channel: 'alipay_pc_direct',
            amount: amout,
            source: 'buy_resume',

            resume_id: resume_id,

        }));
        xhr.onreadystatechange = function() {

            if (xhr.readyState == 4 && xhr.status == 200) {

                var json_data = hirelibEngine.parseJson(xhr.responseText);

                var pingpp_order_id = hirelibEngine.trimData(json_data['id']);

                if (pingpp_order_id && json_data) {

                    var formData = new FormData();

                    formData.append('money', amout);

                    formData.append('pingpp_account_id', pingpp_order_id);

                    $('#pingpp_order_id').val(pingpp_order_id)

                    pingppPc.createPayment(xhr.responseText, function(result, err) {

                    });
                } else {

                    console.log('ping++获取账单错误');
                }
            }
        }

    }

    function submitBill(obj) {

        if (a == 0) {

            a++;

            $('.loading').show();

            var current_object = $(obj)

            var item_id = $('#item_id').val()

            var transDirection = $('#transDirection').val();

            var approvalStatus = $('#approvalStatus').val();

            var transType = $('#transType').val();

            var data = {};

            data['item_id'] = item_id

            data['transDirection'] = transDirection

            data['approvalStatus'] = approvalStatus

            data['transType'] = transType

            switch (item_id) {

                case '1':

                    data['resume_id'] = $('.mask_warp_div #resume_id').val()

                    data['position_id'] = $('.mask_warp_div #position_id').val();

                    break;

                case '2':

                    data['resume_id'] = $('.mask_warp_div #resume_id').val()

                    break;

                case '9':

                    data['resume_id'] = $('.mask_warp_div #resume_id').val()

                    break;

            }

            $.ajax({
                url: url + 'company/create_bill', // 跳转到 action
                data: data,
                type: 'post',
                cache: false,
                success: function(data) {

                    a = 0

                    if (data == 1) {

                        switch (item_id) {

                            case '1':

                                $('.order_div').remove()

                                $(".mask_warp_div").hide();

                                successInterview();

                                break;

                            case '2':

                                $('.order_div').remove()

                                buy_review_ajax();

                                break;

                            case '9':

                                $('.order_div').remove()

                                $(".hl-order-div-mask").fadeOut();

                                successBuyResume(1);

                                getResumePhoneAndEmail();

                                $('.loading').hide();

                                break;

                        }
                    } else {

                        a = 0
                    }

                },
                error: function() {

                }
            });
        }
    }
    </script>
</div>