<?php /* Smarty version Smarty-3.0-RC2, created on 2016-10-11 09:23:32
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/website/order_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3120557fc3f14383067-74975741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52270f6506d0927f28242f433a2be665ca205bf1' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/website/order_detail.tpl',
      1 => 1473786538,
    ),
  ),
  'nocache_hash' => '3120557fc3f14383067-74975741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\hybbbb\admin\Smarty\libs\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <style>

        dd {

            margin-top: 10px;

            height: 20px;

            padding-top: 10px;
        }

        dt {

            margin-top: 10px;

            height: 20px;

            margin-right: 10px;

        }


    </style>

</head>
<body>

<div style="height: 10px;">&nbsp;</div>

<input type='hidden' id='order_id' name='order_id' value='<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
'>

<span class="glyphicon glyphicon-arrow-left" aria-hidden="true" style="margin-left: 20px;width: 50px;cursor: pointer"
      onclick="history.go(-1)"></span>

<dl class="dl-horizontal">

    <dt>订单号</dt>
    <dd style=""><?php echo $_smarty_tpl->getVariable('data')->value['order_sn'];?>
</dd>
    <dt>姓名</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
</dd>

    <dt>医院</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['hospital_name'];?>
</dd>
    <dt>手术信息</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['operation_info'];?>
</dd>
    <dt>总金额</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['total_money'];?>
元</dd>
    <dt>剩余金额</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['remain_money'];?>
元</dd>
    <dt>服务时间</dt>
    <dd><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('data')->value['service_time'],"%Y-%m-%d");?>
<?php echo $_smarty_tpl->getVariable('data')->value['string'];?>
</dd>
    <dt>手术时间</dt>
    <dd><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('data')->value['operation_time'],"%Y-%m-%d ");?>
</dd>

    <dt>购买个数</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['buy_number'];?>
</dd>

    <dt>省</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['province'];?>
</dd>

    <dt>市</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['city'];?>
</dd>

    <dt>区</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['area'];?>
</dd>

    <dt>地址</dt>
    <dd><?php echo $_smarty_tpl->getVariable('data')->value['address'];?>
</dd>

    <dt>订单状态</dt>
    <dd>

        <?php if ($_smarty_tpl->getVariable('data')->value['order_status']==1){?>
            <span class="label label-default">已创建</span>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['order_status']==2){?>
            <span class="label label-success">已完成</span>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['order_status']==3){?>
            <span class="label label-danger">订单失败</span>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['order_status']==4){?>
            <span class="label label-primary">已确认</span>

        <?php }elseif($_smarty_tpl->getVariable('data')->value['order_status']==5){?>
            <span class="label label-primary">订单关闭</span>
        <?php }?>
    </dd>

    <dt>支付状态</dt>
    <dd>

        <?php if ($_smarty_tpl->getVariable('data')->value['pay_status']==1){?>
            <span class="label label-default">未支付</span>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['pay_status']==2){?>
            <span class="label label-primary">已支付订金</span>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['pay_status']==3){?>
            <span class="label label-success">已付全款</span>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['pay_status']==4){?>
            <span class="label label-primary">已退款</span>
        <?php }?>

    </dd>

    <div style='height:30px;'>&nbsp;</div>

    <div style='margin-left:110px;'>

        <?php if ($_smarty_tpl->getVariable('data')->value['pay_status']==2&&$_smarty_tpl->getVariable('data')->value['order_status']!=4&&$_smarty_tpl->getVariable('data')->value['order_status']!=5){?>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("sureOrder")'>确认订单</button>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("TKOrder")'>确认退款</button>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("closeOrder")'>关闭订单</button>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['order_status']==4){?>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("closeOrder")'>关闭订单</button>
        <?php }elseif($_smarty_tpl->getVariable('data')->value['pay_status']==3&&$_smarty_tpl->getVariable('data')->value['order_status']!=5){?>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("confimOrder")'>完成订单</button>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("closeOrder")'>关闭订单</button>
        <?php }?>

    </div>

</dl>

<div class="modal fade" id='mainTypeModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">操作</h4>
            </div>

            <div id="closeOrder" style="display:none">

                <div class="modal-body" id='preview_body'>


                    <div>确定要关闭订单吗?</div>


                </div>
                <!-- /.modal-content -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='operateOrder("close")'>确定
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>

            </div>

            <div id="sureOrder" style="display:none">

                <div class="modal-body" id='preview_body'>

                    <div>确认订单有效?</div>

                </div>
                <!-- /.modal-content -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='operateOrder("sure")'>确定
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>

            </div>

            <div id="confimOrder" style="display:none">

                <div class="modal-body" id='preview_body'>


                    <div>确认订单完成?</div>


                </div>
                <!-- /.modal-content -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='operateOrder("complete")'>确定
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>

            </div>

            <div id="TKOrder" style="display: none;">

                <div class="modal-body" id='preview_body'>


                    <div>退款备注</div>

                    <div>

                        <textarea style="width: 355px;height: 116px;" id="tk_reason"></textarea>

                    </div>

                    <div id="tk_error"></div>


                </div>
                <!-- /.modal-content -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='operateOrder("TK")'>确定
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>

            </div>

        </div>
        <!-- /.modal-dialog -->
    </div>

</div>
<!-- /.modal -->
<script>
    $(function () {
        $('#mainTypeModal').on('hidden.bs.modal', function (e) {

            $('#mainTypeModal').modal('hide');

        })
    });

    function gotoSubmit(type) {

        $('#mainTypeModal').modal();

        $('#' + type).show()
    }

    function operateOrder(type) {

        var order_id = $('#order_id').val();

        var formData = new FormData();

        formData.append('id', order_id);

        formData.append('type', type);

        switch (type) {

            case 'TK':

                var tk_reason = $('#tk_reason').val();

                $('#tk_error').html('');

                if (tk_reason) {

                    formData.append('tk_reason', tk_reason);

                } else{

                    $('#tk_error').html('请输入退款原因');

                    return false;
                }

                break;
        }

        var url = base.getDomainUrl() + '/pageredirst.php?action=order&functionname=operate_order';

        base.ajax(url, 'post', formData, function success(data) {

            location.reload();

        }, function error(error) {


        })

    }

</script>

</body>
</html>
