<?php /* Smarty version Smarty-3.0-RC2, created on 2016-09-21 14:55:26
         compiled from "C:\wamp\www\hybbbb\admin/Tpl/website/type_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2352557e22ede0e9f99-63251504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caeb6a06ffbce229d3703391d71900fb9459d485' => 
    array (
      0 => 'C:\\wamp\\www\\hybbbb\\admin/Tpl/website/type_list.tpl',
      1 => 1473786538,
    ),
  ),
  'nocache_hash' => '2352557e22ede0e9f99-63251504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal fade" id='mainTypeModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo $_smarty_tpl->getVariable('name')->value;?>
分类</h4>
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
"><span id='main_type_<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
' style='display:inline-block;width:100px;overflow: hidden;'><?php echo $_smarty_tpl->tpl_vars['datas']->value['name'];?>
</span>
                        </label>
                    <?php }} ?>
                </div>

                <div style='height:10px;'>&nbsp;</div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-default" onclick='base.addType(<?php echo $_smarty_tpl->getVariable('type')->value;?>
,<?php echo $_smarty_tpl->getVariable('level')->value;?>
)'>添加分类</button>

                    <button type="button" class="btn btn-default" onclick='websiteType.addType(<?php echo $_smarty_tpl->getVariable('type')->value;?>
,<?php echo $_smarty_tpl->getVariable('level')->value;?>
)'>确定</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script>
        $(function() {
            $('#mainTypeModal').on('hidden.bs.modal', function(e) {

                base.removeMainType('mainTypeModal');

            })
        });
    </script>