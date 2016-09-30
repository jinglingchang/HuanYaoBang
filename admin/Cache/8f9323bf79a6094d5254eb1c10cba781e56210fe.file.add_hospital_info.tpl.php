<?php /* Smarty version Smarty-3.0-RC2, created on 2016-09-21 14:48:50
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/website/add_hospital_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:637657e22d5271e6c6-28555899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f9323bf79a6094d5254eb1c10cba781e56210fe' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/website/add_hospital_info.tpl',
      1 => 1474440525,
    ),
  ),
  'nocache_hash' => '637657e22d5271e6c6-28555899',
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
/javascript/hospital.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/jquery.cityselect.js"></script>
    <meta charset="utf-8" />
    <script>
        $(function() {

            var operation_type = '<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
'

            sessionStorage.clear();

            if (operation_type == 1) {

                var prov = '<?php echo $_smarty_tpl->getVariable('data')->value['province'];?>
'

                var city = '<?php echo $_smarty_tpl->getVariable('data')->value['city'];?>
'


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
    <input type='hidden' id='id' name='id' value='<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
'>
    <div class="form-group">
        <label for="hospital">医院名称</label>
        <input type="text" class="form-control" id="hospital" placeholder="请输入医院名称" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
'>
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
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['address'];?>
'>
        <p style='color: red;font-size: 14px;' id='address_error'></p>
    </div>

    <div class="form-group">
        <label for="auther">电话</label>
        <input type="text" class="form-control" id="phone" placeholder="请输入医院电话" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['phone'];?>
'>
        <p style='color: red;font-size: 14px;' id='phone_error'></p>
    </div>


    <div class="form-group">
        <label for="college_type">等级</label>
        <select class="form-control" style='width:500px;' id='hospital_type'>
            <option value='1' <?php if ($_smarty_tpl->getVariable('data')->value['hospital_type']==1){?> selected <?php }?>>一级甲等</option>
            <option value='2' <?php if ($_smarty_tpl->getVariable('data')->value['hospital_type']==2){?> selected <?php }?>>二级甲等</option>
            <option value='3' <?php if ($_smarty_tpl->getVariable('data')->value['hospital_type']==3){?> selected <?php }?>>三级甲等</option>
            <option value='4' <?php if ($_smarty_tpl->getVariable('data')->value['hospital_type']==4){?> selected <?php }?>>私立医院</option>
            <option value='5' <?php if ($_smarty_tpl->getVariable('data')->value['hospital_type']==5){?> selected <?php }?>>其他</option>
        </select>
        <p style='color: red;font-size: 14px;' id='hospital_type_error'></p>
    </div>

    <div class="form-group">
        <label for="fengmiantu">封面图</label>
        <input id='fengmiantu' name='fengmiantu' type="file" >
        <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <img src="<?php echo $_smarty_tpl->getVariable('SiteUrl')->value;?>
web/Public/upload/<?php echo $_smarty_tpl->getVariable('data')->value['logo_name'];?>
" alt="..." class="img-thumbnail" style='width:150px;'>
        <?php }?>
        <p style='color: red;font-size: 14px;' id='fengmiantu_error'></p>
    </div>

    <div class="form-group">
        <label for="file2">资质图</label>
        <input id='zishitu' name='zishitu' type="file" >
        <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <img src="<?php echo $_smarty_tpl->getVariable('SiteUrl')->value;?>
web/Public/upload/<?php echo $_smarty_tpl->getVariable('data')->value['zs_name'];?>
" alt="..." class="img-thumbnail" style='width:150px;'>
        <?php }?>
        <p style='color: red;font-size: 14px;' id='zishitu_error'></p>
    </div>

    <div class="form-group" style='width:375px;'>
        <label for="miaoshu">医院描述</label>

        <textarea style="width: 400px;height: 300px;" id="miaoshu"><?php echo $_smarty_tpl->getVariable('data')->value['introduce'];?>
</textarea>

        <p style='color: red;font-size: 14px;' id='miaoshu_error'></p>
    </div>
    <button type="submit" class="btn btn-default" onclick='hospital.submit(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>

</div>
<div style='height:50px;'></div>
</body>

</html>