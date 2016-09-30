<?php /* Smarty version Smarty-3.0-RC2, created on 2016-09-24 13:30:28
         compiled from "E:\wamp\www\HuanYaoBang\admin/Tpl/website/../public/_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2198157e60f74c148b8-28305953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6322bc09381181d5e0ab76add70486b978c9eb7b' => 
    array (
      0 => 'E:\\wamp\\www\\HuanYaoBang\\admin/Tpl/website/../public/_preview.tpl',
      1 => 1474635982,
    ),
  ),
  'nocache_hash' => '2198157e60f74c148b8-28305953',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
$(function() {

    $('#previewModal>img').css('max-width', '100%');

    $('#previewModal>img').css('width', '100%');

})
</script>
<style type="text/css">
#previewModal>img {
    margin: 0 auto;
}


</style>
<div class="modal fade" id='previewModal' style=''>
    <div class="modal-dialog">
        <div class="modal-content" style='width:375px;'>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">该预览图以iphone6为范例</h4>
            </div>
            <div class="modal-body" id='preview_body' style='width:375px;overflow: hidden;font-size:15px;min-height: 667px;'>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->