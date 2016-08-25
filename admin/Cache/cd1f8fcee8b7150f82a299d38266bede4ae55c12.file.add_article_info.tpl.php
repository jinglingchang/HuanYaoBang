<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-25 15:33:22
         compiled from "/web/www/HuanYaoBang/admin/Tpl/website/add_article_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42860032657be9f421fccd6-88365988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1f8fcee8b7150f82a299d38266bede4ae55c12' => 
    array (
      0 => '/web/www/HuanYaoBang/admin/Tpl/website/add_article_info.tpl',
      1 => 1472110396,
    ),
  ),
  'nocache_hash' => '42860032657be9f421fccd6-88365988',
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
/javascript/article.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('MAINPUBLIC')->value;?>
/javascript/jquery.cityselect.js"></script>
    <script>
        $(function () {

            var operation_type = '<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
'

            $('#content').summernote({

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
        <label for="hospital">标题</label>
        <input type="text" class="form-control" id="title" placeholder="请输入标题" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['title'];?>
'>
        <p style='color: red;font-size: 14px;' id='title_error'></p>
    </div>

    <div class="form-group">
        <label for="hospital">作者</label>
        <input type="text" class="form-control" id="auther" placeholder="请输入作者" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['auther'];?>
'>
        <p style='color: red;font-size: 14px;' id='auther_error'></p>
    </div>

    <div class="form-group">
        <label for="auther">类型</label>
        <div>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <script>
                    $(function () {

                        var type_id_1 = '<?php echo $_smarty_tpl->getVariable('data')->value['type']['id'];?>
';

                        sessionStorage.setItem("type_id_1", type_id_1);
                    })
                </script>
                <button class="btn btn-default" type="submit" onclick='base.getType(3,1)'
                        id='type_1_div_name'><?php echo $_smarty_tpl->getVariable('data')->value['type']['name'];?>
</button>
            <?php }else{ ?>
                <button class="btn btn-default" type="submit" onclick='base.getType(3,1)' id='type_1_div_name'>请选择类型
                </button>
            <?php }?>
        </div>
        <p style='color: red;font-size: 14px;' id='type_1_div_name_error'></p>
    </div>

    <div class="form-group">
        <label for="fengmiantu">封面图</label>
        <input id='fengmiantu' name='fengmiantu' type="file" >
        <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <img src="http://localhost/HuanYaoBang/web/Public/upload/<?php echo $_smarty_tpl->getVariable('data')->value['logo_name'];?>
" alt="..." class="img-thumbnail" style='width:150px;'>
        <?php }?>
        <p style='color: red;font-size: 14px;' id='fengmiantu_error'></p>
    </div>

    <div class="form-group">
        <label for="doctor_type">标签&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="cursor: pointer;"
                                                                    onclick="$('#addTagModal').modal()">添加标签</a></label>
        <div style="width:300px;" id="tag_div">

            <?php  $_smarty_tpl->tpl_vars['lists'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('type_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['lists']->key => $_smarty_tpl->tpl_vars['lists']->value){
?>

                <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>

                <label class="checkbox-inline" style="margin-left:0px;">
                    <input type="checkbox" id="tag_array" value="<?php echo $_smarty_tpl->tpl_vars['lists']->value['id'];?>
" name='tag_array' <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lists']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php if (in_array($_tmp1,$_smarty_tpl->getVariable('data')->value['tag_array'])){?>checked="checked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lists']->value['name'];?>

                </label>

                <?php }else{ ?>

                    <label class="checkbox-inline" style="margin-left:0px;">
                        <input type="checkbox" id="tag_array" value="<?php echo $_smarty_tpl->tpl_vars['lists']->value['id'];?>
" name='tag_array' ><?php echo $_smarty_tpl->tpl_vars['lists']->value['name'];?>

                    </label>

                <?php }?>

            <?php }} ?>


        </div>


        <p style='color: red;font-size: 14px;' id='tag_array_error'></p>
    </div>

    <div class="form-group" style='width:375px;'>
        <label for="digest">文章摘要</label>

        <textarea style="width: 400px;height: 300px;" id="digest"><?php echo $_smarty_tpl->getVariable('data')->value['digest'];?>
</textarea>

        <p style='color: red;font-size: 14px;' id='digest_error'></p>
    </div>

    <div class="form-group" style='width:375px;'>
        <label for="article_content">文章内容</label>
        <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <div class="content" id='content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('data')->value['content'];?>
</div>
        <?php }else{ ?>
            <div class="content" id='content' style='width:300px;'>请输入文章内容</div>
        <?php }?>
        <p style='color: red;font-size: 14px;' id='content_error'></p>
    </div>
    <button type="submit" class="btn btn-default" onclick='article.submit(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>

    <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
</div>
<div style='height:50px;'></div>
</body>

</html>

<div class="modal fade" id='addTagModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加标签</h4>
            </div>


            <div class="modal-body" id='preview_body'>


                <div class='form-inline'>
                    <div class="form-group">
                        <label for="tag_name">标签名称</label>
                        <input type="text" class="form-control" id="tag_name" placeholder="请输入标签名称" style='width:100%;'>
                        <p style='color: red;font-size: 14px;' id='tag_name_error'></p>
                    </div>

                </div>

            </div>
            <!-- /.modal-content -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick='submitTag()'>确定
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>

        </div>
        <!-- /.modal-dialog -->
    </div>

</div>


<script>

    $(function () {
        $('#addTagModal').on('hidden.bs.modal', function (e) {

            $('#addTagModal').modal('hide');
        })
    });

    function submitTag() {

        var tag_name = $('#tag_name').val();

        if (tag_name) {

            $('#tag_name_error').html('');

            var formData = new FormData();

            formData.append('name', tag_name);

            formData.append('type', 4);

            formData.append('level', 1);

            var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=add_type_ajax';

            base.ajax(url, 'post', formData, function success(data) {

                var dataObj = eval("(" + data + ")");

                if (dataObj['id'] > 0) {

                    var html = "<label class='checkbox-inline' style='margin-left:0px;'>";

                    html += '<input type="checkbox" id="tag_array" value="' + dataObj['id'] + '" name="tag_array" checked>' + tag_name;

                    html += "</label>";

                    $('#tag_div').append(html);

                    $('#addTagModal').modal('hide');
                }

            }, function error(error) {


            })

        } else {

            $('#tag_name_error').html('请输入标签名称');
        }
    }

</script>