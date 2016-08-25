<?php /* Smarty version Smarty-3.0-RC2, created on 2016-07-06 13:40:55
         compiled from "/home/wwwroot/default/medhelper_admin/Tpl/website/branch_type_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1769011749577c99e7a46e29-86740914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ede9f4f9edf76fb2c9c0a1d93996e60d32bf96d' => 
    array (
      0 => '/home/wwwroot/default/medhelper_admin/Tpl/website/branch_type_list.tpl',
      1 => 1467197222,
    ),
  ),
  'nocache_hash' => '1769011749577c99e7a46e29-86740914',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal fade" id='branchTypeModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo $_smarty_tpl->getVariable('name')->value;?>
小分类</h4>
            </div>
            <div class="modal-body" id='preview_body'>
                <div style='max-height: 300px;padding-left: 25px;overflow-y: auto;' class='form-inline'>
                    <?php  $_smarty_tpl->tpl_vars['datas'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['datas']->key => $_smarty_tpl->tpl_vars['datas']->value){
?>
                    <label class="radio-inline" style='width:100px;height:50px;padding:0;margin:0;'>
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
"><span id='branch_type_<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
' style='display:inline-block;width:100px;overflow: hidden;'><?php echo $_smarty_tpl->tpl_vars['datas']->value['branch_type_name'];?>
</span>
                    </label>
                    <?php }} ?>
                </div>
                <div class='form-inline'>
                    <div class="form-group">
                        <label for="addMainTypeName">添加分类</label>
                        <input type="text" class="form-control" id="addBranchTypeName" placeholder="请输入分类名称">
                    </div>
                    <button type="submit" class="btn btn-default" onclick='base.saveBranchType(<?php echo $_smarty_tpl->getVariable('type')->value;?>
)'>保存</button>
                </div>

                <div style='height:10px;'>&nbsp;</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='base.submitBranchType()'>确定</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
