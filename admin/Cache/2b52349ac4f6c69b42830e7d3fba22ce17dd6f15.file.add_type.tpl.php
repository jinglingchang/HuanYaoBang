<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-24 14:15:10
         compiled from "/web/www/HuanYaoBang/admin/Tpl/website/add_type.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51160685157bd3b6ecce050-25227131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b52349ac4f6c69b42830e7d3fba22ce17dd6f15' => 
    array (
      0 => '/web/www/HuanYaoBang/admin/Tpl/website/add_type.tpl',
      1 => 1471944332,
    ),
  ),
  'nocache_hash' => '51160685157bd3b6ecce050-25227131',
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
                <h4 class="modal-title">添加<?php echo $_smarty_tpl->getVariable('name')->value;?>
分类</h4>
            </div>
            <div class="modal-body" id='preview_body'>
                <div class='form-inline'>
                    <div class="form-group">
                        <label for="name">分类名称</label>
                        <input type="text" class="form-control" id="name" placeholder="请输入分类名称" style='width:100%;'>
                        <p style='color: red;font-size: 14px;' id='name_error'></p>
                    </div>

                </div>
                <div style='height:10px;'>&nbsp;</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick='base.saveType(<?php echo $_smarty_tpl->getVariable('type')->value;?>
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