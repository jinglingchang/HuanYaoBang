<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> {include file="../public/_default.tpl"}
<style>
    body {
        overflow-x: hidden;
    }

    .userMangerTitle {
        color: rgb(91, 91, 91);
        font-size: 2.5em;
        margin-top: 15px;
        text-align: center;
    }

    .sortBar {
        width: auto;
        margin-left: 25px;
        height: 25px;
        line-height: 0px;
        margin-right: 45px;
        /*        margin: 0 auto;*/
    }

    table tr > th {
        text-align: center;
        background-color: #eee;
    }

    table tr > td {
        text-align: center;
        vertical-align: middle !important;
        border-bottom-color: #D5E3E7 !important;
    }

    table tr:nth-of-type(even) {
        background-color: #F9FCFD;
    }

    .selectText {
        height: 32px;
        border-radius: 0px;
        border: #c5c5c5 solid 1px;
        box-shadow: 0px 2px 2px #888 inset;
        padding-left: 10px;
        width: 224px;
    }

    .selectBar {
        padding-left: 25px;
    }
</style>
<script>
</script>
<div style="height: 20px;"></div>
<div style="height: 10px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th style="width: 30px;">id</th>
            <th style="width: 30px;">订单号</th>
            <th style="width: 30px;">姓名</th>
            <th style="width: 30px;">医院</th>
            <th style="width: 30px;">手术信息</th>
            <th style="width: 30px;">支付状态</th>
            <th style="width: 35px;">订单状态</th>
            <th style="width: 30px;">创建时间</th>
            <th>操作</th>
        </tr>
        {foreach from=$list item=datas key=key}
            <tr>
                <td>{$datas.id}</td>

                <td>{$datas.order_sn}</td>

                <td>{$datas.name}</td>

                <td>{$datas.hospital_name}</td>

                <td>{$datas.operation_info}</td>
                <td>

                    {if $datas.pay_status == 1}
                        <span class="label label-default">未支付</span>
                    {elseif $datas.pay_status == 2}
                        <span class="label label-primary">已支付订金</span>
                    {elseif $datas.pay_status == 3}
                        <span class="label label-success">已付全款</span>
                    {elseif $datas.pay_status == 4}
                        <span class="label label-primary">已退款</span>
                    {/if}


                </td>
                <td>

                    {if $datas.order_status == 1}
                        <span class="label label-default">已创建</span>
                    {elseif $datas.order_status == 2}
                        <span class="label label-success">已完成</span>
                    {elseif $datas.order_status == 3}
                        <span class="label label-danger">订单失败</span>
                    {elseif $datas.order_status == 4}
                        <span class="label label-primary">已确认</span>

                    {elseif $datas.order_status == 5}
                        <span class="label label-primary">订单关闭</span>
                    {/if}


                </td>

                <td>{$datas.create_time|date_format:"%Y-%m-%d"}</td>
                <td>
                    <a href="pageredirst.php?action=order&functionname=detail&id={$datas.id}">查看详情</a>
                </td>
            </tr>
        {/foreach}
    </table>
</div>
{$fenye}