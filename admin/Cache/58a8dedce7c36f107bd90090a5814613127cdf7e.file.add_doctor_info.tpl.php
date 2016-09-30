<?php /* Smarty version Smarty-3.0-RC2, created on 2016-09-21 14:55:09
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/website/add_doctor_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2397457e22ecd21d2d3-04483941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58a8dedce7c36f107bd90090a5814613127cdf7e' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/website/add_doctor_info.tpl',
      1 => 1474440904,
    ),
  ),
  'nocache_hash' => '2397457e22ecd21d2d3-04483941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $_template = new Smarty_Internal_Template("../public/_default.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> <?php $_template = new Smarty_Internal_Template("../public/_editor.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/config/agreement.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/doctor.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/jquery.cityselect.js"></script>
    <script>
    $(function() {

        var operation_type = '<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
'

        $('#article_content').summernote({

            height: 669

        });

        sessionStorage.clear();

    })
    </script>
</head>

<body>
    <div style='margin-top: 30px;margin-left: 20px; overflow: auto;min-height: 700px;'>
        <input type='hidden' id='id' name='id' value='<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
'>
        <div class="form-group">
            <label for="doctor_name">医生名称</label>
            <input type="text" class="form-control" id="doctor_name" placeholder="请输入医生名称" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
'>
            <p style='color: red;font-size: 14px;' id='doctor_name_error'></p>
        </div>

        <div class="form-group">
            <label for="doctor_name">手机号</label>
            <input type="text" class="form-control" id="phone" placeholder="请输入手机" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['phone'];?>
'>
            <p style='color: red;font-size: 14px;' id='phone_error'></p>
        </div>

        <div class="form-group">
            <label for="college_type">性别</label>
            <select class="form-control" style='width:500px;' id='sex_id'>
                <option value='1' <?php if ($_smarty_tpl->getVariable('data')->value['sex_id']==1){?> selected <?php }?>>男</option>
                <option value='2' <?php if ($_smarty_tpl->getVariable('data')->value['sex_id']==2){?> selected <?php }?>>女</option>
            </select>
            <p style='color: red;font-size: 14px;' id='college_type_error'></p>
        </div>

        <div class="form-group">
            <label for="college_type">审核状态</label>
            <select class="form-control" style='width:500px;' id='check_status'>
                <option value='2' <?php if ($_smarty_tpl->getVariable('data')->value['check_status']==2){?> selected <?php }?>>通过审核</option>
                <option value='3' <?php if ($_smarty_tpl->getVariable('data')->value['check_status']==3){?> selected <?php }?>>拒绝审核</option>
            </select>
            <p style='color: red;font-size: 14px;' id='check_status_error'></p>
        </div>

        <div class="form-group">
            <label for="hospital_name">医院名称</label>
            <input type="text" class="form-control" id="hospital_name" placeholder="请输入医院名称" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['hospital_name'];?>
'>
            <p style='color: red;font-size: 14px;' id='hospital_name_error'></p>
        </div>

        <div class="form-group">
            <label for="logo">医生资质</label>
            <input id='cover_pic_url' name='cover_pic_url' type="file" >

            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <img src="<?php echo $_smarty_tpl->getVariable('SiteUrl')->value;?>
/web/Public/upload/<?php echo $_smarty_tpl->getVariable('data')->value['cover_pic_url'];?>
" alt="..." class="img-thumbnail" style='width:150px;'>
            <?php }?>

            <p style='color: red;font-size: 14px;' id='cover_pic_url_error'></p>
        </div>

        <div class="form-group">
            <label for="auther">一级科室</label>
            <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                $(function() {

                    var type_id_1 = '<?php echo $_smarty_tpl->getVariable('data')->value['department']['id'];?>
';

                    sessionStorage.setItem("type_id_1", type_id_1);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['department']['name'];?>
</button>
                <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'>请选择一级科室</button>
                <?php }?>
            </div>
            <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
        </div>

        <div class="form-group">
            <label for="auther">二级科室</label>
            <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                    <script>
                        $(function() {

                            var type_id_99 = '<?php echo $_smarty_tpl->getVariable('data')->value['department_detail']['id'];?>
'

                            sessionStorage.setItem("type_id_99", type_id_99);
                        })
                    </script>
                    <button class="btn btn-default" type="submit" onclick='base.getType(1,99)' id='type_99_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['department_detail']['name'];?>
</button>
                <?php }else{ ?>
                    <button class="btn btn-default" type="submit" onclick='base.getType(1,99)' id='type_99_div_name'>请选择二级科室</button>
                <?php }?>
            </div>
            <p style='color: red;font-size: 14px;' id='type_99_div_name_error'></p>
        </div>

        <button type="submit" class="btn btn-default" onclick='doctor.submitDoctor(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>

    </div>
    <div style='height:50px;'></div>
</body>

</html>