<?php /* Smarty version Smarty-3.0-RC2, created on 2016-08-24 14:09:53
         compiled from "/web/www/HuanYaoBang/admin/Tpl/website/../public/_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:625405757bd3a3198de48-83589895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '451c21df19a60b18fe5ec5637d309e5157115a83' => 
    array (
      0 => '/web/www/HuanYaoBang/admin/Tpl/website/../public/_preview.tpl',
      1 => 1471940782,
    ),
  ),
  'nocache_hash' => '625405757bd3a3198de48-83589895',
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