<!DOCTYPE html>
<html lang="zh-CN">

<head>
    {include file="../public/_default.tpl"} {include file="../public/_editor.tpl"}
    <script src="{$MAINPUBLIC}/javascript/config/agreement.js"></script>
    <script src="{$MAINPUBLIC}/javascript/doctor.js"></script>
    <script src="{$MAINPUBLIC}/javascript/jquery.cityselect.js"></script>
    <script>
    $(function() {

        var operation_type = '{$operation_type}'

        $('#article_content').summernote({

            height: 669

        });

        sessionStorage.clear();

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <input type='hidden' id='id' name='id' value='{$data.id}'>
        <div class="form-group">
            <label for="doctor_name">医生名称</label>
            <input type="text" class="form-control" id="doctor_name" placeholder="请输入医生名称" style='
            width:500px;' value='{$data.name}'>
            <p style='color: red;font-size: 14px;' id='doctor_name_error'></p>
        </div>

        <div class="form-group">
            <label for="doctor_name">手机号</label>
            <input type="text" class="form-control" id="phone" placeholder="请输入手机" style='
            width:500px;' value='{$data.phone}'>
            <p style='color: red;font-size: 14px;' id='phone_error'></p>
        </div>

        <div class="form-group">
            <label for="college_type">性别</label>
            <select class="form-control" style='width:500px;' id='sex_id'>
                <option value='1' {if $data.sex_id == 1} selected {/if}>男</option>
                <option value='2' {if $data.sex_id == 2} selected {/if}>女</option>
            </select>
            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>

        <div class="form-group">
            <label for="college_type">审核状态</label>
            <select class="form-control" style='width:500px;' id='check_status'>
                <option value='2' {if $data.check_status == 2} selected {/if}>通过审核</option>
                <option value='3' {if $data.check_status == 3} selected {/if}>拒绝审核</option>
            </select>
            <p style='color: red;font-size: 14px;' id='check_status_error'></p>
        </div>

        <div class="form-group">
            <label for="hospital_name">医院名称</label>
            <input type="text" class="form-control" id="hospital_name" placeholder="请输入医院名称" style='
            width:500px;' value='{$data.hospital_name}'>
            <p style='color: red;font-size: 14px;' id='hospital_name_error'></p>
        </div>

        <div class="form-group">
            <label for="logo">医生资质</label>
            <input id='cover_pic_url' name='cover_pic_url' type="file" >

            {if $operation_type == 1}
                <img src="http://localhost/HuanYaoBang/web/Public/upload/{$data.cover_pic_url}" alt="..." class="img-thumbnail" style='width:150px;'>
            {/if}

            <p style='color: red;font-size: 14px;' id='cover_pic_url_error'></p>
        </div>

        <div class="form-group">
            <label for="auther">一级科室</label>
            <div>
                {if $operation_type == 1}
                <script>
                $(function() {

                    var type_id_1 = '{$data.department.id}';

                    sessionStorage.setItem("type_id_1", type_id_1);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'>{$data.department.name}</button>
                {else}
                <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'>请选择一级科室</button>
                {/if}
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>

        <div class="form-group">
            <label for="auther">二级科室</label>
            <div>
                {if $operation_type == 1}
                    <script>
                        $(function() {

                            var type_id_99 = '{$data.department_detail.id}'

                            sessionStorage.setItem("type_id_99", type_id_99);
                        })
                    </script>
                    <button class="btn btn-default" type="submit" onclick='base.getType(1,99)' id='type_99_div_name'>{$data.department_detail.name}</button>
                {else}
                    <button class="btn btn-default" type="submit" onclick='base.getType(1,99)' id='type_99_div_name'>请选择二级科室</button>
                {/if}
            </div>
            <p style='color: red;font-size: 14px;' id='type_99_div_name_error'></p>
        </div>

        <button type="submit" class="btn btn-default" onclick='doctor.submitDoctor({$operation_type})'>保存</button>

    </div>
    <div style='height:50px;'></div>
</body>

</html>