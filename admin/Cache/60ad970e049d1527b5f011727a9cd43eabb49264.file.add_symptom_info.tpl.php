<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-12 17:22:09
         compiled from "/home/wwwroot/default/medhelper_admin/Tpl/website/add_symptom_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204758113157ad9541013356-64009518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60ad970e049d1527b5f011727a9cd43eabb49264' => 
    array (
      0 => '/home/wwwroot/default/medhelper_admin/Tpl/website/add_symptom_info.tpl',
      1 => 1470991226,
    ),
  ),
  'nocache_hash' => '204758113157ad9541013356-64009518',
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
/javascript/symptom.js"></script>
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
        <label for="auther">导医一级分类(如成人疾病)</label>
        <select class="form-control" style='width:500px;' id='type_id_1'>
            <option value='9' <?php if ($_smarty_tpl->getVariable('data')->value['type_id_1']==9){?> selected <?php }?>>成人疾病</option>
            <option value='26' <?php if ($_smarty_tpl->getVariable('data')->value['type_id_1']==26){?> selected <?php }?>>妇儿老年疾病</option>
        </select>
        <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
    </div>

    <div class="form-group">
        <label for="college_type">导医二级分类(如眼眉)</label>
        <div>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                    $(function() {

                        var type_id_2 = '<?php echo $_smarty_tpl->getVariable('data')->value['type_id_2'];?>
'

                        sessionStorage.setItem("type_id_2", type_id_2);
                    })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(3,2)' id='type_2_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type_2']['name'];?>
</button>
            <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(3,2)' id='type_2_div_name'>请选择二级分类</button>
            <?php }?>
        </div>
        <p style='color: red;font-size: 14px;' id='type_2_div_name_error'></p>
    </div>

    <div class="form-group">
        <label for="college_type">导医三级分类(如双眼皮)</label>
        <div>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                    $(function() {

                        var type_id_3 = '<?php echo $_smarty_tpl->getVariable('data')->value['type_id_3'];?>
'

                        sessionStorage.setItem("type_id_3", type_id_3);
                    })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(3,3)' id='type_3_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type_3']['name'];?>
</button>
            <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(3,3)' id='type_3_div_name'>请选择三级分类</button>
            <?php }?>
        </div>
        <p style='color: red;font-size: 14px;' id='type_3_div_name_error'></p>
    </div>


    <div class="form-group" style='width:375px;'>
        <label for="article_content">导医文章内容</label>
        <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <div class="article_content" id='article_content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('data')->value['content']['article_content'];?>
</div>
        <?php }else{ ?>
            <div class="article_content" id='article_content' style='width:300px;'>请输入导医内容</div>
        <?php }?>
        <p style='color: red;font-size: 14px;' id='article_content_error'></p>
    </div>
    <button type="submit" class="btn btn-default" onclick='gotoSubmit(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>
    <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
</div>
<div style='height:50px;'></div>
</body>

</html>
<script>
    function gotoSubmit(type){
        var type_id_1 =$("#type_id_1").children("option:selected").val();
        var type_id_2 = sessionStorage.getItem("type_id_2");

        var type_id_3 = sessionStorage.getItem("type_id_3");

        var article_content = $('#article_content').summernote('code');

        var formData = new FormData();

        var i = 0;

        formData.append('article_content', article_content)

        if (type_id_1) {
            formData.append('type_id_1', type_id_1)
            i++;
        }

        if (base.checkSession('type_id_2', 'type_2_div_name', '请选择二级分类')) {

            formData.append('type_id_2', type_id_2)

            i++;
        }

        if (base.checkSession('type_id_3', 'type_3_div_name', '请选择三级分类')) {

            formData.append('type_id_3', type_id_3)

            i++;
        }

        if (i == 3) {

            formData.append('id', $('#id').val())

            formData.append('article_type', 3)

            formData.append('operation_type', type)

            var url = base.getDomainUrl() + '/pageredirst.php?action=symptom&functionname=add_symptom_ajax';

            base.ajax(url, 'post', formData, function success(data) {

                var url = 'pageredirst.php?action=symptom&functionname=symptom_list';

                window.location.href = url;

            }, function error(error) {


            })

        }
    }
</script>