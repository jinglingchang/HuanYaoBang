<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> {include file="../public/_default.tpl"}
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

    table tr>th {
        text-align: center;
        background-color: #eee;
    }

    table tr>td {
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

    .tr_style{


    }

</style>
<script>
</script>
<div style="height: 10px;"></div>
<div class="dataArea">
    <table class="table table-bordered ">
        <tr>
            <th class="tr_style">id</th>
            <th class="tr_style">评论人昵称</th>
            <th class="tr_style">订单ID</th>
            <th class="tr_style">阅读数</th>
            <th class="tr_style">准时分数</th>
            <th class="tr_style">专业分数</th>
            <th class="tr_style">服务态度</th>
            <th class="tr_style">综合评分</th>
            <th class="tr_style">创建时间</th>
            <th>操作</th>
        </tr>
        {foreach from=$list item=datas key=key}
            <tr>
                <td>{$datas.id}</td>
                <td>{$datas.user_info.nickname}</td>
                <td><a href="pageredirst.php?action=order&functionname=detail&id={$datas.order_info.id}">{$datas.order_info.id}</a></td>
                <td>{$datas.read_number}</td>
                <td>{$datas.on_time_score}</td>
                <td>{$datas.major_score}</td>
                <td>{$datas.service_score}</td>
                <td>{$datas.total_score}</td>
                <td>{$datas.create_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
                <td>
                    <a href="pageredirst.php?action=user&functionname=reviewDetail&id={$datas.id}">查看</a>
                </td>
            </tr>
        {/foreach}
    </table>
</div>
{$fenye}