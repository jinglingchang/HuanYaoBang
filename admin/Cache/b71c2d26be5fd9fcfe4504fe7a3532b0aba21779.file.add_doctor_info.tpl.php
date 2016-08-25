<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-24 13:53:58
         compiled from "/web/www/medhelper_admin/Tpl/website/add_doctor_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144176310057bd36760a6597-28877941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b71c2d26be5fd9fcfe4504fe7a3532b0aba21779' => 
    array (
      0 => '/web/www/medhelper_admin/Tpl/website/add_doctor_info.tpl',
      1 => 1472018032,
    ),
  ),
  'nocache_hash' => '144176310057bd36760a6597-28877941',
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
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['doctor_name'];?>
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
            <label for="hospital_name">医院名称</label>
            <input type="text" class="form-control" id="hospital_name" placeholder="请输入医院名称" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['hospital_name'];?>
'>
            <p style='color: red;font-size: 14px;' id='hospital_name_error'></p>
        </div>
        <div class="form-group">
            <label for="auther">一级科室</label>
            <div>
                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                $(function() {

                    var type_id_1 = '<?php echo $_smarty_tpl->getVariable('data')->value['department_id'];?>
'

                    sessionStorage.setItem("type_id_1", type_id_1);
                })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(1,1)' id='type_1_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type']['name'];?>
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

                            var type_id_99 = '<?php echo $_smarty_tpl->getVariable('data')->value['department_detail_id'];?>
'

                            sessionStorage.setItem("type_id_99", type_id_99);
                        })
                    </script>
                    <button class="btn btn-default" type="submit" onclick='base.getType(1,99)' id='type_99_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type']['name'];?>
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