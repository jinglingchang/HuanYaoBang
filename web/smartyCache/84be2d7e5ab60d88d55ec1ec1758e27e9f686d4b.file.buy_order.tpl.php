<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-16 19:03:18
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Company/Tpl/Company/buy_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3085858205739a8f6f2c876-48937181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84be2d7e5ab60d88d55ec1ec1758e27e9f686d4b' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Company/Tpl/Company/buy_order.tpl',
      1 => 1463396363,
    ),
  ),
  'nocache_hash' => '3085858205739a8f6f2c876-48937181',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class='order_div'>

    <style>
        .hl-order-div-mask{
            border:solid 1px none;   
            height: 100%;
            position: fixed;
            width: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 9999;
            display: none;
        }
        .hl-order-content-warp{
            border: solid 1px none; width:640px; height: 525px; margin: 0 auto;
            background-color: #fff;margin-top: 115px;
        }
        .hl-order-title{
            border-bottom: solid 1px #e1e1e1;height: 50px;line-height: 50px;
        }
        .hl-order-center-div{
            border: solid 1px none; height: 320px;
        }
        .hl-order-center-div table{
            border: solid 1px none; width: 65%;margin: 0 auto;margin-top: 30px;
        }
        .hl-order-center-div table tr td{
            border: solid 1px rgb(200,200,200); height: 60px; text-align: center; width: 23%;
            color: #202020;
        }
        .hl-order-bottom-div{
            border-top: solid 1px #e1e1e1; height: 90px; padding: 0 35px;margin: 0 auto;line-height: 96px;
        }
        .hl-order-pay-button{
            padding: 5px 10px;background: #202020;color: #fff;border: none;border-radius: 3px;font-size: 14px;font-weight: bold;
        }
        .hl-order-pay-button:hover{
            border: solid 1px #333; background-color: #fff; color: #333;cursor: pointer;
        }
        .hl-order-close-img{
            width: 15px;float: right;margin-top: 20px;margin-right: 20px;cursor: pointer;
        }
        .hl-order-describe{
            border: solid 1px none;
            width: 90%;
            margin: 0 auto;
            margin-top: 20px;

            font-size: 14px;

           /* font-weight: bold;
            color: #444;*/
        }

        .itemp{

            margin-left: 33px;
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
                            <?php if ($_smarty_tpl->getVariable('item_infos')->value['id']==1){?>

                                购买面试邀约

                            <?php }elseif($_smarty_tpl->getVariable('item_infos')->value['id']==2){?>

                                购买社交评价

                            <?php }elseif($_smarty_tpl->getVariable('item_infos')->value['id']==9){?>

                                 打赏

                            <?php }?>
                        </td>

                        <td style="color: red;font-weight: bold;font-family: initial;font-size: 17px;">¥<?php echo $_smarty_tpl->getVariable('item_infos')->value['current_price'];?>
</td>

                        <td>简历上传者等人</td>

                       
                    </tr>
                </table>
                <div class="hl-order-describe">
                    <?php echo $_smarty_tpl->getVariable('item_infos')->value['item_describe'];?>

                </div>
                <!-- <div style="text-align: right;
                     width: 96%;margin: 0 auto;margin-top: 10px;">
                    <span style="font-size:14px;">实付</span>
                    <span style="font-size: 20px;font-weight: bold;color: red;">¥<?php echo $_smarty_tpl->getVariable('item_infos')->value['current_price'];?>
</span>
                </div> -->
            </div>
            <div class="hl-order-bottom-div">
                <span class="hl-order-balance-span">
                    <span>余额</span>
                    <span style="color:red;margin-left: 10px;">¥<?php echo $_smarty_tpl->getVariable('company_info')->value['money']+$_smarty_tpl->getVariable('company_info')->value['back_money']+$_smarty_tpl->getVariable('company_info')->value['benefit'];?>
</span>
                    <span style="color:#3398ff;margin-left: 10px;cursor: pointer;font-size:14px;"  onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/personAccount'">[完成任务领取奖励]</span>
                    <span style="float: right;margin-top: 4px;">
                        <?php if ($_smarty_tpl->getVariable('company_info')->value['money']+$_smarty_tpl->getVariable('company_info')->value['back_money']+$_smarty_tpl->getVariable('company_info')->value['benefit']>=$_smarty_tpl->getVariable('item_infos')->value['current_price']){?>
                            <button class="hl-order-pay-button" onclick='submitBill(this)' id='company_pay_button_id'>立即支付</button>
                        <?php }else{ ?> 
                            <button class="hl-order-pay-button" onclick="window.location.href = '<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
user/personAccount'">余额不足，请去充值</button>
                        <?php }?>
                    </span>
                </span>
            </div>
        </div>
    </div>

    <input type='hidden' name='item_id' id='item_id' value='<?php echo $_smarty_tpl->getVariable('item_id')->value;?>
'>

    <input type='hidden' name='transDirection' id='transDirection' value='<?php echo $_smarty_tpl->getVariable('transDirection')->value;?>
'>

    <input type='hidden' name='approvalStatus' id='approvalStatus' value='<?php echo $_smarty_tpl->getVariable('approvalStatus')->value;?>
'>

    <input type='hidden' name='transType' id='transType' value='<?php echo $_smarty_tpl->getVariable('transType')->value;?>
'>

    <script type="text/javascript">

        var a = 0

        $(function () {
            $(".hl-order-close-img").click(function (event) {
                /* Act on the event */
                $(".hl-order-div-mask").fadeOut();
            });

        })

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
                    success: function (data) {

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
                    error: function () {

                    }
                });

             


            }


        }

    </script>

</div>
