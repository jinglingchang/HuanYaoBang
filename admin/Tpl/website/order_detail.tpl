<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {include file="../public/_default.tpl"}

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

<input type='hidden' id='order_id' name='order_id' value='{$data.id}'>

<span class="glyphicon glyphicon-arrow-left" aria-hidden="true" style="margin-left: 20px;width: 50px;cursor: pointer"
      onclick="history.go(-1)"></span>

<dl class="dl-horizontal">

    <dt>订单号</dt>
    <dd style="">{$data.order_sn}</dd>
    <dt>姓名</dt>
    <dd>{$data.name}</dd>

    <dt>医院</dt>
    <dd>{$data.hospital_name}</dd>
    <dt>手术信息</dt>
    <dd>{$data.operation_info}</dd>
    <dt>总金额</dt>
    <dd>{$data.total_money}元</dd>
    <dt>剩余金额</dt>
    <dd>{$data.remain_money}元</dd>
    <dt>服务时间</dt>
    <dd>{$data.service_time|date_format:"%Y-%m-%d"}{$data.string}</dd>
    <dt>手术时间</dt>
    <dd>{$data.operation_time|date_format:"%Y-%m-%d "}</dd>

    <dt>购买个数</dt>
    <dd>{$data.buy_number}</dd>

    <dt>省</dt>
    <dd>{$data.province}</dd>

    <dt>市</dt>
    <dd>{$data.city}</dd>

    <dt>区</dt>
    <dd>{$data.area}</dd>

    <dt>地址</dt>
    <dd>{$data.address}</dd>

    <dt>订单状态</dt>
    <dd>

        {if $data.order_status == 1}
            <span class="label label-default">已创建</span>
        {elseif $data.order_status == 2}
            <span class="label label-success">已完成</span>
        {elseif $data.order_status == 3}
            <span class="label label-danger">订单失败</span>
        {elseif $data.order_status == 4}
            <span class="label label-primary">已确认</span>

        {elseif $data.order_status == 5}
            <span class="label label-primary">订单关闭</span>
        {/if}
    </dd>

    <dt>支付状态</dt>
    <dd>

        {if $data.pay_status == 1}
            <span class="label label-default">未支付</span>
        {elseif $data.pay_status == 2}
            <span class="label label-primary">已支付订金</span>
        {elseif $data.pay_status == 3}
            <span class="label label-success">已付全款</span>
        {elseif $data.pay_status == 4}
            <span class="label label-primary">已退款</span>
        {/if}

    </dd>

    <div style='height:30px;'>&nbsp;</div>

    <div style='margin-left:110px;'>

        {if $data.pay_status == 2 && $data.order_status != 4 && $data.order_status != 5}
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("sureOrder")'>确认订单</button>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("TKOrder")'>确认退款</button>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("closeOrder")'>关闭订单</button>
        {elseif $data.order_status == 4}
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("closeOrder")'>关闭订单</button>
        {elseif $data.pay_status == 3 && $data.order_status != 5}
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("confimOrder")'>完成订单</button>
            <button type="submit" class="btn btn-default" onclick='gotoSubmit("closeOrder")'>关闭订单</button>
        {/if}

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
