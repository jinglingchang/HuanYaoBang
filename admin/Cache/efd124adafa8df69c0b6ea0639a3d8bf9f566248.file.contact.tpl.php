<?php /* Smarty version Smarty-3.0-RC2, created on 2016-07-26 15:18:03
         compiled from "/home/wwwroot/default/medhelper_admin/Tpl/website/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15754826057970eab2aad55-12865015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd124adafa8df69c0b6ea0639a3d8bf9f566248' => 
    array (
      0 => '/home/wwwroot/default/medhelper_admin/Tpl/website/contact.tpl',
      1 => 1467197223,
    ),
  ),
  'nocache_hash' => '15754826057970eab2aad55-12865015',
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
/javascript/config/contact.js"></script>
    <script>
    $(function() {

        $('.agreement_content').summernote({

            height: 669

        });

    })
    </script>
</head>

<body>
    <div style='margin-left: 20px;margin: 0 auto;width:375px;margin-top: 20px;'>

     

        <div class="form-group" style='width:375px;'>
            <div class="agreement_content" id='content' style='width:375px;'><?php echo $_smarty_tpl->getVariable('html')->value;?>
</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default" onclick='contact.submitHtml()'>保存</button>
            <button type="submit" class="btn btn-default" onclick='base.preview("content")'>预览</button>
        </div>
    </div>
</body>

</html>

<?php $_template = new Smarty_Internal_Template("../public/_preview.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>