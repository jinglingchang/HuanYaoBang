<?php /* Smarty version Smarty-3.0-RC2, created on 2016-05-11 18:49:38
         compiled from "/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Iconlist/Tpl/Iconlist/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83433493657330e42000dc3-80157760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3776aa3e056ff88be7b87bd495ee5613c1795e5' => 
    array (
      0 => '/Users/shanhaokun/Desktop/Lev/Sites/employer_tool/Lib/Iconlist/Tpl/Iconlist/message.tpl',
      1 => 1462522203,
    ),
  ),
  'nocache_hash' => '83433493657330e42000dc3-80157760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Users/shanhaokun/Desktop/Lev/Sites/config/Smarty/libs/plugins/modifier.date_format.php';
?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/multPage/back.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/tip/error.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

 <div class="hl-warp_div hl-warp_div_left">
     <div style="height:100px;border-bottom:solid 1px #e1e1e1;text-align: right;
                 padding-right: 30px;font-size: 14px;">
         <button style="margin-top: 30px;" class="btn btnStandard" onclick='is_read()'>清空消息中心</button>
     </div>

     <table class="hl-message-table">
         <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('message_info')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
?>
         <tr>
             <td class="hl-message-content-td"><?php echo $_smarty_tpl->tpl_vars['data']->value['message_content'];?>
</td>
             <td class="hl-message-time-td"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%Y-%m-%d %H:%M");?>
</td>
         </tr>
         <?php }} ?>
     </table>

     <div class='page_div'><?php echo $_smarty_tpl->getVariable('fenye')->value;?>
</div>

       
     <div style="min-height:30px;"></div>

   

 </div>

 <div style="min-height:30px;"></div>

 <script>
        function is_read() {

            $.ajax({
                url: url + 'iconlist/is_read', // 跳转到 action
                data: {
                
                },
                type: 'post',
                cache: false,
                success: function (data) {

                   if(data == 1){

                     location.reload();
                   } else{

                        setErrorTip('消息已清空');
                   }
                },
                error: function () {

                }
            });


        }

        function ajaxPage(page){



        }

    </script>