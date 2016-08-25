<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-16 14:45:09
         compiled from "/home/wwwroot/default/medhelper_admin/Tpl/website/add_operation_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60705169057b2b67515f631-80139429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595e2652d80ceb6a5f8fd2af103e41530aac5edb' => 
    array (
      0 => '/home/wwwroot/default/medhelper_admin/Tpl/website/add_operation_info.tpl',
      1 => 1471327360,
    ),
  ),
  'nocache_hash' => '60705169057b2b67515f631-80139429',
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
/javascript/operation.js"></script>
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
            <label for="title">文章标题</label>
            <input type="text" class="form-control" id="title" placeholder="请输入文章标题" style='
            width:500px;' value='<?php echo $_smarty_tpl->getVariable('data')->value['title'];?>
'>
            <p style='color: red;font-size: 14px;' id='title_error'></p>
        </div>
        <div class="form-group">
            <label for="cover_pic_url">封面图</label>
            <input id='cover_pic_url' name='cover_pic_url' type="file" >
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
                <img src="<?php echo $_smarty_tpl->getVariable('FOOTERURL')->value;?>
medhelper/Public/image/type/<?php echo $_smarty_tpl->getVariable('data')->value['cover_pic_url'];?>
" alt="..." class="img-thumbnail" style='width:150px;'>
            <?php }?>
            <p style='color: red;font-size: 14px;' id='cover_pic_url_error'></p>
        </div>
        <div class="form-group" style='width:375px;'>
            <label for="article_content">文章内容</label>
            <?php if ($_smarty_tpl->getVariable('operation_type')->value==1){?>
            <div class="article_content" id='article_content' style='width:300px;'><?php echo $_smarty_tpl->getVariable('data')->value['content']['article_content'];?>
</div>
            <?php }else{ ?>
            <div class="article_content" id='article_content' style='width:300px;'>请输入文章内容</div>
            <?php }?>
            <p style='color: red;font-size: 14px;' id='article_content_error'></p>
        </div>
        <button type="submit" class="btn btn-default" onclick='operation.submitInfo(<?php echo $_smarty_tpl->getVariable('operation_type')->value;?>
)'>保存</button>
        <button type="submit" class="btn btn-default" onclick='base.preview("article_content")'>预览</button>
    </div>
    <div style='height:50px;'></div>
</body>

</html>