<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script src="{$MAINPUBLIC}/javascript/hospital.js"></script>
    <script src="{$MAINPUBLIC}/javascript/jquery.cityselect.js"></script>
    <meta charset="utf-8" />
    <script>
        $(function() {

            var operation_type = '{$operation_type}'

            sessionStorage.clear();

            if (operation_type == 1) {

                var prov = '{$data.province}'

                var city = '{$data.city}'


            } else {

                var prov = '北京'

                // var city = '长沙'

                // var dist = '岳麓区'
            }

            $("#citySelect").citySelect({

                url: "public/default/javascript/city.min.js",
                prov: prov, //省份
                city: city, //城市
                nodata: "none" //当子集无数据时，隐藏select

            });

        })
    </script>
</head>

<body>
<div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
    <input type='hidden' id='id' name='id' value='{$data.id}'>
    <div class="form-group">
        <label for="hospital">医院名称</label>
        <input type="text" class="form-control" id="hospital" placeholder="请输入医院名称" style='
            width:500px;' value='{$data.name}'>
        <p style='color: red;font-size: 14px;' id='hospital_error'></p>
    </div>
    <div class="form-group">
        <label for="auther">所在城市</label>
        <div id="citySelect">
            <select class="prov" id='prov'></select>
            <select class="city" disabled="disabled" id='city'></select>
        </div>
        <p style='color: red;font-size: 14px;' id='city_error'></p>
    </div>

    <div class="form-group">
        <label for="hospital">详细地址</label>
        <input type="text" class="form-control" id="address" placeholder="请输入地址" style='
            width:500px;' value='{$data.address}'>
        <p style='color: red;font-size: 14px;' id='address_error'></p>
    </div>

    <div class="form-group">
        <label for="auther">电话</label>
        <input type="text" class="form-control" id="phone" placeholder="请输入医院电话" style='
            width:500px;' value='{$data.phone}'>
        <p style='color: red;font-size: 14px;' id='phone_error'></p>
    </div>


    <div class="form-group">
        <label for="college_type">等级</label>
        <select class="form-control" style='width:500px;' id='hospital_type'>
            <option value='1' {if $data.hospital_type == 1} selected {/if}>一级甲等</option>
            <option value='2' {if $data.hospital_type == 2} selected {/if}>二级甲等</option>
            <option value='3' {if $data.hospital_type == 3} selected {/if}>三级甲等</option>
            <option value='4' {if $data.hospital_type == 4} selected {/if}>私立医院</option>
            <option value='5' {if $data.hospital_type == 5} selected {/if}>其他</option>
        </select>
        <p style='color: red;font-size: 14px;' id='hospital_type_error'></p>
    </div>

    <div class="form-group">
        <label for="fengmiantu">封面图</label>
        <input id='fengmiantu' name='fengmiantu' type="file" >
        {if $operation_type == 1}
            <img src="{$SiteUrl}web/Public/upload/{$data.logo_name}" alt="..." class="img-thumbnail" style='width:150px;'>
        {/if}
        <p style='color: red;font-size: 14px;' id='fengmiantu_error'></p>
    </div>

    <div class="form-group">
        <label for="file2">资质图</label>
        <input id='zishitu' name='zishitu' type="file" >
        {if $operation_type == 1}
            <img src="{$SiteUrl}web/Public/upload/{$data.zs_name}" alt="..." class="img-thumbnail" style='width:150px;'>
        {/if}
        <p style='color: red;font-size: 14px;' id='zishitu_error'></p>
    </div>

    <div class="form-group" style='width:375px;'>
        <label for="miaoshu">医院描述</label>

        <textarea style="width: 400px;height: 300px;" id="miaoshu">{$data.introduce}</textarea>

        <p style='color: red;font-size: 14px;' id='miaoshu_error'></p>
    </div>
    <button type="submit" class="btn btn-default" onclick='hospital.submit({$operation_type})'>保存</button>

</div>
<div style='height:50px;'></div>
</body>

</html>